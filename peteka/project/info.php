	<?php 
	$fileId = $_POST['unique'];
	echo "<!DOCTYPE html><html lang=\"en\"><head>";
	include 'meta.php';
	echo "<title>To Do</title>
	<style>
	body {position: relative;}
	</style>
	</head>
	<body data-spy=\"scroll\" data-target=\".navbar-example\">
		<br/>
		<div class=\"row\"><div class=\"col-md-5\">";
	include 'nav.php';
		echo "</div><div class=\"col-md-7\"></div></div><br/>
		<div class=\"row\">
		<div class=\"col-md-1\">
			<script>
				document.write('<p><a href=\"' + document.referrer + '\"><button type=\"button\" class=\"btn btn-primary\">Back</button></a></p>');
			</script></div>
		<div class=\"col-md-5\">
		<table class=\"table table-hover\">
			<tr><th>Filename</th><th>Instructions</th><th>Due date</th><th>Responible Employee</th><th>Requester Employee</th><th>Situation</th><th>Approved?</th><th>Download</th></tr>";


			$con=mysqli_connect("localhost", "ewhite05_ewhite", "1234", "ewhite05_ewhitedb");

			// Check connection

			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL: " . mysqli_connect_error();

			}
			
			echo "<p>hryryr".$fileID."</p>";
			$result = mysqli_query($con,"SELECT * FROM peteka WHERE filename= '".$fileID."'");

			while($col = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>" . $col['filename'] . "</td>";
				echo "<td>" . $col['instructions'] . "</td>";
				echo "<td>" . $col['dueDate'] . "</td>";
				echo "<td>" . $col['responsible'] . "</td>";
				echo "<td>" . $col['requester'] . "</td>";
				echo "<td>" . $col['situation'] . "</td>";
				echo "<td>" . $col['approved'] . "</td>";
				echo "<td>" . $col['download'] . "</td>";
				echo "</tr>";
			}

		mysqli_close($con);

		echo "</table>
		
		</div><div class=\"col-md-6\"></div></div>
		<div class=\"row\">
		<div class=\"col-md-1\"></div><div class=\"col-md-5\">";
		include 'footer.php';
		echo "</div><div class=\"col-md-6\"></div></div>
	</body>
</html>";
?>

