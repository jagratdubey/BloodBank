
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Enquiry</title>
  </head>
  <body>
    <?php require'partial/_navbar.php' ?>
 

    <div class="container my-4 ">
   <h1 class ='text-center' style="background-color:rgb(255, 70, 71);"><i>ENQUIRY PAGE</i></h1>
    <h1></br></h1>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
     

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="arr.jpg" width = "300" height = "450" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="image8.jpg" width = "300" height = "450" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="image9.png" width = "300" height = "450" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="d-grid gap-2">
<a href = '/BLOOD_BANK/enquirydonate.php'>
  <button class="btn btn-primary" type="button" style="background-color:orange;">CLICK HERE FOR DONATING BLOOD</button>
</a>
<a href = '/BLOOD_BANK/enquiryget.php'>
  <button class="btn btn-primary" type="button" style="background-color:slateblue;">CLICK HERE TO ISSUE BLOOD</button>
  </a>
</div>
  <div class="container my-3">
  
  <form class="row g-3" action="/BLOOD_BANK/enquiry.php" method="post" >
  
  
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


<div class="container">
<h1 class='text-center' style="background-color:DodgerBlue;  ">DONATE BLOOD SAVE LIFE</h1>

<h6>YOU CAN FILL ABOVE FORM IN ORDER TO DONATE BLOOD OR GETTING BLOOD FROM OUR BLOOD BANK. WE WILL CONTACT WITH YOU IF THERE WILL BE AVAILABILITY OF BLOOD OR WE WILL INFORM YOU IF WE DON'T HAVE BLOOD</h6>
<h1 class ='text-center' style="color:green;font-size:30px;">THANK YOU!!</h1>
</div>