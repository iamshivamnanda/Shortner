<?php
// Include database configuration file
require_once 'db.config.php';

// Include URL Shortener library file
require_once 'shortner.class.php';

// Initialize Shortener class and pass PDO object
$shortener = new Shortener($db);

// Retrieve short code from URL
if(!empty($_GET)){
  $shortCode = $_GET["c"];
try{
    // Get URL by short code
    $url = $shortener->shortCodeToUrl($shortCode);
    
    // Redirect to the original URL
    header("Location: ".$url);
    exit;
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon"  href="logo.svg">
    <script src="app.js" defer></script>
    <title>Shortner</title>
</head>
<body>
  <div class="main-wrapper">
    <div id="card-wrapper">
      <div class="front-card">
        <div class="title">SHORTNER</div>
      <div class="input-wrapper">
      <form action="shortner.php">
        <label for="long-url">[URL]</label>
        <input type="text" id="long-url" name="long-url" placeholder="📌PASTE HERE">
        <button type="submit" id="shorten-btn" onclick="rotate()">🔥SHORTEN URL</button>
      </form>
      </div>
      </div>
      <div class="back-card">
       <div class="title">SHORTNER</div>
    </div>
  </div>
</body>
</html>