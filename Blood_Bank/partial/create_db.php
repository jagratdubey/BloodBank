<?php

//connecting to database
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{

    die ("sorry we are unable to connect" . mysqli_connect_error());
}
else
{
    echo "connection was successful";
    echo "<br>";
}



$sql = "CREATE DATABASE mytab";

$result = mysqli_query($conn , $sql);

if($result)
{
    echo " the connection was successful!";
}
else{
    echo "the database was not created because of this error--->" . mysqli_error($conn);
}


?>