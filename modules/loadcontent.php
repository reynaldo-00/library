<div class='collection_w'>
<?php
	$query = "SELECT * FROM ".$current." ORDER BY `title`";
	$results = mysql_query($query) 
		or die ("Error getting ".$current.mysql_error());

	for ($i = 0; $i < mysql_num_rows($results); $i++){
		$array = mysql_fetch_array($results);


		echo "<div class='thumbnail'>\n";
		echo "<div class='image'>\n";
		echo "<img class='covers' src='".$array['image']."' >\n";
		echo "<div class='i-title'>".$array['title']."</div>\n";

		echo "<div class='i-rating'>\n";
		for($s = 0; $s < $array['rating']; $s++){
			echo "<img class='star' src='assets/star.png'>\n";
		}

		if($array['rating'] < 5){
			$nostar = 5 - $array['rating'];

			for($n = 0; $n < $nostar; $n++){
				echo "<img class='star' src='assets/not-star.png'>\n";
			}
		}

		date_default_timezone_set('America/New_York');
		$date = strtotime($array['date']);
		$dateview = date("M dS", $date);

		echo "<div class='i-dates'>Date Added ".$dateview."</div>\n";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		
	}
?>
</div>