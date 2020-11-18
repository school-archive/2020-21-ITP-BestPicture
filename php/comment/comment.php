<?php
    require_once "../mysql_manager.php";
    require_once "../user.php";

    /*
     * Übeprüft ob Kommentar Wörter aus Blacklist enthält
     */
    function filterComment($photo_id, $comment) {
        $blacklist = file_get_contents("Schimpfwortliste.txt");

        if(preg_match($blacklist, $comment)) {
            saveComment($photo_id, $comment);
        }
    }

    /*
     * Speichert geschriebenen Kommentar in Datenbank
     */
    function saveComment($photo_id, $comment) {
        if(get_signed_in_user()!=-1) {
            $sql = get_bp_mysql_object()->prepare("insert into comment (photo_id, user_id, text) values (:photo_id, :user_id, :comment)");
            $sql->execute(array(
                ":photo_id" => $photo_id,
                ":user_id" => get_signed_in_user(),
                ":comment" => $comment
            ));
        }
    }