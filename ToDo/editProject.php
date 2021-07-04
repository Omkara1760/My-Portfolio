<?php
require_once 'db_connect.php';
if (isset($_GET['id'])) {

    $id = $_GET['id'];


    db();
    global $link;


    $query1 = "SELECT projectTitle, projectDescription FROM ToDo WHERE projectID = '$id'";
    $selectProj = mysqli_query($link, $query1);
    $row = mysqli_fetch_array($selectProj);
    if ($row) {

        $title1 = $row['projectTitle'];
        $description1 = $row['projectDescription'];

        echo " 
        <h1>Edit Project</h1>
        <hr>
        <form action='editProject.php?id=$id' method='post'>
        <label>Title: </label>
        <input type='text' name='title' value='$title1'>
        <br>
        <label>Description: </label>
        <input type='text' name='description' value='$description1'>
        <br><br>
        <input type='submit' name='submit' value='Submit Edits' class='btn'>
        </form>
    ";
    } else {
        echo mysqli_error($link);
    }



    if (isset($_POST['submit'])) {


        $title = $_POST['title'];
        $description = $_POST['description'];


        $query2 = "UPDATE ToDo SET projectTitle = '$title', projectDescription = '$description' WHERE projectID = '$id'";
        $editProj = mysqli_query($link, $query2);
        if ($editProj) {
            echo "Project has been updated";
        } else {
            echo mysqli_error($link);
        }


        header("Refresh:0; url=todohome.php");
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Edit ToDo</title>
    <link rel="stylesheet" href="css\editProject.css">
</head>

<body>
    <br>
    <a href="completed.php?id=<?php echo $id ?>" class="btn">Complete Project</a>
    <a href="deleteProject.php?id=<?php echo $id ?>" class="btn">Delete Project</a>
    <a href="todohome.php" class="btn">View To Do List</a>
</body>

</html>