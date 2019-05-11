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
        <h1>APTITUDE TEST PROJECT</h1>
        <div class='copy-area'>
            <p>For this project we were given an existing codebase to work on and a series of prioritised stories, both bug fixes and features.</p>
            <div>
                <img src='img/apTest1.png' alt='The aptitude test login screen'>
            </div>
            <p>The app makes calls to a backend API, which we interacted with according to the documentation and called for information using fetch requests.</p>
            <p>Among the stories we completed were admin requests to add a search function for users in the test results table (which we achieved using RegEx) and filtering options.</p>
            <div>
                <img src='img/apTest2.png' alt='The aptitude test admin screen'>
            </div>
            <p>Consulting with our product owner we also added validation to protect our inputs and consider UX for admins.</p>
            <div>
                <img src='img/apTest3.png' alt='An aptitude test question screen'>
            </div>
            <p>We used SASS as a preprocessor for CSS on the project, and Handlebars to template Javascript data into HTML.</p>
            <p>You can see the live login page of the aptitude test <a href='https://dev.maydenacademy.co.uk/projects/2017/aptitude-test/app/' target='#'>here</a>, but everything beyond this is protected to prevent users taking the test multiple times - the code is available to view on Github!</p>
            <ul>
                <li>
                    <a href='https://github.com/Mayden-Academy/aptitude-test' target='_blank'>
                        <img src='img/githubIcon.png' alt='a github icon'> Github
                    </a>
                </li>
            </ul>
        </div>
        <footer>
            <ul>
                <li><a href='index.php'>Home</a></li>
            </ul>
        </footer>
    </div>
</main>
</body>
</html>