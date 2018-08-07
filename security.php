<!DOCTYPE html>
<html>
	<head>
		<title>Security Question</title>
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

    <?php

      //Establish database connection
  		$access = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

  		$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      ?>

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

        <?php

        if(isset($_POST)){

      	try {

          //Get Post request paramters
      		$uName = $_POST["username"];

          $uName = $access->quote($uName);

          //SQL Statement
          $sql = "SELECT Security_Question FROM users
      								WHERE users.username = $uName";

          //prepare the query
      		$stmt = $access->prepare($sql);

          // execute the query
          $stmt->execute();

          //If query does not return a user with that usernsame
          if($stmt->rowCount() != 1) {

            ?>
        		<div class="w3-panel w3-blue">
      			     <h3><b>USER DOES NOT HAVE A SECURITY QUESTION</b></h3>
            </div>

          <?php

      			}
            //If query returns a user with that usernsame
            //Start the user's session

            else {

              foreach($stmt as $question){
              $secQuestion = $question["Security_Question"];

              ?>

              <form action="changePass.php" method="post">

              	<div class="w3-container w3-padding">
                  <label><b><?= $secQuestion ?></b></label>
              	</div>

                <div class="w3-container w3-padding">
                  <input type="text" class="w3-input w3-border" name="answer" placeholder="Answer" style="width: 70%;">
                  <input type="hidden" name="username" value="<?= $_POST["username"] ?>" >
                  <input type="hidden" name="secQuestion" value="<?=$secQuestion?>" >
                </div>

                <div class="w3-container w3-padding">
                  <button type="submit" class="w3-button w3-red">Submit</button>
                </div>
              </form>

              <form action="UserLogIn.php">
                <div class="w3-container w3-padding">
                  <button type="submit" class="w3-button w3-red">Back</button>
                </div>
              </form>

              <?php

            }
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

      </div>

      <div class="w3-container" style="height: 200px;">

      </div>
		</div>

	</div>
</div>

	</body>

</html>
