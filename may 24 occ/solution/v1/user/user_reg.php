<?php
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

echo "<form action='/action_page.php'>";
echo   "<label for='username'>Username:</label><br>";
echo   "<input type='text' id='username' name='username' value='Doe'><br><br>";
echo   "<label for='fname'>First name:</label><br>";
echo   "<input type='text' id='fname' name='fname' value='John'><br>";
echo   "<label for='lname'>Last name:</label><br>";
echo   "<input type='text' id='lname' name='lname' value='Doe'><br><br>";
echo   "<input type='submit' value='Submit'>";
echo "</form>" ;

echo "</div>";

echo "</div>";

echo "</body>";

echo "</html>";