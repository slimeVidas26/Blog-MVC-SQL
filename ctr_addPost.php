<?php
if(!empty($_GET) && isset($_GET['id'])){
require 'models/model.php';
$postId = $_GET['id'];
$updatePost = getSinglePost($postId);
    if(!$updatePost){
        header("location: index.php");
    }
    else{
        $pagetitle = '  Edit Page';
    }
}

else{
    $postId = '';
    $updatePost = [
     'title' =>'',
     'content'=> ''
    ];

$pagetitle = 'Add Page';
}

$pagetitle = "Add Page";

require 'assets/v_head.php';
require 'assets/v_header.php';
require 'assets/v_container_form.php';
require 'assets/v_footer.php';
$css = ["menu.css","style.css","form.css"];
?>