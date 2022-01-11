<?php
   define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DATABASE', 'islamic');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
//    if(!$conn){
//     die("error to connect.please check the db connection info ". mysqli_connect_error());
    
// }
// else{
//     echo "successfully database connected!";
// }