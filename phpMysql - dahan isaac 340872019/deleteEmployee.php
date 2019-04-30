<?php
require 'connexion.php';

if(isset($_POST['id'])){
    if(!empty($_POST['id'])){


$sql = $conn->prepare("SELECT name
                       FROM employees
                        WHERE id= :id LIMIT 1");
$sql->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
   
$sql->execute(); 
$result=$sql->rowCount();

if($result>0){

        try {
            $deleteSql = "DELETE FROM employees WHERE id =  :id";
            $stmt = $conn->prepare(deleteSql);
          
            
            echo " Record deleted successfully";
            }
            Catch (PDOException $e) {
                    echo 'ERROR:'.$e->getMessage();
            }

        }
    }}
    
    




