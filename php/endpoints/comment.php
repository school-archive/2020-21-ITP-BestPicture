<?php
    require_once "../photo.php";
    require_once "../user.php";

    if(get_signed_in_user_id()!==-1) {
        if ($_GET["action"] == "like") {
            $photoid = $_GET["picture"];
            if(!if_user_liked_photo($photoid, get_signed_in_user_id())) {
                increase_like($photoid, get_signed_in_user_id());
                echo 'true';
            }
        }
    }