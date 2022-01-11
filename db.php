<?php
   define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DATABASE', 'islamic');

// Create connection MySQLi Object-oriented
$conn = new mysqli(SERVER,USERNAME,PASSWORD,DATABASE);
// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//  }
//  else{
//     echo "successfully database connected!";
//  }
 ?>