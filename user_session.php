<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="redTheme.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/jpeg" href="images/aubicon.jpg"/>

<?php

	if(isset($_POST)){

	try {
    //Establish database connection
		$access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Get Post request paramters
		$uName = $_POST["username"];
    $pWord = $_POST["password"];

    $uName = $access->quote($uName);
    $pWord = $access->quote($pWord);

    //SQL Statement
    $sql = "SELECT username, password FROM users
								WHERE users.username = $uName AND users.password = $pWord";

    //prepare the query
		$stmt = $access->prepare($sql);

    // execute the query
    $stmt->execute();

    //If query does not return a user with that usernsame
    if($stmt->rowCount() != 1) {

      ?>
  		<div class="w3-panel w3-red">
			     <p><b>USER DOES NOT EXIST</b></p>
      </div>

    <?php

			}
      //If query returns a user with that usernsame
      //Start the user's session

      else {
				session_start();
				$_SESSION["uname"] = $uName;
				$_SESSION["pass"] = $pWord;
				header("Location: HomePage.php");
			}

	}

  //Report Sql Error if one is caught
		catch(PDOException $e){

      		?>

      		<div class="w3-panel w3-blue">
      			<p> <?= $sql ?> <br> <?= $e->getMessage() ?> </p>
      		</div>

      		<?php

    }

    //Close DB Connection
		$access = null;

}
	?>
