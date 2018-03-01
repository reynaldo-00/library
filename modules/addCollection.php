<?php
$query = "SELECT * FROM ".$current." ORDER BY `title`";
	$results = mysql_query($query) 
		or die ("Error getting ".$current.mysql_error());
		
if (isset($_POST['title'])) {

	$check_q = "SELECT * FROM ".$current." WHERE `title` = '". $_POST['title']."'";
	$check_r = mysql_query($check_q);
	$checkrows = mysql_num_rows($check_r);

	if ($checkrows){
		echo "<div>Choice has already been added please add a diffrent ".$current."</div>\n";

	}else{
		$addQuery = 
		"INSERT INTO ".$current.
		" VALUES(NULL, '"
			. $_POST['title']."', "
			. $_POST['rating'].", '"
			. $_POST['cover']."', '"
			. $_POST['date']."');";
		
		mysql_query($addQuery);

		echo "<div>".$current." Succesfully Added </div>\n";

		echo "<div class='deleteOptionR' >\n";
			echo "<tr>\n";
			echo "<td>\n";
			echo "<img class='deleteImage' src='".$_POST['cover']."' />\n";
			echo "</td>\n";
			echo "<div class='deleteInfo_w'>\n";
			echo "<td>";
			echo "<div class='deleteinfoText'>".$_POST['title']."</div>\n";

			date_default_timezone_set('America/New_York');
			$date = strtotime($dinfo['date']);
			$dateview = date("M dS", $date);
			echo "<div class='deleteinfoText'>".$dateview."</div>\n";

			echo "<div class='deleteinfoText'>";
			for($s = 0; $s < $_POST['rating']; $s++){
				echo "<img class='star' src='assets/star.png'>\n";
			}

			if($_POST['rating'] < 5){
				$nostar = 5 - $_POST['rating'];

				for($n = 0; $n < $nostar; $n++){
					echo "<img class='star' src='assets/not-star.png'>\n";
				}
			}
			echo "</div>\n</td>\n</div>\n<td>\n</td>\n";

			echo "<td>\n";
			echo "<div class='deleteConfirm' style='color: green;'>Was</div>\n";
			echo "<div class='deleteConfirm' style='color: green;'>Added</div>\n";
			echo "</td>\n";

			echo "</tr>\n";
			echo "</div>\n";
	}
}
?>