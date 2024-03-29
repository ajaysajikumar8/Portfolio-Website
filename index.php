<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajay Sajikumar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="favicon" href="favicon.ico?v=2">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rancho&family=Roboto+Slab&family=Dosis&display=swap" rel="stylesheet">
</head>

<body>
    <div class="top-container">
        <img class="top-cloud" src="images/cloud.png" alt="cloud-img">
        <h1>I'm Ajay</h1>
        <h2 class="description-heading">A programmer</h2> 
        <img class="bottom-cloud" src="images/cloud.png" alt="cloud-img">
        <img class="mountain" src="images/mountain.png" alt="mountain-img"> 
    </div>
    <div class="middle-container">
        <div class="profile">
            <img class="profile-pic" src="images/Ajay Sajikumar.png" alt="ajay-profile-pic">
            <h2>Hello.</h2>
            <p class="self-desc">I am a python developer / web developer in Raigarh, C.G. I have a passion for web development and cybersecurity
            </p>
        </div>
        <hr>
        <div class="skills">
            <h2>My Skills.</h2>
            <div class="skill-row">
                <img class="python-img" src="images/python.png" alt="python-img">
                <h3>Python</h3>
                <p>I am proficient with python programming language. have a good knowledge of python programming
                    language. I also know some of data structures. I made few projects using python. I am familiar with
                    OOPS concept. I also worked on APIs. I am constantly learning python.</p>
            </div>
            <div class="skill-row">
                <img class="web-dev-img" src="images/web-dev.png" alt="web-dev-img">
                <h3>Web Development</h3>
                <p>I am learning web Development with python. I am following the course of Dr. Angela Yu. She has one of
                    the best web Development tutorial on the internet.</p>
            </div>
        </div>
        <hr>
        <div class="contact-me">
            <h2>Get In Touch</h2>
            <h3>If you love coding and MCU.</h3>
            <p class="contact-me-desc">Lets talk about coding and how awesome the Marvel Cinematic Universe are</p>
            <?php include "data_insert.php" ?>
            <div class="contact-form">
            <form action="" method="POST">
                <label for="name">Your Name: </label><br>
                <input type="text" name="name" id="name"><br><br>
                <label for="email" id="email">Your Email: </label><br>
                <input type="text" name="email"><br><br>
                <label for="message">Your Message: </label><br>
                <textarea type="text" name="message" id="message"></textarea><br><br>
                <input class="btn" type="submit" name="submit">
            </form>
            </div>
        </div>
    </div>


    <div class="bottom-container">
        <a class="footer-link" href="https://www.linkedin.com/in/ajay-sajikumar-2935a9163/">LinkedIn</a>
        <a class="footer-link" href="https://www.instagram.com/ajay_sajikumar/">Instagram</a>
        <a class="footer-link" href="https://github.com/ajaysajikumar8">Github</a>
        <p class="copyright-p">© 2022 Ajay Sajikumar.</p>
    </div>

</body>

</html>