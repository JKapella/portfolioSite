<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('location: index.php');
}

$db = getDbConnection();

processAboutMeDeleteForm($db);

header('location: admin.php');