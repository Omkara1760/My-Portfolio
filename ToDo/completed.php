<?php


require_once 'db_connect.php'; ?>

<html>
<head>
	<title>Project ToDo List</title>
	<link rel="stylesheet" href="css\projectDetails.css">
</head>
<body>
	<h1>Project Completed</h1>
	<hr>

<?php

if(isset($_GET['id'])){

	$id = $_GET['id']; 
	

	db();
	global $link;

	
	$query1 = "SELECT projectTitle, projectDescription, startdate FROM ToDo WHERE projectID = '$id'";
	$selectProj = mysqli_query($link, $query1);

	if(mysqli_num_rows($selectProj)== 1)
	{
	
		while($row = mysqli_fetch_array($selectProj)){
			$title = $row['projectTitle'];
			$description = $row['projectDescription'];
			$startDate = $row['startdate'];
		}
	}
	else{
		echo mysqli_error($link);
	}
	
	$query2 = "UPDATE todo SET status = 1 WHERE projectID = '$id'";
	$insertToDo = mysqli_query($link, $query2);
	if($insertToDo){
		echo "<h3 class='projcard'>Project has been Completed</h3>";
	}
	else{
		echo mysqli_error($link);
	}

	
}

?>
<br>
<a href="todohome.php" class="btn">View To Do List</a>