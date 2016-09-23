<?php

require_once __DIR__ . '/libs/Facebook/autoload.php';
require_once __DIR__ . '/app_config.php';

$fb = new Facebook\Facebook([
  'app_id' => APP_ID,
  'app_secret' => APP_SECRET,
  'default_graph_version' => 'v2.7',
  ]);

// $helper = $fb->getRedirectLoginHelper();


 // $response = $fb->get('/me?fields=id,name',);
 //
 // $user =  $response->getGraphUser();
 // echo "Logged in as " . $user['name'];

 echo $fb;

?>
