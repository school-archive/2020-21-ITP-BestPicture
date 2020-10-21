<?php
    require_once "mysql_manager.php";

    /*
     * Liefert ein User-Objekt mit der gegebenen User ID
     */
    function get_user_by_id($userid) {
        $s = get_bp_mysql_object()->prepare("select * from user where user_id = :userid");
        $s->execute(array(":userid" => $userid));
        return $s->fetch();
    }

    /*
     * Liefert die User ID einer gegebenen Email
     */
    function get_userid_by_email($email) {
        $s = get_bp_mysql_object()->prepare("select * from user where email = :email");
        $s->execute(array(":email" => $email));
        $obj = $s->fetch();
        var_dump($obj);
    }

    /*
     * Liefert den momentan angemeldeten Benutzer
     */
    function get_signed_in_user() {
        $userid = get_signed_in_user_id();
        if ($userid == -1)
            return null;
        else
            return get_bp_mysql_object()->query("select * from user where user_id = {$userid}")->fetch();
    }

    /*
     * Liefert die ID des momentan angemeldeten Benutzers
     */
    function get_signed_in_user_id() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if (isset($_SESSION["userid"]))
            return $_SESSION["userid"];
        else return -1;
    }

    /*
     * Setzt den angemeldeten Benutzer
     */
    function set_logged_in_user($userid) {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        session_reset();
        $_SESSION["userid"] = $userid;
    }

    /*
     * Löscht die momentane Sitzung
     */
    function set_logged_out() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        session_destroy();
    }