<?php

include 'functions.php';
include 'dbConnect.php';

$db = getDbConnection();

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
<div class='container'>
    <h1>LOGIN <img src='img/lockicon.png' alt='an icon of a padlock'></h1>
    <div class='login-area'>
        <form action=''>
            <p>
                <input class='login-input' type='text' placeholder='Enter your username...'>
            </p>
            <p>
                <input class='login-input' type='text' placeholder='Enter your password...'>
            </p>
            <p>
                <input class='submit-button' type='submit'>
            </p>
        </form>
    </div>
    <footer>
        <ul>
            <li><a href='index.php'>Home</a></li>
        </ul>
    </footer>
</div>
</body>
