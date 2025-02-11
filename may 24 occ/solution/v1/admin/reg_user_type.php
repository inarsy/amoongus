<?php

include '../functions/db_connect.php';

try {  //try this code

    $sql = "INSERT INTO user_type (type, discount) VALUES (?, ?)";  //prepare the sql to be sent
    $stmt = $conn->prepare($sql); //prepare to sql

    $stmt->bindParam(1,$_POST['user_type']);  //bind parameters for security
    $stmt->bindParam(2,$_POST['discount']);

    $stmt->execute();  //run the query to insert


    header("refresh:5; url=add_user_type.php"); //confirm and redirect
    echo "<link rel='stylesheet' href='admin_styles.css'>";
    echo "Successfully registered a new user type";
} catch (PDOException $e) { //catch error
    //header("refresh:4; url=add_user_type.php");
    echo "<link rel='stylesheet' href='admin_styles.css'>";
    echo "Error: " . $e->getMessage();
    echo "failed to register a user type, try again";
}