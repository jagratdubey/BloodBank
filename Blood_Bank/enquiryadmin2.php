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
    $mobile = $_POST["mobile"];
    $bloodgroup = $_POST["bloodgroup"];
    $date = $_POST["date"];
    $description = $_POST["description"];
    $sql = "INSERT INTO `wantblood` (`username`,`mobile`,`bloodgroup`,`date`,`description`)
  VALUES('$username','$mobile','$bloodgroup','$date','$description')";

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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
</head>
<body>
<?php require 'partial/_navbar.php'?>
    <?php require 'partial/sidebar1.php'?>
    <h2 class ='text-center' style="color:blue;font-size:30px;">Patients who require blood</h2>

    <div class="container" style="margin-left:200px; margin-right:100px">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">BLOOD GROUP</th>
                    <th scope="col">MOBILE NUMBER</th>
                    <th scope="col">DATE</th>
                    <th scope="col">DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
               $sql = "SELECT * FROM `wantblood`";
               $result = mysqli_query($conn,$sql);
               $sno=0;
               while($row = mysqli_fetch_assoc($result))
               {
                   $sno=$sno+1;
                   echo "  <tr>
                    <th scope='row'>". $sno ."</th>
                    <td>". $row['username'] ."</td>
                    <td> ". $row['bloodgroup'] ."</td>
                    <td>". $row['mobile'] ."</td>
                    <td>" . $row['date']. "</td>
                    <td>". $row['description'] ."</td>
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
      <script>
</body>
</html>
