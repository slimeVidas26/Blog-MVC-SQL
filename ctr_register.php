<?php
$pagetitle = 'Registration page';
require 'models/model.php';
$users =getUsers();

$css = ["menu.css","style.css" ,"register.css"];

require 'assets/v_head.php';
require 'assets/v_header.php';
require 'assets/v_container_register.php';
require 'assets/v_footer.php';


?>