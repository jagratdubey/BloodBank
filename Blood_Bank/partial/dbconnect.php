<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mytab";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die ("sorry we are unable to connect" . mysqli_connect_error());
}

?>
