<?php

session_start();
if(isset($_SESSION["uname"]) && isset($_SESSION["pass"])){

 ?>

<!DOCTYPE html>
<html lang="en">
<title>Account Settings</title>
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
  <!-- Left Column -->
  <div class="w3-quarter w3-panel">
    <!-- Different Information user can change listed on left bar -->
    <div class="w3-content">
      <div class="w3-container">
       <a href="Personal.php" class="w3-hover-text-red"><h3>Personal Information</h3></a>
       <a href="#" class="w3-hover-text-red" style="pointer-events: none; cursor: default;"><h3>Acount Settings</h3></a>
       <a href="SecurityQuestion.php" class="w3-hover-text-red"><h3>Security Question</h3></a>

      </div>
    </div>

  <!-- End Left Column -->
  </div>

  <!-- Middle Column containing the Input bars-->
  <div class="w3-rest w3-row">
    <div class="w3-half w3-panel w3-rightbar w3-leftbar">
      <h1 class="w3-padding">Change your Security Settings</h1>


<!--      <form class="w3-container" method="post">  -->

        <div class="w3-container w3-padding">
          <label>Old Password:</label>
          <input type="password" class="w3-input w3-border" name="old" required id="oldPass">
        </div>

        <div class="w3-container w3-padding">
          <label>New Password:</label>
          <input type="password" class="w3-input w3-border" name="new" required id="newPass">
        </div>

        <div class="w3-container w3-padding">
          <label>Repeat New Password:</label>
          <input type="password" class="w3-input w3-border" name="repeat" required id="confirmPass">
        </div>

        <div class="w3-container w3-padding">
          <button class="w3-button w3-red" id="submitPass">Change Password</button>
        </div>

        <div class="w3-container w3-padding" id="changeResults">
    		</div>

<!--      </form>   -->


        <!-- End Middle Column -->

    </div>

      <!-- Start Left Column Which contains password rules -->

    <div class="w3-half w3-panel">
      <h1 class="w3-head">Password Requirements:</h1>
      <ul class="w3-ul">
        <li class="w3-ul li" style="font-size: 18px;">Password must have a minimum length of 4 characters</li>
        <li class="w3-ul li" style="font-size: 18px;">Password must have a maximum length of 16 characters</li>
        <li class="w3-ul li" style="font-size: 18px;">Password must be a combination of letters and numbers</li>
        <li class="w3-ul li" style="font-size: 18px;">Password cannot contain any special characters</li>

      </ul>

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
<script type="text/javascript" src="SettingsQuery.js"></script>
</html>

<?php
  }
  else {

    header("Location: UserLogIn.php");

  }
 ?>
