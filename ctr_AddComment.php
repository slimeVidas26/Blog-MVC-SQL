
<?php
require 'sessionManager.php';
if(empty($_POST)) {
    header("location: index.php");
  }
  else if( empty($_POST['content'])) {
    header("location: index.php");
  }
  else {
    require "models/model.php";
    if($_POST['content']!=''){
      $date = date('l jS \of F Y h:m:s ');
     
     setComment($_POST['content'], $date, $postid , $_SESSION['logged']['name']);
     
  }
  header("location: ctr_singlePost.php?id={$_POST['id']}");
}
  ?>