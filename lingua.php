<?php
session_start();

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'it';
}

switch ($lang) {
  case 'it':
  $lang_file = 'it/it.php';
  break;

  case 'en':
  $lang_file = 'en/en.php';
  break;
  
  default:
  $lang_file = 'it/it.php';

}

include_once $lang_file;
?>
