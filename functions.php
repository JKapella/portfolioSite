<?php

/**
 * This function returns the content from the MOST RECENT, NOT FLAGGED AS DELETED entry in the about me database, as a string
 *
 * @param PDO $db This must be a valid PDO object connecting to a database with an 'about_me_data' table
 *
 * @return string A string of less than 3000 characters, the content of the most recent valid entry in the db
 */
function returnAboutMeTextFromDb(PDO $db) : string {
    $query = $db->prepare("SELECT `content` FROM `about_me_data` WHERE `is_deleted` != 1 ORDER BY `post_time` DESC LIMIT 1;");
    $query->execute();
    $output = $query->fetchAll();
    if ($output != null) {
        return $output[0]['content'];
    } else {
        return '';
    }
}