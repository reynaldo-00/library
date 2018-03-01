<!-- 
Christopher Cedeno
http://stargate.ncc.edu/~ced0169/manga.php
-->

<?php $current = "Manga"; require_once('.htpasswd');?>
<html>
<head>
<title>Barrier's Collection</title>
<?php include('modules/head.php') ?>
</head>
<body id="body">

<?php 
include('modules/header.php'); 
include('modules/selected.php');
?>

<div id="content">

	<?php
	include('modules/addCollection.php');
	include('modules/deleteForm.php'); 
	include('modules/actionbar.php');
	include('modules/form.php');
	include('modules/loadcontent.php');
	?>
	
</div>
</body>
</html>