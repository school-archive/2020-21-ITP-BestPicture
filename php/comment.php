<?php
    require_once "mysql_manager.php";
    require_once "user.php";

    /*
     * Übeprüft ob Kommentar Wörter aus Blacklist enthält, ruft saveComment() auf
     */
    function filterComment($photo_id, $comment) {
        $blacklist = file_get_contents("cursewordlist.txt");

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

    /*
     * Liefert Array [Vorname Nachname] => Kommentar
     */
    function getComment($photo_id) {
        $s = get_bp_mysql_object()->prepare("select concat(vorname, ' ', nachname) Name, text
        from photo p
        join comment c on p.photo_id = c.photo_id
        join user u on u.user_id = c.user_id
        where p.photo_id = :photo_id
        ");
        $s->execute(array(":photo_id" => $photo_id));
        $obj = $s->fetch();

        return array_combine($obj["Name"], $obj["text"]);
    }
