<?php

		$search = new PDO("mysql:dbname=aub_alumni;host=localhost", "root", "root");

		$results = $search->query("SELECT *
									             FROM news");

			foreach($results as $result){

				$Nid = $result["ID"];
				$Ntitle = $result["title"];
        $Nsubtitle = $result["subtitle"];
				$red = $result["link"];

        print "<div>";
          print "<div class=\"w3-col m12\">";
            print "<div class=\"w3-padding\">";
                  print "<div class=\"w3-quarter\">";
                    print "<a href=\"$red\"><img src=newsImages/image$Nid.jpg style=\"border-color:gray; border-width:2px; border-style:solid;\" max-width=\"100%\" max-height=\"100%\" width=\"190px\" height=\"170px\"></a>";
                  print "</div>";
                print "<div class=\"w3-rest\" style=\"padding-left:20px; padding-bottom: 30px;\">";
                  print "<a href=\"$red\"><h2>$Ntitle</h2></a>";
                  print "<p>$Nsubtitle</p>";
                print "</div>";
              print "</div>";
          print "</div>";
      print  "</div>";

    }

		$search = null;

	?>
