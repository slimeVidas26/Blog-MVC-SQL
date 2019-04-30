<?php
//require "sessionManager.php";
require 'models/model.php';
$posts = getPostList();
$pagetitle = 'Main page';
$css = ["menu.css","style.css"];
require 'assets/v_head.php';
require 'assets/v_header.php';
require 'assets/v_container_main.php';
require 'assets/v_footer.php';

?>