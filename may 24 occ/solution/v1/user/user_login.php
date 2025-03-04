<?php

session_start();

require_once 'common_functions.php';

if (isset($_SESSION['user_ssnlogin'])) {

    $_SESSION['message'] = "You are already logged in!";
    header('location: index.php');
    exit;
}

elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'dbconnect.php';

    try {

        $conn = dbconnect();
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt ->bindParam(1, $_POST['username']);
        $stmt->execute();
        $result = $stmt->Fetch(PDO::FETCH_ASSOC);
        $conn = null;

        if($result) {

            if(password_verify($_POST['password'], $result['password'])) {
                $_SESSION['user_ssnlogin'] = true;
                $_SESSION['username'] = $_POST['username'];
                $_session["userid"] = $result['userid'];
                $_SESSION['message'] = "You are logged in!";
                header('Location: index.php');
                exit;
            } else {
                $_SESSION['ERROR'] = "Password don't match!";
                header('Location: user_login.php');
                exit;
            }

        } else {
            $_SESSION['message'] = "Username doesn't exist!";
            header('Location: user_login.php');
            exit;
        }
        } catch (Exception $e) {
        $_SESSION['message'] = "User login" . $e->getMessage();
        header('Location: user_login.php');
        exit;
    }


    } else {

        echo "<!DOCTYPE html>";

        echo "<html lang='en'>";

        echo "<head>";

        echo "<link rel='stylesheet' href='style.css'>";

        echo "<title> RZL User Login</title>";

        echo "</head>";

        echo "<body>";

        echo "<div id='list container'>";

        require_once 'title.php';

        require_once 'nav.php';

        echo "<div id='title'>";

        echo "<h3 id='banner'>RZL User System</h3>";

        echo "</div>";

        echo "<div id='content'>";

        echo "<h4> User Login</h4>";

        echo "<br>";

        echo usr_error($_SESSION);

        echo "<form method='post' action='user_login.php'>";

        echo "<input type='text' name='username' placeholder='Username' required><br>";

        echo "<input type='password' name='password' placeholder='Password' required><br>";

        echo "<input type='submit' name='submit' value='Login'>";

        echo "<br><br>";

        echo "</div>";

        echo "</div>";

        echo "</body>";

        echo "</html>";

}