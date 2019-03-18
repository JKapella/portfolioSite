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
 * @return array
 */
function retrieveAboutMeInfoFromDb(PDO $db) :array {
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
 * @param array $infoArray
 * @return bool
 */
function checkIfEditingPost(array $infoArray) : bool {
    if ($infoArray['content'] === null ) {
        return 0;
    } else {
        return 1;
    }
}

/**
 * @param array $infoArray
 * @return string
 */
function formatLastUpdatedInfo(array $infoArray) : string {
    if ($infoArray['post_time'] === null ) {
        return 'Please write a new post!';
    } else {
        return 'Last updated - ' . $infoArray['post_time'];
    }
}

/**
 * @param array $formData
 * @param PDO $db
 * @return bool
 */
function processAboutMeSubmittedForm(array $formData, PDO $db) {
    if ($formData['aboutMeText'] != null) {
        if ($formData['editingPost'] == false) {
            $query = $db->prepare("INSERT INTO `about_me_data` (`content`, `post_time`, `is_deleted`)
VALUES (:content, :timestamp, '0');");
            $query->bindParam(':content', $formData['aboutMeText']);
            $query->bindParam(':timestamp', date('Y-m-d H:i:s'));
            return $query->execute();
        } else {
            return false;
        }
    } else {
        return false;
    }
}