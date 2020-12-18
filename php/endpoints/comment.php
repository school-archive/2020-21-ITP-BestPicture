<?php
    require_once "../photo.php";
    require_once "../user.php";

    #if(get_signed_in_user_id()!==-1) {
        if ($_GET["action"] == "like") {
            #if user not liked this picture before
            increase_like($_GET["picture"], 1); #get_signed_in_user_id()
            echo 'true';
        }
    #}