<?php
    require_once 'src/Instagram.php';
    use MetzWeb\Instagram\Instagram;

    $instagram = new Instagram(array(
      'apiKey'      => '	9a94c71c49bd4869a1a7fd8317ae1b63',
      'apiSecret'   =>  '34b7b9eeaf034f13b78dc96feeed57df ' ,
      'apiCallback' => 'https://composer-naiara.c9users.io/instagram/vendor/cosenary/instagram/example/success.php'
    ));

    echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";
    
    $code = $_GET['code'];
    $data = $instagram->getOAuthToken($code);

    echo 'Your username is: ' . $data->user->username;
?>