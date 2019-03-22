<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];
    $arrayPasswordsForUsername = getHeldPasswordForUser($submittedUsername, $db);
    $heldPasswordForUser = processReturnedPasswordsArray($arrayPasswordsForUsername);
    $verifyPassword = password_verify($submittedPassword, $heldPasswordForUser);
    if ($verifyPassword == true) {
        $_SESSION['loggedIn'] = true;
    }
}

if ($_SESSION['loggedIn'] == true) {
    header('location: admin.php');
} else {
    header('location: login.php');
}