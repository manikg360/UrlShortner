<?php
// Include database configuration file
require_once 'dbConfig.php';

// Include URL Shortener file
require_once 'Shortener.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Long URL
$longURL = 'https://github.com/manikg360';
$longURL = $_POST['url'];

// Prefix of the short URL 
$shortURL_Prefix = 'https://localhost/urlShortner/';

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    echo 'Short URL: <a href="'.$shortURL.'" target="_blank">'.$shortURL.'</a>';
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
?>