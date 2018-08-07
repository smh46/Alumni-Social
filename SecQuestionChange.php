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

		$question = $_POST["Question"];
		$answer= $_POST["Answer"];

		$username = $_SESSION["uname"];

		$question = $access->quote($question);
		$answer = $access->quote($answer);

		$sql = "UPDATE users SET Security_Question = $question, Answer = $answer WHERE username = $username";

		$stmt = $access->prepare($sql);

    // execute the query
    $stmt->execute();

		print"<p>Your Security Question and Answer have been Saved.</p>";

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
