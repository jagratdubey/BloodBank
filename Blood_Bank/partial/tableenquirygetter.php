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

$sql = "CREATE TABLE `wantblood` (
    `sno` int(11) AUTO_INCREMENT NOT NULL,
    `username` varchar(22) NOT NULL,
    `mobile` varchar(10) NOT NULL,
    `bloodgroup` varchar(5) NOT NULL,
    `date` datetime NOT NULL DEFAULT current_timestamp(),
    `description` text NOT NULL
  ) ";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo " the table was created successfully!";
}
else{
    echo "the table was not created because of this error--->" . mysqli_error($conn);
}



?>

