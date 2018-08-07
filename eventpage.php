<?php

session_start();
if(isset($_SESSION["uname"]) && isset($_SESSION["pass"])){

 ?>


<!DOCTYPE html>
<html lang="en">
<head>

  <title>Home Page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="redTheme.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpeg" href="images/aubicon.jpg"/>

  <style>
  .mySlides {display:none}
  .w3-left, .w3-right, .w3-badge {cursor:pointer}
  .w3-badge {height:13px;width:13px;padding:0}
  html,body,h1,h2,h3,h4,h5 {font-family: "Droid Serif", Cambria, "Times New Roman", serif}
  </style>

</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a href="HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img alt="" src="images/AUBLogo.png" class="logoImg" _moz_resizing="true" style="width: 200px; height: 50px;"></a>
  <h1 class="w3-bar-item w3-hide-small w3-padding-large" style="font-size: 20px;">Alumni Association</h1>

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
    <div class="w3-col m2">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white" style="max-width: 200px;">

        <?php
        try {

          $access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

          $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $username = $_SESSION["uname"];

          $sql = "SELECT username, address, occupation FROM users WHERE username = $username";

          $getDet = $access->prepare($sql);

          $getDet->execute();

          foreach($getDet as $theDet){

            $add = $theDet["address"];
            $occ = $theDet["occupation"];
            $profilepic = $theDet["username"];
          }

          ?>

          <div class="w3-container">
           <h4 class="w3-center">My Profile</h4>
           <p class="w3-center"><img src="userImages/<?=$profilepic?>.jpg" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
           <hr>
           <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i><?=$occ?></p>
           <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i><?=$add?></p>
          </div>

          <?php
        }

      catch(PDOException $e){
        print "" . $sql . "<br>" . $e->getMessage() . "";
      }

        $access = null;

    ?>
      </div>
      <br>


      <!-- Display list of other users -->

      <div class="w3-card w3-round w3-white" style="max-width: 200px;" syle="overflow: scroll;">
        <ul class="w3-ul">

      <?php
      try {

        $access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

        $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $username = $_SESSION["uname"];

        $sql = "SELECT * FROM users WHERE NOT username = $username";

        $getDet = $access->prepare($sql);

        $getDet->execute();

        foreach($getDet as $theDet){

          $fname = $theDet["fname"];
          $lname = $theDet["lname"];
          $uname = $theDet["username"];


        ?>

      <li class="w3-ul li" style="font-size: 18px;">
        <form action="viewuser.php" method="post">
          <input type="hidden" name="targetUser" value="<?=$uname?>">
          <label><?=$fname?> <?=$lname?></label>
          <button class="w3-button w3-block w3-theme-l4">View</button>
          </form>
      </li>

        <?php
        }
      }

    catch(PDOException $e){
      print "" . $sql . "<br>" . $e->getMessage() . "";
    }

      $access = null;

  ?>

        </ul>
      </div>

      <br>




    <!-- End Left Column -->
    </div>

    <!-- Middle Column -->
    <div class="w3-col m7 w3-leftbar" id="middleContent">

      <?php

      		$search = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

          $eventID = $_POST["eId"];

      		$results = $search->query("SELECT *
      									             FROM events WHERE ID = $eventID");

      			foreach($results as $result){

      				$Etitle = $result["title"];
              $Edesc = $result["eDesc"];
              $det = $result["details"];
              $date = $result["eDate"];
              $loca = $result["eLoc"];

      				?>

      <div>
        <div class="w3-col m12">
          <div class="w3-padding">
              <div class="w3-rest" style="padding-left:20px; padding-bottom: 30px;">
                <h2 style="font-weight: bold;"><?=$Etitle?></h2>
                <h4 style="text-decoration: underline; font-weight: bold;">Event Description:</h4>
                <p><?=$Edesc?></p>
                <h4 style="text-decoration: underline; font-weight: bold;">Event Details:</h4>
                <p><?=$det?></p>
                <h4 style="text-decoration: underline; font-weight: bold;">Event Date and Time:</h4>
                <p><?=$date?></p>
                <h4 style="text-decoration: underline; font-weight: bold;">Event Location:</h4>
                <p><?=$loca?></p>
              </div>
          </div>
        </div>
    </div>

    <?php

    }

    $search = null;

?>

    <!-- End Middle Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-col m3" id="EventContent">
      <h2 class="w3-center">Upcoming Events:</h2>

      <?php

      		$search = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

      		$results = $search->query("SELECT *
      									             FROM events");

      			foreach($results as $result){

              $Eid = $result["ID"];
      				$Etitle = $result["title"];
              $Edesc = $result["eDesc"];

      				?>

      				<div class="w3-round w3-light-gray w3-center">
      	        <div class="w3-card-4">
                  <form method="post" action="eventpage.php">
                    <input type="hidden" name="eId" value="<?=$Eid?>">
      	            <p><strong><?=$Etitle?></strong></p>
      	            <p><?=$Edesc?></p>
      	            <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
                </form>
      	        </div>
      	      </div>
      	      <br>

      				<?php

          }

      		$search = null;

      	?>



    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
</footer>

<footer class="w3-container w3-theme-d5">

</footer>

</body>
</html>

<?php
  }

  else {

    header("Location: UserLogIn.php");

  }


 ?>
