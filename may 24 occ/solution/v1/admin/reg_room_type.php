<?php

include '../functions/db_connect.php';

try {  //try this code

    $sql = "INSERT INTO hotel_rooms (type, occupancy, no_of_rooms, price) VALUES (?, ?, ?, ?)";  //prepare the sql to be sent
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1,$_POST['room_type']);  //bind parameters for security
    $stmt->bindParam(2,$_POST['occupancy']);
    $stmt->bindParam(3,$_POST['num_rooms']);
    $stmt->bindParam(4,$_POST['price']);

    $stmt->execute();  //run the query to insert


    header("refresh:5; url=add_room_type.php"); //confirm and redirect
    echo "<link rel='stylesheet' href='admin_styles.css'>";
    echo "Successfully registered a new room type";
} catch (PDOException $e) { //catch error
    //header("refresh:4; url=add_room_type.php");
    echo "<link rel='stylesheet' href='admin_styles.css'>";
    echo "Error: " . $e->getMessage();
    echo "failed to register a room type, try again";
}