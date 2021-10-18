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
else
{
    echo "connection was successful";
    echo "<br>";
}

$sql = "CREATE TABLE `donations` (
    `sno` int(11) AUTO_INCREMENT NOT NULL,
    `username` varchar(21) NOT NULL,
    `address` varchar(41) NOT NULL,
    `aadhar` varchar(12) NOT NULL,
    `bloodgroup` varchar(5) NOT NULL,
    `mobileno` varchar(10) NOT NULL ,
    `date` datetime NOT NULL DEFAULT current_timestamp()
  )" ;

$result = mysqli_query($conn,$sql);

if($result)
{
    echo " the table was created successfully!";
}
else{
    echo "the table was not created because of this error--->" . mysqli_error($conn);
}



?>

