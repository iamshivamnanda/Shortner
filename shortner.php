<?php
  require_once 'db.config.php';

// Include URL Shortener library file
require_once 'shortner.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Long URL
$longURL = $_GET["long-url"];

// Prefix of the short URL 
$shortURL_Prefix = 'https://xyz.com/'; // with URL rewrite
$shortURL_Prefix = 'http://localhost/shortner/?c='; // without URL rewrite

try{
    // Get short code of the URL
    $shortCode = $shortener->urlToShortCode($longURL);
    
    // Create short URL
    $shortURL = $shortURL_Prefix.$shortCode;
    
    // Display short URL
    echo 'Short URL: '.$shortURL;
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
?>