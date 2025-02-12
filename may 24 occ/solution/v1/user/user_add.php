<?php


    if ($_POST['password'] == $_POST['password_check']) {
        try {  //try this code
            $hpswd = password_hash($_POST['password'], PASSWORD_DEFAULT);  //hash the password

            include '../functions/db_connect.php';

            $sql = "INSERT INTO users (username, password, f_name, s_name, user_type_id) VALUES (?, ?, ?, ?, ?)";  //prepare the sql to be sent
            $stmt = $conn->prepare($sql); //prepare to sql

            $stmt->bindParam(1, $_POST['username']);  //bind parameters for security
            $stmt->bindParam(2, $hpswd);
            $stmt->bindParam(3, $_POST['fname']);
            $stmt->bindParam(4, $_POST['lname']);
            $stmt->bindParam(5, $_POST['user_type']);

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
    }