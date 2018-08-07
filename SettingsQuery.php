<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="redTheme.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="images/sportsIcon.png"/>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Droid Serif", Cambria, "Times New Roman", serif}
</style>

<?php

session_start();
if(isset($_SESSION["uname"]) && isset($_SESSION["pass"])){

	if(isset($_POST)){

		try {

			$access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

			$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$oldPass = $_POST["oldPass"];
			$newPass = $_POST["newPass"];
			$repeatPass = $_POST["repeatPass"];

			$username = $_SESSION["uname"];


	    $getStored = "SELECT password FROM users WHERE username = $username";

	    $getStmt = $access->prepare($getStored);

	    $getStmt->execute();

			foreach($getStmt as $getPass){

				$theOldPass = $getPass["password"];
			}

	    if(preg_match("/^[a-zA-Z0-9]{4,16}$/", $newPass) && $newPass == $repeatPass && $oldPass == $theOldPass){

	      $oldPass = $access->quote($oldPass);
	  		$newPass = $access->quote($newPass);
	  		$repeatPass = $access->quote($repeatPass);

	      $storeNew = "UPDATE users SET password = $newPass WHERE username = $username";

	      $storeStmt = $access->prepare($storeNew);

	      $storeStmt->execute();

				print"<h4>Your Password has been Successfully Changed.</h4>";

	    }

	    else{

	      print "<h2 style=\"color: red;\">An error has occurred, please revise your input.</h2>";

	    }


		}

	catch(PDOException $e){
  	print "" . $sql . "<br>" . $e->getMessage() . "";
  }

		$access = null;

		}

}

else {
	header("Location: UserLogIn.php");
}
	?>
