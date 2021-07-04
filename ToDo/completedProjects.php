<?php

require_once("db_connect.php");
session_start();
if(!isset($_SESSION["username"])){
header("Location: ../login.php");
exit(); }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="\css\portfolio.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"
    ></script>

  <link rel="stylesheet" href="css\completedProjects.css">
  </head>
  <body>

    <div class="container" id="main-container">
      <h1 class="main-heading" style="margin-bottom: 40px">
        Welcome to My Website
      </h1>
      <div id="border-tabs">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a
          class="flex-sm-fill text-sm-center nav-link active"
          aria-current="page"
          href="index.php"
          >Resume</a
        >

        <a
          class="flex-sm-fill text-sm-center nav-link active"
          href="hobby.html"
          >My Hobby</a
        >
        <a
        class="flex-sm-fill text-sm-center nav-link active"
        href="benefits.html"
        >Benefits</a
      >
      <a
        class="flex-sm-fill text-sm-center nav-link active"
        href="ToDo\todohome.php"
        >To Do List</a
      >
    </nav> 


	<section>
<hr>
	<h1>Completed Projects</h1>
	<hr>	

	<?php

	db();
	global $link;

	$query = "SELECT projectID, projectTitle, projectDescription, startdate FROM ToDo where status=1";
	$selectProj = mysqli_query($link, $query);
	
	if(mysqli_num_rows($selectProj) >= 1){
		
		while($row = mysqli_fetch_array($selectProj)){
		
			$id = $row['projectID'];
			$title = $row['projectTitle'];
			$description = $row['projectDescription'];
			$startdate = $row['startdate'];
	?>

	
	<ul>
    <li>
    <a href="completedDetails.php?id=<?php echo $id?>">
    <h4><?php echo $title ?></h4></a>
		<?php echo "Start Date :$startdate"; ?>
    </li>
	</ul>
	<?php
		}
	}
	?>

	<br>
	<a href="todohome.php" class="btn">View To Do List</a>

	</section>
   
  </body>

</html>

