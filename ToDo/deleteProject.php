<?php
require_once 'db_connect.php';
if(isset($_GET['id'])){

	$id = $_GET['id'];
	db();
	global $link;

	$query = "DELETE FROM ToDo WHERE projectID = '$id'";
	$deleteProj = mysqli_query($link, $query);
	if($deleteProj)
	{
		echo "<h4>Project Deleted Successfully</h4>";
	}
	else{
		echo mysqli_error($link);
	}
	}
?>


<style>
*{
	text-align:center;
}
      .btn {
          background-color: black; 
          border: none;
          color: white;
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 18px;
          margin: 4px 2px;
          cursor: pointer;
          -webkit-transition-duration: 0.4s;
          transition-duration: 0.4s;
}

      .btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<br>
<br>
<a href="todohome.php" class="btn"> Return to To Do List</a>