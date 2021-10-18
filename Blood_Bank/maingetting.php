<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
header("location: admin.php");
exit;
}
?>


<?php

//INSERT INTO `donations` (`sno`, `username`, `address`, `aadhar`, `bloodgroup`, `mobileno`, `date`) VALUES (NULL, 'shubham sharma', '72B sangam nagar indore', '276327463', 'a+', '32163274', current_timestamp());
$showError = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "mytab";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{

    die ("sorry we are unable to connect" . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $referenceid = $_POST["referenceid"];
    $mobile = $_POST["mobile"];
    $bloodgroup = $_POST["bloodgroup"];
    $description = $_POST["description"];




$sql="SELECT * from `bloodgroup`
where `blood_group` = '$bloodgroup' AND `unit` > 0";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);



  if($num == 1)
  {
    $sql = "UPDATE bloodgroup
    SET unit = unit-1
    where blood_group='$bloodgroup'";

    $result = mysqli_query($conn,$sql);


    $sql=" INSERT INTO `issued` (`reference_id`,`mobile`,`bloodgroup`,`description`)
    VALUES('$referenceid','$mobile','$bloodgroup','$description') ";


    $result = mysqli_query($conn,$sql);
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['referenceid'] = $referenceid;

    header("location: bill.php");

}
  else{
    $showError = "BLOOD GROUP NOT AVAILABLE";
  }


}




?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>get blood</title>
  </head>
  <body>
  <?php require 'partial/_navbar.php'?>
    <?php require 'partial/sidebar1.php'?>
    <?php
  if($showError){
  echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>NOT AVAILABLE!</strong> Sorry blood group is not available.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
  }
    ?>
    <h1 class="text-center" style="color:blue">FILL THIS FORM FOR ISSUEING BLOOD</h1>
  <div class="container my-4">

  <form action = "/BLOOD_BANK/maingetting.php"  method = "post">

  <div class="mb-3"  style="margin-left:100px; margin-right:100px; margin-down :50px">
    <label for="referenceid" class="form-label">REFERENCE ID</label>
    <input type="referenceid" class="form-control" id="referenceid" name = "referenceid" aria-describedby="emailHelp" placeholder="enter reference id">

  <div class="mb-3">
    <label for="mobile" class="form-label">MOBILE</label>
    <input type="mobile" class="form-control" id="mobile" placeholder="must be of 10 digits" name ="mobile">
  </div>

  <div class="mb-3">
    <label for="bloodgroup" class="form-label">BLOOD GROUP</label>
    <input type="bloodgroup" class="form-control" id="bloodgroup" placeholder="enter blood group"  name ="bloodgroup">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">DESCRIPTION</label>
    <input type="description" class="form-control" id="description" placeholder="give description"  name ="description">
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:rgb(0,0,255);">Submit</button>
</form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
