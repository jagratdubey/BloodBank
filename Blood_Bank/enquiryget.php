

<?php

$showAlert = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{

include 'partial/dbconnect.php';

$username = $_POST["username"];
$mobile = $_POST["mobile"];
$bloodgroup = $_POST["bloodgroup"];
$date = $_POST["date"];
$description = $_POST["description"];
$exists = false;
if($exists == false)
{
  $sql = "INSERT INTO `wantblood` (`username`, `mobile`, `bloodgroup`,`date`,`description`)
  VALUES ('$username', '$mobile', '$bloodgroup','$date','$description')";

  $result = mysqli_query($conn,$sql);

  if($result)
  {
     $showAlert = true;
  }

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

    <title>Welcome Admin</title>
  </head>
  <body>
  <?php require 'partial/_navbar.php'?>

<?php

  if($showAlert)
  {
echo'
  <div class="alert alert-success rt-dismissible fade show" role="alert">
  <strong>SUCCESS</strong> HEY!! YOUR RESPONSE HAS BEEN SUBMITTED WE WILL CONTACT WITH YOU AS SOON AS POSSIBLE.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';
  }

  ?>

  <di class="container my-3">
  <form   action = "/BLOOD_BANK/enquiryget.php"  method = "post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><i>USERNAME</i></label>
    <input type="text" class="form-control" id="username" name = "username" aria-describedby="emailHelp" placeholder="enter your name">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i>MOBILE</i></label>
    <input type="text" class="form-control" id="mobile"  name ="mobile" placeholder="enter mobile number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i>BLOOD GROUP</i></label>
    <input type="text" class="form-control" id="bloodgroup"  name ="bloodgroup" placeholder="enter blood group">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><i>DATE</i></label>
    <input type="date" class="form-control" id="date"  name ="date" placeholder="enter date">
  </div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"><i>DESCRIPTION</i></label>
  <textarea class="form-control" id = "description" name = description rows="3" placeholder="enter description"></textarea>
</div>
  <button type="submit" class="btn btn-primary" style="background-color:rgb(0,0,255);">Submit</button>
</form>



  </di>

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
