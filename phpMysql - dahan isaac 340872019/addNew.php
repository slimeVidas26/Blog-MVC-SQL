<?php
require 'connexion.php';

if(isset($_POST['id']) && isset($_POST['name'])){
    if(!empty($_POST['id']) && !empty($_POST['name'])){

        try {
   
            $addNewSql = $conn->prepare("
            INSERT INTO employees (id, name)  VALUES (:id, :name)
            ");
            $addNewSql->bindParam(':id', $_POST['id']);
            $addNewSql->bindParam(':name', $_POST['name']);
          
                $addNewSql->execute();
            echo "New record created successfully";
            }
            Catch (PDOException $e) {
                    echo 'ERROR:'.$e->getMessage();
            }


    }

   
}



?>

