
<?php
 
if(empty($_POST)) {
    header("location: index.php");
  }
  else if(empty($_POST['title']) || empty($_POST['content'])) {
    header("location: index.php");
  }
  else {
    require "models/model.php";
    if($_POST['id']==''){
    $newid = setData($_POST['title'],$_POST['content'],getUserId($logged['name']));
    
  
  }
  else {
    editPost($_POST['id'],$_POST['title'],$_POST['content']);
    $newid = $_POST['id'];
  }
  header("location: ctr_singlePost.php?id={$newid}");
  
  
}




  ?>