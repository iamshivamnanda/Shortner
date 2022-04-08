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
    
}catch(Exception $e){
    // Display error
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="app.js" defer></script>
    <title>Shortner</title>
</head>
<body>
  <div class="main-wrapper">
    <div id="card-wrapper">
    <div class="back-card">
       <div class="title">SHORTNER</div>
      <div class="input-wrapper">

        <label for="long-url">[SHORT URL]</label>
        <input type="text" id="long-url" name="long-url" value="<?php echo ($shortURL)? $shortURL:"" ?>" placeholder="GET YOUR SHORT URL HERE">
        <button type="bttn" id="copy-btn">🔥COPY</button>
      </div>
    </div>
      
    
  </div>
  </div>
</body>
</html>