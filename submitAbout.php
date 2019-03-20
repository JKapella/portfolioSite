<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('location: index.php');
}

$db = getDbConnection();


processAboutMeSubmittedForm($_POST, $db);

header('location: admin.php');
