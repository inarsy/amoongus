<?php

session_start();

require_once 'common_functions.php';
require_once 'dbconnect.php';

echo "<form method='post' action='ticket_booking.php'>'";

echo "<select name='ticket_type'>";
$ticket_types = get_ticket_types(dbconnect());

foreach ($ticket_types as $type) {

    echo "<option value=".$type['ticketid'].">".$type['ticket']."</option>";

}

echo "</select><br>";

echo "<input type='date' name='booking_date' value='2025-03-15' min='2025-03-04' max='2025-11-30' />";

echo "<input type='text' name='num' value='number of tickets' ><br>";

echo "<input type='submit' name='submit' value='Register'>";