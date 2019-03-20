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

/**
 * This function returns content, post time and deleted flag from the MOST RECENT, NOT FLAGGED AS DELETED entry in the about me database, as an array
 *
 * @param PDO $db This must be a valid PDO object connecting to a database with an 'about_me_data' table
 *
 * @return array Returns either an empty array if there are no current valid posts, or the post time, deleted flag and content in an associative array
 */
function retrieveAboutMeInfoFromDb(PDO $db) : array {
    $query = $db->prepare("SELECT `content`, `post_time`, `is_deleted` FROM `about_me_data` WHERE `is_deleted` != 1 ORDER BY `post_time` DESC LIMIT 1;");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
    $output = $query->fetchAll();
    if ($output != null) {
        return $output[0];
    } else {
        return [];
    }
}

/**
 * Takes in an info array based on current about me post taken from the database, if there is no valid last post, it flags that we need to create an entirely new post, represented by a boolean
 *
 * @param array $infoArray This should be an array of info taken from the db based on the current post (or an empty array if there is no valid last post)
 *
 * @return bool Will return true if there is a valid previous post (i.e. we ARE editing) or false if we are creating a new post (i.e we ARE NOT editing)
 */
function checkIfEditingPost(array $infoArray) : bool {
    if (isset($infoArray['content']) && strlen($infoArray['content']) < 3000) {
        return 1;
    } else {
        return 0;
    }
}

/**
 * Takes in an info array based on current about me post taken from the database, then gives back either post time or a default message
 *
 * @param array $infoArray This should be an array of info taken from the db based on the current post (or an empty array if there is no valid last post)
 *
 * @return string will return either formatted date/time with 'last updated' prefix, or a default message to write a new post
 */
function formatLastUpdatedInfo(array $infoArray) : string {
    if (isset($infoArray['post_time'])) {
        return 'Last updated - ' . $infoArray['post_time'];
    } else {
        return 'Please write a new post!';
    }
}

/**
 * This function accepts data from the about me submission form and rejects the input if null or edits/adds to database if it is valid
 *
 * @param array $formData This should be an array of info taken from about me form on the admin page
 * @param PDO $db This must be a valid PDO object connecting to a database with an 'about_me_data' table
 *
 * @return bool Will return true if data has been added to the DB, or false if it failed.
 */
function processAboutMeSubmittedForm(array $formData, PDO $db) : bool {
    if (isset($formData['aboutMeText'])) {
        if ($formData['editingPost'] == false) {
            $query = $db->prepare("INSERT INTO `about_me_data` (`content`, `post_time`, `is_deleted`)
VALUES (:content, :timestamp, '0');");
            $query->bindParam(':content', $formData['aboutMeText']);
            $query->bindParam(':timestamp', date('Y-m-d H:i:s'));
            return $query->execute();
        } else {
            $query = $db->prepare("UPDATE `about_me_data` SET `content` = :content, 
                           `post_time` = :timestamp WHERE `is_deleted` != 1 ORDER BY `post_time` DESC LIMIT 1;");
            $query->bindParam(':content', $formData['aboutMeText']);
            $query->bindParam(':timestamp', date('Y-m-d H:i:s'));
            return $query->execute();
        }
    } else {
        return false;
    }
}

/**
 * This function sets the 'is_deleted' flag for all about me entries in the database that are not deleted (there should only ever be one, it just does all as a safety measure)
 *
 * @param $db PDO This must be a valid PDO object connecting to a database with an 'about_me_data' table
 *
 * @return bool Returns true if database update is successful, false on failure
 */
function processAboutMeDeleteForm(PDO $db) : bool {
    $query = $db->prepare("UPDATE `about_me_data` SET `is_deleted` = '1' WHERE `is_deleted` != 1;");
    return $query->execute();
}


function hashPassword($inputtedPassword) {

    return '';
}