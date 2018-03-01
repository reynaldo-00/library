<div class="form_wrapper" id="addForm">
	<div class="table_head">Add New <?php echo $current ?> </div>

	<form name="myForm" class="form_w" onsubmit="return validateForm()" method="post" action="<?php $_SERVER['php_self']; ?>">
		<div class="formtext">Title</div>
		<input class"form_input" type="text" name="title" id="titletext" autocomplete="off" />

		<div class="formtext">Cover</div>
		<input class"form_input" type="text" name="cover" id="cover" autocomplete="off"/>
		
		<div class="formtext">Rating 1-5</div>
		<input class"form_input" type="text" name="rating" id="rating" autocomplete="off"/>

		 <script>
			$(function() {
				$( "#datepicker" ).datepicker();
			});
		 </script>
		<div class="formtext">Date</div>
		<input class"form_input" id="datepicker" class="datepicker" type="text" name="date" autocomplete="off" readonly />
		<br />

		<input type="submit" id="submitBtn" class="button" value="Submit" />
		<input type="button" id="cancelBtn" class="button" value="Cancel" />
	</form>
		
	<div class="preview">
			<div class="choice_w">
				<input type="text" class="choice_t" id="previewTitle" value="Default" readonly />
				<img class="pcovers" id="previewCover" src="assets/preview.png">
				<div id="ratingPreview">
					<img class="star" id="rating0" src="assets/not-star.png" >
					<img class="star" id="rating1" src="assets/not-star.png" >
					<img class="star" id="rating2" src="assets/not-star.png" >
					<img class="star" id="rating3" src="assets/not-star.png" >
					<img class="star" id="rating4" src="assets/not-star.png" >
				</div>
				<input type="text" id="previewDate" class="previewD" value="Date Added: Month Day" readonly />
			</div>
	</div>
</div>