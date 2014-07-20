<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'meta.php';?>
	<title>To Do</title>
	<style>
	body {position: relative;}
	</style>
	</head>
	<body data-spy="scroll" data-target=".navbar-example">
		<br/>
		<div class="row"><div class="col-md-5"><?php include 'nav.php';?></div><div class="col-md-7"></div></div><br/>
		<div class="row">
		<div class="col-md-1"></div><div class="col-md-5">
		<table class="table table-hover">
			<tr><th>#</th><th>Projects To Do</th><th>Due Date</th><th>Files</th><th>Upload</th></tr>
			<?php include 'getAlltoDoFiles.php' ?>
		</table>
		
		</div><div class="col-md-6"></div></div>
		<div class="row">
		<div class="col-md-1"></div><div class="col-md-5"><?php include 'footer.php';?></div><div class="col-md-6"></div></div>
		<a href="info.php">Inof</a>
	</body>
</html>
