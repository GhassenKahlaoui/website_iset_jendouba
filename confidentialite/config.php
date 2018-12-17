<?php 

 
$dsn = 'mysql:host=localhost;dbname=resultat_orientation'; // data source name 
$user ='root'; // user to connect 
$password =''; // Password of this user 

$con = new PDO($dsn,$user,$password); // start a new connection
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>