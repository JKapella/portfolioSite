<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();
$aboutMeText = returnAboutMeTextFromDb($db);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>James Kapella || Web Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel='stylesheet' href='normalize.css' type='text/css'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
</head>
<body>
    <header>
        <div class='container'>
            <h1>JAMES KAPELLA</h1>
            <h3>Full stack web developer</h3>
            <img class='scrollingFingerImage pulsingImage' src='img/scrollFingerIcon.png' alt='Scroll-down icon'>
            <section>
                <h4>About me</h4>
                <p><?php echo $aboutMeText; ?></p>
            </section>
            <section>
                <h4>Contact</h4>
                <ul>
                    <li>
                        <a href='https://github.com/JKapella' target='_blank'>
                            <img src='img/githubIcon.png' alt='a github icon'> Github
                        </a>
                    </li>
                    <li>
                        <a href='mailto:jvkapella@gmail.com' target='_blank'>
                            <img src='img/emailIcon.png' alt='an email icon'> Email
                        </a>
                    </li>
                    <li>
                        <a href='http://www.linkedin.com/in/james-kapella-895001106' target='_blank'>
                            <img src='img/linkedinIcon.png' alt='a linkedin icon'> LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href='http://culturebosh.com' target='_blank'>
                            <img src='img/gameIcon.png' alt='a games icon'> My Games
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </header>
    <main>
        <div class='container'>
            <h1>PORTFOLIO CMS</h1>
            <div class='copy-area'>
                <p>This website is (partially) powered by a CMS which we created as a solo project, utilising the LAMP stack.</p>
                <div>
                    <img src='img/adminScreen.png' alt='A screenshot of the admin screen'>
                </div>
                <p>The requirements of the project were to add CRUD functionality to part of our portfolio, with an 'admin' page, protected by a login screen.</p>
                <div>
                    <img src='img/loginScreen.png' alt='A screenshot of the Login screen'>
                </div>
                <p>Both the admin-edit and login features are both in place on this version of the site (you can view the live login page <a href='http://dev.maydenacademy.co.uk/students/2019/feb/james/portfolioSite/login.php' target='#'>here</a>) the edit page is password protected, but you can view the code on Github.</p>
            </div>
        </div>
    </main>
</body>
</html>