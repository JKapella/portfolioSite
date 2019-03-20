<?php


include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();

$heldPasswordForUser = getHeldPasswordForUser($_POST['username'], $db);
var_dump($verifyPassword = password_verify($_POST['password'], $heldPasswordForUser));





//
////check the two passwords match
////set logged in to true..
//
//if ($_SESSION['loggedIn'] == true) {
//    header('location: admin.php');
//}