<?php

// Include database file
require_once 'dbConfig.php';

// Include URL Shortener file
require_once 'Shortener.class.php';
$shortener = new Shortener($db);

// Retrieve short code from URL
$shortCode = $_GET["c"];

try{
    // Get URL by short code
    $url = $shortener->shortCodeToUrl($shortCode);
    
    // Redirect to the original URL
    header("Location: ".$url);
    exit;
}catch(Exception $e){
    echo $e->getMessage();
}
?>