<?php
require 'connexion.php';

try {
   
 
    $sql = "select * from employees"; 
    $query = $conn->query($sql);
 
   
    // echo '<pre>';
    // print_r($query->fetchAll());
    // echo '</pre>';
 
      echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
       while ($row = $query->fetch()) {
         echo "<tr>";
         echo "<td>". $row['id']. "</td>";
         echo "<td>". $row['name']. "</td>";
         echo "</tr>";
       }
       echo "</table>";
 
 }
 Catch (PDOException $e) {
  echo 'ERROR:'.$e->getMessage();
 }
 