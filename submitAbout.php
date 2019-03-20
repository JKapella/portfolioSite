<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('location: index.php');
}

$db = getDbConnection();

if (isset($_POST)) {
    $aboutMeData = $_POST;
    processAboutMeSubmittedForm($aboutMeData, $db);
}

header('location: admin.php');
