
<div id="succesfulSubmit">
</div>
<div id="actionBar">
	<ul>
		<li>
			<ul class="action">
				<li class="mainAction" ><div id="actionTitle" style="cursor: default;" class="actionText">Sort</div>
					<thead> 
					    <ul>
					      <li class="actionText">Title</li>
					      <li class="actionText">Rating</li>
					      <li class="actionText">Date</li>
					    </ul>
					</thead> 
				</li>
			</ul>
		</li>
	<li>
		<div id="title">
			<h1><?php echo $current; ?> Collection of <?php echo mysql_num_rows($results); ?></h1>
		</div>
	</li>

	<li>
		<ul class="action" >
			<li class="mainAction"> <div id="actionTitle" style="cursor: default;"class="actionText">Edit</div>
			    <ul>
			      <li class="actionText" id="addButton" href="javascript:void(0);">Add</li>
			      <li class="actionText" id="deleteButton" href="javascript:void(0);">Delete</li>
			    </ul>
			</li>
		</ul>
	</li>
	</ul>
</div>