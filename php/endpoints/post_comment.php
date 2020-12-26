<?php
require_once "../user.php";
require_once "../photo.php";
require_once "../comment.php";

$userid = get_signed_in_user_id();
if ($userid === -1)
    handleError("not signed in");

if (!isset($_GET["photoid"])) {
    handleError("photoid not set");
} else if (!isset($_GET["comment"])) {
    handleError("comment content not set");
} else {
    $comment = filterComment($_GET["photoid"], $_GET["comment"]);
    $user =  get_signed_in_user();
    echo json_encode([
        "success" => "true",
        "name" => $user['vorname'] ." " .$user['nachname'],
        "comment" => $comment
    ]);
}

function handleError($msg) {
    echo json_encode([
      "success" => "false"
    ]);
    exit();
}