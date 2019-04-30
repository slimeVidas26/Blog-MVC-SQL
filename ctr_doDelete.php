<?php

if(empty($_GET)) {
  header("location: index.php");
}
else if(empty($_GET['id'])) {
  header("location: index.php");
}
else {
  require "models/model.php";
  deletePost($_GET['id']);
  header("location: index.php");
}
?>





