 <?php

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{

include 'partial/dbconnect.php';

$email = $_POST["email"];
$password = $_POST["password"];

  $sql = "select * from admin_security where email = '$email' AND password = '$password'";

  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  if($num == 1)
  {
    $login = true;
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['email'] = $email;
  header("location: normal.php");
  }
  else{
    $showError = "INVALID CREDENTIALS";
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

    <title>Admin</title>
  </head>
  <body>
  <?php require 'partial/_navbar.php'?>
  <?php


  if($showError)
  {
echo'
  <div class="alert alert-danger rt-dismissible fade show" role="alert">
  <strong>ERROR</strong > '.$showError.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
  }
?>


<div class="container my-4 ">
   <h1 class ='text-center' style="color:blue;font-size:30px;">THIS PAGE IS ONLY FOR ADMIN</h1>
    <h1></br></h1>
<form  action = "/BLOOD_BANK/admin.php"  method = "post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp" placeholder="Enter email here">

  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name ="password" placeholder ="Enter password">
  </div>
  <button type="submit" class="btn btn-primary">LOGIN</button>
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
