<?php

    if (!isset($_POST["email"]))
        handleError("email missing");

    if (! (isset($_POST["firstname"]) && isset($_POST["surname"])))
        handleError("name missing");

    if (!isset($_POST["password"]))
        handleError("password missing");

    $email = trim(strtolower($_POST["email"]));

    if (!preg_match("(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$)", $email))
        handleError("invalid email address");
    if (!dns_check_record(explode("@", $email)[1], "mx"))
        handleError("invalid email domain");

    if (strlen($_POST["password"]) < 8)
        handleError("password too short (min 8 chars)");
    else if (strlen($_POST["password"]) > 256)
        handleError("password too long (max 256 chars)");

    require_once "../user_manager.php";
    if (gettype(get_userid_by_email($email))!='NULL')
        handleError("this email is already in use");

    $userid = create_user($email, $_POST["firstname"], $_POST["surname"], password_hash($_POST["password"], PASSWORD_DEFAULT));
    set_logged_in_user($userid);

    echo "success";

    function handleError($msg) {
        echo $msg;
        exit();
    }