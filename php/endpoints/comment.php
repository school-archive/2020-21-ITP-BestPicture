<?php
    require_once "../photo.php";
    require_once "../user.php";

    #if(get_signed_in_user_id()!==-1) {
        if ($_GET["action"] == "like") {
            $photoid = $_GET["picture"];
            increase_like($photoid, 1); #get_signed_in_user_id()
            echo 'true';
        }
    #}