<?php
	function db(){
		global $link;
		$link = mysqli_connect("localhost","omkarvarhadi","omkar@123","db_1")or die("couldn't connect to database");
		return $link;
	}
?>