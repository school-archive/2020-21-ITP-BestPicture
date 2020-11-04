<?php

    if (! (isset($_POST["firstname"]) && isset($_POST["surname"])))
        handleError("name missing");

    if (!isset($_POST["email"]))
        handleError("email missing");

    if (!isset($_POST["password"]))
        handleError("password missing");

    $email = trim(strtolower($_POST["email"]));

    if (!preg_match("(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)", $email))
        handleError("invalid email address");
    if (!dns_check_record(explode("@", $email)[1], "mx"))
        handleError("invalid email domain");

    if (strlen($_POST["password"]) < 8)
        handleError("passwort too short (min 8 chars)");
    else if (strlen($_POST["password"]) > 256)
        handleError("passwort too long (max 256 chars)");

    require_once "../user_manager.php";
    if (get_userid_by_email($email) != -1)
        handleError("this email is already in use");

    $userid = create_user($email, $_POST["firstname"], $_POST["surname"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    set_logged_in_user($userid);

    // TODO weiterleiten zu angemeldeter seite

    function handleError($msg) {
        // TODO proper error handling
        echo $msg;
        exit();
    }