<script>	
function confirmDelete(title, rating, image, date) {
    var u_confirm = confirm("Are you sure you want to delete "+ title + "?");
    return u_confirm;
}
</script>

<?php
	if( isset($_POST['deleteid']) ){

		$show_q = "SELECT * FROM $current WHERE id = ".$_POST['deleteid'];
		$delete_r = mysql_query($show_q) or die ("Error getting delete info ".mysql_error());
		$dinfo = mysql_fetch_array($delete_r);

			echo "<div class='deleteOptionR' >\n";
			echo "<tr>\n";
			echo "<td>\n";
			echo "<img class='deleteImage' src='".$dinfo['image']."' />\n";
			echo "</td>\n";
			echo "<div class='deleteInfo_w'>\n";
			echo "<td>";
			echo "<div class='deleteinfoText'>".$dinfo['title']."</div>\n";

			date_default_timezone_set('America/New_York');
			$date = strtotime($dinfo['date']);
			$dateview = date("M dS", $date);
			echo "<div class='deleteinfoText'>".$dateview."</div>\n";

			echo "<div class='deleteinfoText'>";
			for($s = 0; $s < $dinfo['rating']; $s++){
				echo "<img class='star' src='assets/star.png'>\n";
			}

			if($results_a['rating'] < 5){
				$nostar = 5 - $dinfo['rating'];

				for($n = 0; $n < $nostar; $n++){
					echo "<img class='star' src='assets/not-star.png'>\n";
				}
			}
			echo "</div>\n</td>\n</div>\n<td>\n</td>\n";

			echo "<td>\n";
			echo "<div class='deleteConfirm'>Was</div>\n";
			echo "<div class='deleteConfirm'>Deleted</div>\n";
			echo "</td>\n";

			echo "</tr>\n";
			echo "</div>\n";




		$delete_q = "DELETE FROM $current WHERE id = ".$_POST['deleteid'];
		$delete_r = mysql_query($delete_q) or die ("Error deleting game".mysql_error());

		if ($delete_r == false){
			echo "<div>Error deleting page</div>";
		}

	}
?>

<div class="delete_wrapper" id="deleteForm">

	<div class="closeButton"> 
		<input type="button" id="deleteCloseBtn" class="closeX" value="X" />
	</div>

	<div class="table_head">Delete <?php echo $current ?> </div>
	<div id="deleteForm_w" >
		<div id="optionWrapper">

		<?php

		$query = "SELECT * FROM ". $current;
		$results = mysql_query($query) or die ("Error Getting ".$current.mysql_error());

		for($i = 0; $i < mysql_num_rows($results); $i++){
			$results_a = mysql_fetch_array($results);

			echo "<div class='deleteOption' >\n";
			echo "<tr>\n";
			echo "<td>\n";
			echo "<img class='deleteImage' src='".$results_a['image']."' />\n";
			echo "</td>\n";
			echo "<div class='deleteInfo_w'>\n";
			echo "<td>";
			echo "<div class='deleteinfoText'>".$results_a['title']."</div>\n";

			date_default_timezone_set('America/New_York');
			$date = strtotime($results_a['date']);
			$dateview = date("M dS", $date);
			echo "<div class='deleteinfoText'>".$dateview."</div>\n";

			echo "<div class='deleteinfoText'>";
			for($s = 0; $s < $results_a['rating']; $s++){
				echo "<img class='star' src='assets/star.png'>\n";
			}

			if($results_a['rating'] < 5){
				$nostar = 5 - $results_a['rating'];

				for($n = 0; $n < $nostar; $n++){
					echo "<img class='star' src='assets/not-star.png'>\n";
				}
			}
			echo "</div>\n";
			echo "</td>\n";
			echo "</div>\n";

			echo "<td>\n";
			echo "<form name='myForm' onSubmit='return confirmDelete(\"".$results_a['title']."\", \"".$results_a['rating']."\" , \"".$results_a['image']."\", \"".$results_a['date']."\")' method='post' action='".$_SERVER['php_self']."'>\n";

			echo "<input class='deleteButton' type='Submit' value='Delete'>\n";
			echo "<input type='hidden' name='deleteid' value='".$results_a['id']."'/>\n";
			echo "</form>\n";
			echo "</td>\n";
			echo "</tr>\n";
			echo "<div class='linebreakDelete'></div>\n";
			echo "</div>\n";
		}

		?>

		</div>
	</div>
</div>

