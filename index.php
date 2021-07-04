<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css\portfolio.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js\jquery.js"> </script>
</head>

<body>

    <div class=".container" id="main-container">
        <h1 class="main-heading" style="margin-bottom: 40px">
            Welcome to My Website
        </h1>
        <div id="border-tabs">
            <nav class="nav nav-pills flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link active" aria-current="page" href="index.php">Resume</a>

                <a class="flex-sm-fill text-sm-center nav-link active" href="hobby.html">My Hobby</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="benefits.html">Benefits</a>
                <a class="flex-sm-fill text-sm-center nav-link active" href="ToDo\todohome.php">To Do List</a>
            </nav>
            <section>
                <div style="background-image: url(laptop.jpg)" class="section">
                    <h1 class="heading">Introduction</h1>
                    <img class="prof-img" src="img.jpg" alt="not availble">

                    <div class="prof-img-body">
                        <h2>Omkar Varhadi</h2>
                        <p>
                            I am a computer engineer and I enjoy implementing ideas into inovative projects using new
                            technology. This curiosity has enabled me to gain proficiency in JAVA and MYSQL, Data
                            Structures And Algorithms. I enjoy working with team of dedicated people.
                        </p>
                    </div>
                    <div class="clearifix"></div>
                </div>
            </section>

            <section class="section">
                <h1 class="heading edu_head">Education</h1>
                <div class="education" style="text-align: center;">
                    <div class="education-card">
                        <h3>Collage Name</h3>
                        <p>X Y Z Institute </p>
                        <h3>Streame</h3>
                        <p>Computer Engineering</p>
                        <h3>CGPA</h3>
                        <p>8.6</p>
                    </div>

                    <div class="education-card">
                        <h3>Collage Name</h3>
                        <p>X Y Z College</p>
                        <h3>Streame</h3>
                        <p>Science</p>
                        <h3>Percentage</h3>
                        <p>89.38</p>
                    </div>

                    <div class="education-card">
                        <h3>School Name</h3>
                        <p>X Y Z School</p>
                        <h3>Percentage</h3>
                        <p>94.40</p>
                    </div>
                </div>
                <div class="clearifix"></div>
        </div>
        </section>
        <section class="section">
            <h1 class="heading skill-head">Skills</h1>
            <div>
                <div class="skill-card">
                    <h3>Language</h3>
                    <p>Java, C, React, HTML, Css, Javascript</p>
                </div>
                <div class="ide-card">
                    <h3>IDE</h3>
                    <p>Visual Studio, Android Studio, Eclipse</p>
                </div>
                <div class="clearifix"></div>
            </div>
        </section>
        <section id="project-info" class="section">
            <div>
                <h1 class="heading">Projects</h1>
                <div class="project-card">
                    <h3 style="text-align: center;"> E-commerce-website-using-react</h3>
                    <p>
                        <b>Framework </b>: React <br>
                        <b>API</b> : Commerce.js <br>
                        <b>Features</b> : add and remove product from cart, make order etc.
                    </p>
                </div>
                <div class="project-card">
                    <h3 style="text-align: center;">Doctor_Patient Application</h3>
                    <p>
                        <b>Language</b> : Java <br>
                        <b>Backend</b>: Firebase <br>
                        <b>IDE</b> :Android Studio <br>
                        <b>Features</b> : Separate Doctor and Patient dashboard, Add
                        prescription ,secure document edits ,current health news etc
                    </p>
                </div>
                <div class="clearifix"></div>
            </div>
        </section>
        <section class="section">
            <div>
                <h1 class="heading">Certificate</h1>
                <div class="certificate-card">
                    <b>Coding Ninja junior</b><br>
                    All India 1973 rd rank
                </div>
                <divarv class="certificate-card">
                    <b> Introduction to SQL</b><br>
                    Coursera Certificate
                </divarv>
                <div class="certificate-card">
                    <b>Java Problem Solving</b> <br>
                    Hacker Rank Certificate
                </div>
                <div class="clearifix"></div>
            </div>
        </section>
        <section id="contact-info" class="section">
            <h1 class="heading">Contact</h1>
            <p class="contact-card">
                <b>Email :</b><a href="omkar@gmail.com">omkar@gmail.com</a> <br>
                <b>Github :</b><a href="https://github.com/Omkara1760">Omkara1760</a> <br>
                <b>Mobile No. :</b>9800****** <br>
                <b>LinkedIn :</b><a href="https://www.linkedin.com/in/omkar-varhadi/">omkar-varhadi</a>
            </p>
        </section>
        <div></div>
    </div>
    </div>
</body>

</html>