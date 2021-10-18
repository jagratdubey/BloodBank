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

$sql = " CREATE TABLE `wanttodonate` ( `S_no` INT NOT NULL AUTO_INCREMENT ,  `username` VARCHAR(20) NOT NULL ,
         `address` VARCHAR(15) NOT NULL , `bloodgroup` varchar(5) NOT NULL , `mobile` VARCHAR (10) NOT NULL, `date` DATE,
             PRIMARY KEY  (`S_no`))  ";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo " the table was created successfully!";
}
else{
    echo "the table was not created because of this error--->" . mysqli_error($conn);
}



?>

