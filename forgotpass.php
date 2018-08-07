<!DOCTYPE html>
<html>
	<head>
		<title>Retrieve Password</title>
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


	<body>

		<div class="w3-top">
     <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <h1 class="w3-bar-item w3-hide-small w3-padding-large" style="font-size: 20px;">Alumni Association</h1>
     </div>
    </div>

    <div class="w3-content" style="max-width:1400px;margin-top:80px">

			<div class="w3-row">
				<div class="w3-half">

      <div class="w3-container">
        <img src="images/AUBLogo.png" height=120px width=400px style="margin-top:30px; margin-left: 30px;">
      </div>

      <div class="w3-panel">
        <form action="security.php" method="post">

        	<div class="w3-container w3-padding">
            <label><b>Enter your username here to receive your Security Question</b></label>
        		<input type="text" class="w3-input w3-border" name="username" placeholder="Username" style="width: 70%;">
        	</div>

          <div class="w3-container w3-padding">
            <button type="submit" class="w3-button w3-red">Submit</button>
          </div>
        </form>

        <form action="UserLogIn.php">
          <div class="w3-container w3-padding">
            <button type="submit" class="w3-button w3-red">Back to Log In Page</button>
          </div>
        </form>

      </div>

      <div class="w3-container" style="height: 200px;">

      </div>
		</div>

	</div>
</div>

	</body>

</html>
