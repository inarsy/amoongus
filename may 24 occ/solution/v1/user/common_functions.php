<?php

function usr_error(&$session){
    if(isset($session['message'])) {
        $temp = $session['message'];
        unset($session['message']);
        return $temp;
    } else {
        return "";
    }
}

function get_ticket_types($conn) {
    try {
        $sql = "SELECT ticketid, ticket from tickets";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchall(PDO::FETCH_ASSOC);

        return $result;
    }

    catch(PDOException $e) {
        error_log("Database error in get ticket type".$e->getMessage());
        throw $e;
    }

}