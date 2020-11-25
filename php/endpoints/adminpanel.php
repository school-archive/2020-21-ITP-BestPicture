<?php
    require_once "../contest.php";
    require_once "../user.php";
    require_once "../user_manager.php";

    $user = get_signed_in_user();

    $response = array();
    if ($_GET["action"] == "start_contest") {
        if (get_current_contest_id() == -1) {
            start_contest();
            $response["success"] = true;
            $response["message"] = "contest started";
        } else {
            $response["success"] = false;
            $response["message"] = "contest already running";
        }
    } else if ($_GET["action"] == "stop_contest") {
        if (get_current_contest_id() != -1) {
            stop_contest();
            $response["success"] = true;
            $response["message"] = "contest stopped";
        } else {
            $response["success"] = false;
            $response["message"] = "no contest running";
        }
    } else if ($_GET["action"] == "unapproved_image") {

    } else if ($_GET["action"] == "approve_image") {

    } else if ($_GET["action"] == "delete_user") {
        if (!isset($_GET["userid"]))
            $response = array(
                "success" => false,
                "message" => "missing userid parameter"
            );
        else if (get_user_by_id($_GET["userid"]) == false)
            $response = array(
                "success" => false,
                "message" => "there exists no user with id '$_GET[userid]'"
            );
        else {
            delete_user($_GET["userid"]);
            $response = array(
                "success" => true,
                "message" => "user with id '$_GET[userid]' was deleted"
            );
        }
    } else if ($_GET["action"] == "delete_photo") {
        if (!isset($_GET["photoid"]))
            $response = array(
                "success" => false,
                "message" => "missing photoid parameter"
            );
        else if (get_photo_by_id($_GET["photoid"]) == false)
            $response = array(
                "success" => false,
                "message" => "there exists no photo with id '$_GET[photoid]'"
            );
        else {
            delete_photo($_GET["userid"]);
            $response = array(
                "success" => true,
                "message" => "photo with id '$_GET[photoid]' was photo"
            );
        }
    }

    echo json_encode($response);