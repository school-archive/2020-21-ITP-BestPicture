<?php
require_once "../user.php";
$userid = get_signed_in_user_id();
if ($userid == null)
    handleError("not signed in");

if (!empty($_FILES)) {
    echo "<pre>\r\n";
    echo htmlspecialchars(print_r($_FILES, 1));
    echo "</pre>\r\n";

    $img = image_parse($_FILES["file"]["tmp_name"], $_FILES["file"]["type"]);
    $new_img = image_scaledown($img);

    echo "<br>" . $userid;

    $photoid = create_image_entry($userid);
    ob_start();
    imagejpeg($new_img, null, 100);
    $size = ob_get_length();
    ob_end_clean();

    $quality = 100;
    if ($size > 1000000)
        $quality = 70;
    imagejpeg($new_img, "../../assets/images/uploads/" . $photoid . ".jpg", $quality);

    echo "<br>photo id: $photoid<br>quality: $quality%<br>size: $size";
}

function create_image_entry($userid, $approved_by_admins=false) {
    $photoid = random_int(0, 1000000000);
    while (get_photo_by_id($photoid) != false)
        $photoid = random_int(0, 1000000000);

    $path = "assets/images/uploads/" . $photoid . ".jpg";

    $s = get_bp_mysql_object()->
    prepare("insert into photo (photo_id, user_id, path, approved_by_admins) values (:photo_id, :user_id, :filepath, :approved_by_admins)");
    $s->execute(array(
        ":user_id" => $userid,
        ":photo_id" => $photoid,
        ":filepath" => $path,
        ":approved_by_admins" => $approved_by_admins
    ));

    return $photoid;
}

function get_photo_by_id($photoid) {
    $s = get_bp_mysql_object()->prepare("select * from photo where photo_id = :photoid");
    $s->execute(array(":photoid" => $photoid));
    return $s->fetch();
}

/**
 * returns an image resource
 * @param $file_url
 * @param $file_type
 * @return false|resource|null
 */
function image_parse($file_url, $file_type) {
    switch ($file_type) {
        case "image/jpeg":
            return imagecreatefromjpeg($file_url);
        case "image/png":
            return imagecreatefrompng($file_url);
        case "image/gif":
            return imagecreatefromgif($file_url);
    }
    return null;
}

/**
 * scales image down to specified size if larger
 * @param resource $image
 * @param int $max_pixels
 * @return false|resource
 */
function image_scaledown($image, $max_pixels=1920) {
    $orig_w = imagesx($image);
    $orig_h = imagesy($image);
    $new_w = $orig_w;
    $new_h = $orig_h;
    if (max($orig_w, $orig_h) == $orig_w && $orig_w > $max_pixels) {
        $new_w = $max_pixels;
        $new_h = $orig_h / ($orig_w / $max_pixels);
    } else if (max($orig_w, $orig_h) == $orig_h && $orig_h > $max_pixels) {
        $new_h = $max_pixels;
        $new_w = $orig_w / ($orig_h / $max_pixels);
    }
    $new_img = imagecreatetruecolor($new_w, $new_h);
    imagecopyresampled($new_img, $image, 0, 0, 0, 0, $new_w, $new_h, $orig_w, $orig_h);
    return $new_img;
}

function handleError($msg) {
    // TODO proper error handling
    echo $msg;
    exit();
}