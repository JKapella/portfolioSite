<?php


include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();

$heldPasswordForUser = getHeldPasswordForUser($_POST['username'], $db);
$verifyPassword = password_verify($_POST['password'], $heldPasswordForUser);
if ($verifyPassword == true) {
    $_SESSION['loggedIn'] = true;
}

if ($_SESSION['loggedIn'] == true) {
    header('location: admin.php');
} else {
    header('location: login.php');
}