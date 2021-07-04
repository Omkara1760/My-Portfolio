<!DOCTYPE html>
<html>
<meta charset="utf-8">

<link rel="stylesheet" href="css\registration.css">

</head>

<body>
    <?php
    require('db.php');

    if (isset($_REQUEST['username'])) {

        $username = stripslashes($_REQUEST['username']);

        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '$password', '$email', '$trn_date')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
<h2>You are registered successfully.</h2>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    } else {
    ?>

        <video src="https://media.istockphoto.com/videos/computer-hacker-typing-code-on-his-laptop-closeup-video-id1168238695?b=1&k=6&m=1168238695&h=XXxHpt7tiLeravbSNshf3W6MI403EyK2C3QB0MxSJYQ=" autoplay="autoplay" loop="loop" muted="muted" class="bckvideo"></video>


        <div class="form">
            <div class="form-inner">
                <h1>Registration</h1>
                <form name="registration" onsubmit="return validate()" method="post">
                    <input type="text" name="username" placeholder="Username" required />
                    <input name="email" placeholder="Email" required id="email" />
                    <input type="password" name="password" placeholder="Password" required id="password" />
                    <input type="submit" name="submit" value="Register" style="width:100px;border-radius:10px" />
                </form>
                <script type="text/javascript" src="cred_validate.js"></script>

                <a href="login.php">All ready have account?</a>
            </div>
        </div>
    <?php } ?>

</body>

</html>