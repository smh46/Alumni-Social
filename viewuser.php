<?php

session_start();
if(isset($_SESSION["uname"]) && isset($_SESSION["pass"])){

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Personal Information</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="redTheme.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpeg" href="images/aubicon.jpg"/>

  <style>
  html,body,h1,h2,h3,h4,h5 {font-family: "Droid Serif", Cambria, "Times New Roman", serif}
  </style>

</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a href="HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img alt="" src="images/AUBLogo.png" class="logoImg" _moz_resizing="true" style="width: 200px; height: 50px;"></a>
  <h1 class="w3-bar-item w3-hide-small w3-padding-large w3-center" style="font-size: 20px;">Alumni Association</h1>

  <div class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="background-color: white;">
    <div class="w3-dropdown-hover w3-right">
      <img src="images/cog.png" style="height:50px;width:50px;" alt="Avatar">
      <div class="w3-dropdown-content w3-bar-block w3-border" style="right:0">
        <a href="Personal.php" class="w3-bar-item w3-button">Personal Information</a>
        <a href="Settings.php" class="w3-bar-item w3-button">Account Settings</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-red">Logout</a>
      </div>
    </div>
  </div>

 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

<!-- The Grid -->
<div class="w3-row">

    <div class="w3-col m2 w3-panel">
      <img src="userImages/<?=$_POST["targetUser"]?>.jpg" style="height:200px;width:200px; border: solid 4px white;" alt="Avatar">
    </div>

  <div class="w3-rest w3-panel">
    <div class="w3-padding">

          <?php
          try {

            $access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

            $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $targetU = $_POST["targetUser"];

            $targetU = $access->quote($targetU);

            $sql = "SELECT * FROM users WHERE username = $targetU";

            $getDet = $access->prepare($sql);

            $getDet->execute();

            foreach($getDet as $theDet){

              $fname = $theDet["fname"];
              $lname = $theDet["lname"];
              $email = $theDet["email"];
              $degree = $theDet["degree"];
              $occupation = $theDet["occupation"];
              $address = $theDet["address"];
              $mobile = $theDet["mobile"];
              $about = $theDet["about"];
            }

            ?>

            <h2 style="font-weight: bold;"><?=$fname?> <?=$lname?></h2>
            <h4 style="text-decoration: underline;">Email:</h4>
            <p><?=$email?></p>
            <h4 style="text-decoration: underline;">Degree</h4>
            <p><?=$degree?></p>
            <h4 style="text-decoration: underline; font-weight: bold;">Occupation</h4>
            <p><?=$occupation?></p>
            <h4 style="text-decoration: underline; font-weight: bold;">About</h4>
            <p><?=$about?></p>
            <h4 style="text-decoration: underline; font-weight: bold;">Mobile Number</h4>
            <p><?=$mobile?></p>
            <h4 style="text-decoration: underline; font-weight: bold;">Address</h4>
            <p><?=$address?></p>

            <?php
          }

        catch(PDOException $e){
          print "" . $sql . "<br>" . $e->getMessage() . "";
        }

          $access = null;

      ?>

      </div>
    </div>
</div>

</div>

<br>

<!-- footer found on every page -->

<footer class="w3-container w3-theme-d3 w3-padding-16">
</footer>

<footer class="w3-container w3-theme-d5">

</footer>

</body>
<script type="text/javascript" src="updatePersonal.js"></script>
</html>

<?php
  }

  else {

    header("Location: UserLogIn.php");

  }


 ?>
