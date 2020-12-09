<?php
    require_once "mysql_manager.php";

    /**
     * startet einen neuen wettbewerb und stoppt den alten, falls noch einer läuft
     */
    function start_contest() {
        if (get_current_contest_id() != -1)
            stop_contest();

        $contestid = random_int(0, 1000000000);
        while (get_user_by_id($contestid) != false)
            $contestid = random_int(0, 1000000000);

        $s = get_bp_mysql_object()->
        prepare("insert into contest (contest_id) values (:contestid)");
        $s->execute(array(
            ":contestid" => $contestid
        ));
    }

    /**
     * stoppt den aktuellen wettbewerb und speichert den gewinner
     */
    function stop_contest() {
        $contestid = get_current_contest_id();
        $winner = get_contest_winner();
        $s = get_bp_mysql_object()->prepare("update contest set end = current_timestamp(), winner_entry_id = :winnerid where contest_id = :contestid;");
        $s->execute(array(
            ":winnerid" => $winner["entry_id"],
            ":contestid" => $contestid
        ));
    }

    function get_contest_by_id($id) {
        $s = get_bp_mysql_object()->prepare("select * from contest where contest_id = :contestid");
        $s->execute(array(":contestid" => $id));
        return $s->fetch();
    }

    function get_current_contest_id() {
        $s = get_bp_mysql_object()->prepare("select * from contest where end is null");
        $s->execute();
        $contest = $s->fetch();
        if ($contest == false) return -1;
        return $contest["contest_id"];
    }

    /** liefert die id des gewinners eines wettbewerbs
     * @param null $contest_id id des wettbewerbs, wenn null dann wird der laufende wettbewerb verwendet
     */
    function get_contest_winner($contest_id=null) {
        if ($contest_id == null) $contest_id = get_current_contest_id();
        $s = get_bp_mysql_object()->prepare("select entry_id, contest_id, count(entryrating_id) as 'num_ratings' from contest_entry left join entry_rating er on contest_entry.photo_id = er.photo_id where contest_id=:contestid group by entry_id order by num_ratings desc;");
        $s->execute(array(":contestid" => $contest_id));
        return $s->fetch();
    }