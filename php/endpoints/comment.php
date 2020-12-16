<?php
    require_once "../user.php";

    echo "<script>alert('laskdfds');</script>";
    #if(get_signed_in_user_id()!==-1) {
        if ($_GET["action"] == "like") {
            echo "plessssssse";
            increase_like(2, get_signed_in_user_id()); ######photoid
            echo "
            <script>
                let heart = document.getElementById('heart');
                heart.src = '../assets/images/heart_full.png';
            </script>
            ";
        }
    #}