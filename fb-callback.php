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

 try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo " nothing went wrong"
?>
