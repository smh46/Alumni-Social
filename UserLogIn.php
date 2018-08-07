<!DOCTYPE html>
<html>
	<head>
		<title>Log In Page</title>
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



    <div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
			   <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"><img alt="" src="images/AUBLogo.png" class="logoImg" _moz_resizing="true" style="width: 200px; height: 50px;"></a>
      <h1 class="w3-bar-item w3-hide-small w3-padding-large" style="font-size: 20px;">Alumni Association</h1>
     </div>
    </div>

  <div class="w3-content" style="max-width:1400px;margin-top:80px">

<div class="w3-row">
<div class="w3-half w3-center" style="background-color: #800000; height: 100%; border: 10px solid grey;">

  <div class="w3-container" style="height: 200px;">

  </div>

  <div class="w3-container">
    <h1 class="w3-panel w3-gray w3-border">AUB Alumni Affairs Platform</h1>
    <p>Welcome to the Alumni Affairs Platform, where AUB alumnus can view the latest news
        relating to the AUB alumni along with upcoming events.</p>
    <br>
    <p>It also helps alumni members keep in touch with one another</p>
  </div>

  <div class="w3-container" style="height: 200px;">

  </div>
</div>

  <div class="w3-half">

    <div class="w3-container w3-center" style="height: 200px;">
      <img src="images/AUBLogo.png" height=60% width=60% style="margin-top:60px;">
    </div>

    <div class="w3-panel">
      <form action="user_session.php" method="POST">

      	<div class="w3-container w3-padding">
          <label><b>Aub Username</b></label>
      		<input type="text" class="w3-input w3-border" name="username" placeholder="Username">
      	</div>

        <div class="w3-container w3-padding">
          <label><b>Password</b></label>
          <input type="password" class="w3-input w3-border" name="password" placeholder="Password">
        </div>

        <div class="w3-container w3-padding">
          <button type="submit" class="w3-button w3-red">Login</button>
        </div>
      </form>

      <div class="w3-container w3-padding">
        <a href="forgotpass.php">Forgot Password?</a>
      </div>

    </div>

    <div class="w3-container" style="height: 200px;">

    </div>

  </div>

</div>

</div>

<br>

    <footer class="w3-container w3-theme-d3 w3-padding-16">

    </footer>

    </body>

  </html>
