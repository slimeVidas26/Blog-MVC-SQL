
<?php
require 'models/model.php';
$postid = $_GET['id'];
$onePost = getSinglePost($_GET['id']);
$comments = getComments();
$pagetitle = 'Single page';
$js = "app.js";
$css = ["menu.css","style.css","form.css"];
require 'assets/v_head.php';
require 'assets/v_header.php';
require 'assets/v_container_single.php';
require 'assets/v_footer.php';

?>