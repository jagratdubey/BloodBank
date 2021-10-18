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

$sql = " CREATE TABLE `admin_security` ( `S_no` INT NOT NULL AUTO_INCREMENT ,  `email` VARCHAR(20) NOT NULL ,
         `password` VARCHAR(15) NOT NULL ,
             PRIMARY KEY  (`S_no`))  ";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo " the table was created successfully!";
}
else{
    echo "the table was not created because of this error--->" . mysqli_error($conn);
}

$sql = " INSERT INTO `admin_security` (`email` ,`password`)
        VALUES('abcd@gmail.com' , 'Nahi'),
            ('1234@gmail.com' , 'Okay')
";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo " the table was created successfully!";
}
else{
    echo "the table was not created because of this error--->" . mysqli_error($conn);
}
?>

