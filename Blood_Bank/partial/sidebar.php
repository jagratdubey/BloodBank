<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  
  <a href="/BLOOD_BANK/aboutus.php"> <button class="w3-bar-item w3-button" type="button">ABOUT US</button></a>
  <a href="/BLOOD_BANK/contactus.php"> <button class="w3-bar-item w3-button" type="button">CONTACT US</button></a>
</div>
<!-- Page Content -->
<div class="w3-teal">

  <button class="w3-button w3-teal w3-xlarge"  onclick="w3_open()">☰</button>
  <div class="w3-container">
  <?php require 'partial/_navbar.php' ?>
  </div>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
     
</body>
</html> 