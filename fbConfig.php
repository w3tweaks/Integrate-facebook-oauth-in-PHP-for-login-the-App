<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '429857280716212'; //Facebook App ID
$appSecret = '3be03bb4f62d9dffdc89cdf2809aac77'; // Facebook App Secret
$redirectURL = 'http://www.w3tweaks.com/facebookoauth'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>