<!DOCTYPE html>
<html>
	<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css\login.css">
</head>
<body>
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
       
	$username = stripslashes($_REQUEST['username']);
      
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($con,$query);
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
           
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>

<video src="https://media.istockphoto.com/videos/hacker-typing-on-laptop-video-id466160756?b=1&k=6&m=466160756&h=GL0VJGbtvqn3lpDquI0OPxltVn7zqfKv-H94KvqQpOU=" autoplay="autoplay" loop="loop" muted="muted" class="bckvideo"></video>


 <div class="form">
        <div class="form-inner">
                    <h1>Log In</h1>
                    <form action="" method="post" name="login">
                    <input type="text" name="username" placeholder="Username" required /><br/>
                    <input type="password" name="password" placeholder="Password" required /><br/>
                    <br>
                    <input name="submit" type="submit" value="Login" style="width:100px;border-radius:10px" />
                    </form>
                    <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
        </div>
</div> 
<?php } ?>
</body>
</html>
