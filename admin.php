<?php

include 'functions.php';
include 'dbConnect.php';

session_start();

if (!isset($_SESSION['loggedIn'])) {
    header('location: index.php');
}

$db = getDbConnection();
$retrievedAboutMeInfoFromDb = retrieveAboutMeInfoFromDb($db);
$editingPost = checkIfEditingPost($retrievedAboutMeInfoFromDb);
$aboutMeLastUpdate = formatLastUpdatedInfo($retrievedAboutMeInfoFromDb);
if (isset($retrievedAboutMeInfoFromDb['content'])) {
    $aboutMeTextareaCopy = $retrievedAboutMeInfoFromDb['content'];
} else {
    $aboutMeTextareaCopy = '';
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Admin Page</title>
    <link rel='shortcut icon' type=image/x-icon' href='favicon.ico'>
    <link href="https://fonts.googleapis.com/css?family=Oswald:200" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel='stylesheet' href='normalize.css' type='text/css'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
</head>
<body>
    <div class='container'>
        <h1>ADMIN <img src='img/lockicon.png' alt='an icon of a padlock'></h1>
        <section>
            <h4>About me <span><?php echo $aboutMeLastUpdate; ?></span></h4>
            <form action='submitAbout.php' method='post' id='aboutMeForm'>
                <textarea name='aboutMeText' form='aboutMeForm'><?php echo $aboutMeTextareaCopy; ?></textarea>
                <input type='hidden' name='editingPost' value=<?php echo $editingPost; ?>>
                <input class='submit-button' type='submit' name='delete' value='Delete' formaction='deleteAbout.php'>
                <input class='submit-button' type='submit' name='publish' value='Publish'>
            </form>
        </section>
        <footer>
                <ul>
                    <li><a href='index.php'>Home</a></li>
                    <li><a href='logout.php'>Log out</a></li>
                </ul>
        </footer>
    </div>
</body>
</html>