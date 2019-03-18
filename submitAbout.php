<?php

include 'functions.php';
include 'dbConnect.php';

$db = getDbConnection();


processAboutMeSubmittedForm($_POST, $db);

header('location: admin.php');
