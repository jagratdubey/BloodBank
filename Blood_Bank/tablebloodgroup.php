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

$sql = "CREATE TABLE `bloodgroup` (
    `sno` int(11) NOT NULL AUTO_INCREMENT,
    `blood_group` varchar(5) NOT NULL,
    `unit` int(8) NOT NULL
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

