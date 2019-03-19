<?php

include 'functions.php';
include 'dbConnect.php';

$db = getDbConnection();

processAboutMeDeleteForm($db);

header('location: admin.php');