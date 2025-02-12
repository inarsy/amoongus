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

echo "<h3 id='banner'>RZL Admin</h3>";

echo "</div>";

echo "<div id='content'>";

echo "<h4> Add New room type </h4>";

echo "<br>";

//form to set up room type
echo "<form method='post' action='reg_room_type.php'>";

    echo   "<label for='room_type'>Room Type:</label><br>";
    echo   "<input type='text' name='room_type'><br><br>";

    echo   "<label for='occupancy'>Occupants:</label><br>";
    echo   "<input type='text' name='occupancy'><br><br>";

    echo   "<label for='num_rooms'>Number of rooms:</label><br>";
    echo   "<input type='text' name='num_rooms'><br><br>";

    echo   "<label for='price'>Price:</label><br>";
    echo   "<input type='text' name='price'><br><br>";

echo   "<input type='submit' value='Submit'>";

echo "</form>" ;


echo "</div>";

echo "</div>";

echo "</body>";

echo "</html>";