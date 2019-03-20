<?php


include 'functions.php';
include 'dbConnect.php';

session_start();

$db = getDbConnection();

var_dump($_POST);


$hashedPassword = hashPassword($_POST['password']);

echo $hashedPassword;
//heldPasswordForUser = getHeldPasswordForUser();
//
////check the two passwords match
////set logged in to true..
//
//if ($_SESSION['loggedIn'] == true) {
//    header('location: admin.php');
//}