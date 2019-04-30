<?php
require 'connexion.php';

if(isset($_POST['id']) && isset($_POST['name'])){
    if(!empty($_POST['id']) && !empty($_POST['name'])){
$getEmpSql = $conn->prepare("SELECT name FROM employees WHERE id=$_POST['id'] LIMIT 1"); 
$getEmpSql->execute(); 
$row = $stmt->fetch();

    }
}