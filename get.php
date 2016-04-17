<?php

// Navid Mirzaaghazadeh
// inavid.ir@gmail.com
// https://github.com/mirzaaghazadeh

$servername = 'localhost';
$username = 'root';  // DB USER
$password = 'mysql'; //  DB PASS
$dbname = 'ajax'; // DB Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die('Connection failed: '.$conn->connect_error);
}

$sql = 'SELECT * FROM sales';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

      // Create here like what do you want :)
      echo '<p>'.$row['id'].'</p>';
        echo '<p>'.$row['name'].'</p>';
      // Create here like what do you want :)
    }
} else {
    echo '0 results';
}
$conn->close();
