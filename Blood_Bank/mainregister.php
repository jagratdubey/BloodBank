<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
header("location: admin.php");
exit;
}
?>


<?php

//INSERT INTO `donations` (`sno`, `username`, `address`, `aadhar`, `bloodgroup`, `mobileno`, `date`) VALUES (NULL, 'shubham sharma', '72B sangam nagar indore', '276327463', 'a+', '32163274', current_timestamp());
$insert = false;
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
    $username = $_POST["username"];
    $address = $_POST["address"];
    $aadhar = $_POST["aadhar"];
    $bloodgroup = $_POST["bloodgroup"];
    $mobileno = $_POST["mobileno"];

  $sql = "INSERT INTO `donations` (`username`,`address`,`aadhar`,`bloodgroup`,`mobileno`)
  VALUES('$username','$address','$aadhar','$bloodgroup','$mobileno')";

  $result = mysqli_query($conn,$sql);

  $sql = "UPDATE bloodgroup
  SET unit = unit+1
  where blood_group='$bloodgroup'";

  $result = mysqli_query($conn,$sql);


  if($result)
  {
     $insert = true;
  }
  else
  {
      echo "not inserted";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">



    <title>DONATING BLOOD</title>

</head>

<body>
<!-- EDIT MODAL -->


<!-- Edit Modal i.e, update-->


    <?php require 'partial/_navbar.php'?>
    <?php require 'partial/sidebar1.php'?>
    <?php
  if($insert){
  echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>SUCCESS!</strong> Your records have been inserted successfully , now you can donate blood.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
  }
    ?>

    <div class="container my-3"; style="margin-left:200px; margin-right:100px; margin-down=50px">
        <h2 class ="text-center" style="color:RED;font-size:30px;"><b>FILL THE FORM FOR DONATING BLOOD</b></h2>
        <form action="/BLOOD_BANK/mainregister.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i>Username</i></label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="enter your full name">

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><i>Address</i></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="enter address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><i>Aadhar</i></label>
                    <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="must be of 12 digits">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><i>Blood Group</i></label>
                    <input type="text" class="form-control" id="bloodgroup" name="bloodgroup" placeholder="enter blood group">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><i>Mobile</i></label>
                    <input type="text" class="form-control" id="mobileno" name="mobileno" placeholder="enter your mobile number">
                </div>

                <button type="submit" class="btn btn-primary" style="background-color:rgb(0,0,255);">Submit</button>
        </form>
    </div>

    <div class="container">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">AADHAR</th>
                    <th scope="col">BLOOD GROUP</th>
                    <th scope="col">MOBILE NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <?php
               $sql = "SELECT * FROM `donations`";
               $result = mysqli_query($conn,$sql);
               $sno=0;
               while($row = mysqli_fetch_assoc($result))
               {
                   $sno=$sno+1;
                   echo "  <tr>
                    <th scope='row'>". $sno ."</th>
                    <td>". $row['username'] ."</td>
                    <td>". $row['address'] ."</td>
                    <td>". $row['aadhar'] ."</td>
                    <td> ". $row['bloodgroup'] ."</td>
                    <td>". $row['mobileno'] ."</td>
                </tr>";


            }

                ?>

            </tbody>
        </table>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>$(document).ready( function () {
    $('#myTable').DataTable();
        } );
      </script>

</body>

</html>
