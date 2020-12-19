<?php
    require_once "../user_manager.php";

    if (!isset($_POST["email"]))
        handleError("email missing");

    if (!isset($_POST["password"]))
        handleError("password missing");

    $email = trim(strtolower($_POST["email"]));
    $userid = get_userid_by_email($email);

    if ($userid == -1)
        handleError("this email is not registered");

    $password_correct = check_password($userid, $_POST["password"]);

    if ($password_correct) {
        set_logged_in_user($userid);
        // TODO weiterleiten zu angemeldeter seite
        header('Location: ../../index.php');
    } else {
        handleError("invalid password");
    }

    function handleError($msg) {
        // TODO proper error handling
        header("Location: ../../index.php?error=$msg"); #array
        #echo $msg;
        #exit();
    }