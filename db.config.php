<!-- CREATE TABLE `short_urls` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `long_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `short_code` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; -->



<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "shortner";

// Create database connection
try{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>