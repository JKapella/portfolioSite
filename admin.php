<?php


$aboutMeLastUpdate = "Last updated - 09/01/1955 20:01";
$aboutMeTextareaCopy = "I’m a Full Stack Developer-in-training with The Mayden Academy who’s enthusiastic about both front-end design and back-end systems. I’m also a Certified Scrum Master with training in Agile methodologies. I’m fascinated by games and games design, and have been jamming and creating in my spare time for several years. Away from keyboards and screens I can also be found making loud noises with electric guitars, and stroking all the good dogs.";

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Admin Page</title>
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
            <form action='' method='post'>
                <textarea name='' id='' cols='30' rows='10'><?php echo $aboutMeTextareaCopy; ?></textarea>
                <input type='submit'>
                <input type='submit'>
            </form>
        </section>
    </div>

</body>
</html>