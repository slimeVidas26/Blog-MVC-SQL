<?php
$pagetitle = 'Login page';
require 'models/model.php';
$users =getUsers();
$css = ["menu.css","style.css" ,"login.css"];
require 'assets/v_head.php';
require 'assets/v_header.php';
require 'assets/v_container_login.php';
require 'assets/v_footer.php';



?> 
