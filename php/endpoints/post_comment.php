<?php
require_once "../user.php";
require_once "../photo.php";
require_once "../comment.php";

$userid = get_signed_in_user_id();
if ($userid == null)
    handleError("not signed in");

if (!isset($_GET["photoid"])) {
    handleError("photoid not set");
} else if (!isset($_GET["comment"])) {
    handleError("comment content not set");
} else {
    filterComment($_GET["photoid"], $_GET["comment"]);
}

function handleError($msg) {
    header("Content-Type: application/json");
    echo json_encode(array(
        "success" => false,
        "message" => $msg
    ));
}