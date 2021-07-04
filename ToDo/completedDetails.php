<?php

require_once "db_connect.php";
if (isset($_GET['id'])) {

	$id = $_GET['id'];
	db();
	global $link;
	$query = "SELECT projectTitle, projectDescription, startdate, status FROM todo WHERE projectID = '$id'";
	$selectProj = mysqli_query($link, $query);

	if (mysqli_num_rows($selectProj) == 1) {

		$row = mysqli_fetch_array($selectProj);

		if ($row) {
			$title = $row['projectTitle'];
			$description = $row['projectDescription'];
			$startdate = $row['startdate'];
			$status = $row['status'];
		}
	} else {
		echo 'No Project Details';
	}
}
?>
<html>

<head>
	<title>Completed Project Details</title>
	<link rel="stylesheet" href="css\completedDetails.css">

</head>

<body>
	<h1>Completed Project Details</h1>
	<div class="projcard">
		<h3><?php echo $title ?></h3>
		<b>Description:</b><?php echo $description ?><br>
		<?php echo "<b>Start Date: </b> $startdate" ?><br>
		<?php echo "<b>Status: </b> $status" ?>
	</div>
	<a href="todohome.php" class="btn">View To Do List</a>
</body>

</html>