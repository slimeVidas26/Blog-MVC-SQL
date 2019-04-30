<?php
session_start();
if(isset($_GET['logout'])) {
  $_SESSION = NULL;
  session_destroy();
  $logged = NULL;
}
else if(empty($_SESSION)) {
  $logged = NULL;
}
else {
  $logged = $_SESSION['logged'];
}
?>