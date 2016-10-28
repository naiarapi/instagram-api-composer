<?php

require '../src/Instagram.php';
use MetzWeb\Instagram\Instagram;

// initialize class
$instagram = new Instagram(array(
  'apiKey'      => '	9a94c71c49bd4869a1a7fd8317ae1b63',
  'apiSecret'   =>  '34b7b9eeaf034f13b78dc96feeed57df ' ,
  'apiCallback' => 'https://composer-naiara.c9users.io/instagram/vendor/cosenary/instagram/example/?code=70a653c0684549d1a83bf24f13a349be'// must point to success.php
));

// create login URL
$loginUrl = $instagram->getLoginUrl();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram - OAuth Login</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <style>
      .login {
        display: block;
        font-size: 20px;
        font-weight: bold;
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <header class="clearfix">
        <h1>Instagram <span>display your photo stream</span></h1>
      </header>
      <div class="main">
        <ul class="grid">
          <li><img src="assets/instagram-big.png" alt="Instagram logo"></li>
          <li>
            <a class="login" href="<?php echo $loginUrl ?>">» Login with Instagram</a>
            <h4>Use your Instagram account to login.</h4>
          </li>
        </ul>
        <!-- GitHub project -->
        <footer>
          <p>created by <a href="https://github.com/cosenary/Instagram-PHP-API">cosenary's Instagram class</a>, available on GitHub</p>
        </footer>
      </div>
    </div>
  </body>
</html>
