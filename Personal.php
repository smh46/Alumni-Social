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
  <!-- Left Column containing Links to different Account Properties-->
  <div class="w3-quarter w3-panel">
    <!-- Profile -->
    <div class="w3-content">
      <div class="w3-container">
       <a href="#" class="w3-hover-text-red" style="pointer-events: none; cursor: default;"><h3>Personal Information</h3></a>
       <a href="Settings.php" class="w3-hover-text-red"><h3>Acount Settings</h3></a>
       <a href="SecurityQuestion.php" class="w3-hover-text-red"><h3>Security Question</h3></a>
      </div>
    </div>

  <!-- End Left Column -->
  </div>

  <!-- Middle Column containing inputs to change information -->


  <div class="w3-rest w3-row">
    <div class="w3-half w3-panel w3-rightbar w3-leftbar">
    <h1 class="w3-padding">Change your Personal Information</h1>


<!--    <form class="w3-container" method="post" action="updatePersonalInfo.php">   -->

      <div class="w3-container w3-padding">
        <label>Address:</label>
        <input type="text" class="w3-input w3-border" name="Address" id="changeAdd">
      </div>

      <div class="w3-container w3-padding">
        <label>Mobile Number:</label>
        <input type="text" class="w3-input w3-border" name="Number" id="changeNum">
      </div>

      <div class="w3-container w3-padding">
        <label>Occupation:</label>
        <input type="text" class="w3-input w3-border" name="Occupation" id="changeOc">
      </div>

      <div class="w3-container w3-padding">
        <label>About you:</label>
        <input type="text" class="w3-input w3-border" name="About" id="changeAbout">
      </div>

      <div class="w3-container w3-padding">
        <button class="w3-button w3-red" id="submitPer">Save Changes</button>
      </div>

      <div class="w3-container w3-padding" id="infoInputs">
  		</div>

<!--    </form> -->

  </div>



  <!-- End Middle Column -->



  <!-- Start Right Column -->

<?php

if(isset($_POST)){

try {

  $access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

  $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $username = $_SESSION["uname"];

  $sql = "SELECT u.address, u.mobile, u.occupation, u.about FROM users u WHERE u.username = $username";

  $stmt = $access->prepare($sql);

  // execute the query
  $stmt->execute();

  foreach($stmt as $result){

    $theAdd = $result["address"];
    $themob = $result["mobile"];
    $theocc = $result["occupation"];
    $theabo = $result["about"];

  }

}
  catch(PDOException $e){
    print "" . $sql . "<br>" . $e->getMessage() . "";
  }

  $access = null;

}
 ?>


 <div class="w3-rest w3-panel">
      <h1 class="w3-padding">Current Personal Information</h1>

      <div class="w3-container w3-padding">
        <h3>Address:</h3>
        <label class="w3-padding" style="border: 5px solid gray;"><?=$theAdd?></label>
      </div>

      <div class="w3-container w3-padding">
        <h3>Mobile Number:</h3>
        <label class="w3-padding" style="border: 5px solid gray;"><?=$themob?></label>
      </div>

      <div class="w3-container w3-padding">
        <h3>Occupation:</h3>
        <label class="w3-padding" style="border: 5px solid gray;"><?=$theocc?></label>
      </div>

      <div class="w3-container w3-padding">
        <h3>About you:</h3>
        <label class="w3-padding"><?=$theabo?></label>
      </div>


    </div>

    <!-- END of the Right Column which displays user's current information -->

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
