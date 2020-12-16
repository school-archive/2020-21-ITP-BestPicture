<?php
    require_once "mysql_manager.php";

    function get_unapproved_photo() {
        $s = get_bp_mysql_object()->prepare("select * from photo where approved_by_admins is not true");
        $s->execute();
        return $s->fetch();
    }

    function delete_photo($photoid) {
        $s = get_bp_mysql_object()->prepare("delete from photo where photo_id = :photoid");
        $s->execute(array(":photoid" => $photoid));
        return $s->fetch();
    }

    function create_image_entry($userid, $title=null, $desc=null, $approved_by_admins=false) {
        $photoid = random_int(0, 1000000000);
        while (get_photo_by_id($photoid) != false)
            $photoid = random_int(0, 1000000000);

        $path = "assets/images/uploads/" . $photoid . ".jpg";

        $s = get_bp_mysql_object()->
        prepare("insert into photo (photo_id, user_id, path, approved_by_admins, title, description) values (:photo_id, :user_id, :filepath, :approved_by_admins, :title, :desc)");
        $s->execute(array(
            ":user_id" => $userid,
            ":photo_id" => $photoid,
            ":filepath" => $path,
            ":approved_by_admins" => $approved_by_admins,
            ":title" => $title,
            ":desc" => $desc
        ));

        return $photoid;
    }

    function get_photo_by_id($photoid) {
        $s = get_bp_mysql_object()->prepare("select * from photo where photo_id = :photoid");
        $s->execute(array(":photoid" => $photoid));
        return $s->fetch();
    }

    function set_photo_approved($photoid, $approved=true) {
        $s = get_bp_mysql_object()->prepare("update photo set approved_by_admins=:approved where photo_id = :photoid");
        $s->execute(array(
            ":approved" => $approved,
            ":photoid" => $photoid
        ));
        return $s->fetch();
    }

    function get_all_photos_by_user($userid=null) {
        if ($userid == null) $userid = get_signed_in_user_id();

        $s = get_bp_mysql_object()->prepare("select * from photo p where user_id = :userid and approved_by_admins");
        $s->execute(array(":userid" => $userid));
        return $s->fetchAll();
    }

    function get_username_by_photo($photoid) {
        $s = get_bp_mysql_object()->prepare("select concat(vorname, ' ', nachname) as name from user u join photo p on u.user_id = p.user_id where photo_id = :photoid");
        $s->execute(array(
            ":photoid" => $photoid
        ));
        return $s->fetch();
    }
