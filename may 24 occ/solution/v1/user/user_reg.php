<?php

//page for a user to register an account

echo "<!DOCTYPE html>";

echo "<html lang='en'>";

echo "<head>";
echo "<link rel='stylesheet' href='style.css'>";
echo "<title> add page title here</title>";
echo "</head>";

echo "<body>";

echo "<div id='container'>";

echo "<div id='title'>";

echo "<h3 id='banner'>RZL Add Admin</h3>";

echo "</div>";

include 'navb.php';

echo "<div id='content'>";

echo "<h4> Add New Admin </h4>";

echo "<br>";

//form for the users infomation to be input
echo "<form action='user_add.php' method='post'>";
echo   "<label for='username'>Username:</label><br>";
echo   "<input type='text'  name='username' value=''><br><br>";

echo   "<label for='password'>Password:</label><br>";
echo   "<input type='text' name='password' value=''><br><br>";
echo   "<label for='password_check'>Confirm Password:</label><br>";
echo   "<input type='text' name='password_check' value=''><br><br>";

echo   "<label for='fname'>First name:</label><br>";
echo   "<input type='text' name='fname' value='John'><br>";
echo   "<label for='lname'>Last name:</label><br>";
echo   "<input type='text' name='lname' value='Doe'><br><br>";

echo   "<label for='cars'>Choose a car:</label>";

echo    "<select name='user_type'>";
echo    "<option value='1''>Consumer</option>";
echo    "<option value='2'>Business</option>";
echo    "<option value='3'>Charity</option>";
echo    "<option value='4'>Education</option>";
echo    "</select>";

echo   "<input type='submit' value='Submit'>";
echo "</form>" ;

echo "</div>";

echo "</div>";

echo "</body>";

echo "</html>";