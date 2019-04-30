<?php
require 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>Php Mysql Task</title>
</head>
<body>
    <div class = "form">
    <h1><a href="index.php">Employees</a></h1>
    <!-- FORM -->
    <form action="" method="post" name="testForm">
    <label for="id">ID:
    <input type="text" name ="id" class = "id">
    </label>
    <input type="hidden" name = "id" value = <?php echo $_POST['id'];?>>

    <label for="name">Name:
    <input type="text" name = "name" class = "name">
    </label>
    <p>
    <button type="button" name="getEmployee" class="button">Get Employee</button>
    <button type="button" name="addNew" class="button">Add New</button>
    <button type="button" name="updateEmployee" class="button">Update Employee</button>
    <button type="button" name="deleteEmployee" class="button">Delete Employee</button>
    <button type="button" name="getAllEmployee" class="button">Get All Employees</button>
</p>
</form>
     <!-- END OF FORM -->
    <hr>

    <div id="display">

    <?php
    if(isset($_GET['dir'])){
    $dir = $_GET['dir'];
    switch($dir){
        case "getEmployee":
        require 'getEmployee.php';
        break;

        case "addNew":
        require 'addNew.php';
        break;

        case "updateEmployee":
        require 'updateEmployee.php';
        break;

        case "deleteEmployee":
        require 'deleteEmployee.php';
        break;

        case "getAllEmployee":
        require 'getAllEmployee.php';
        break;
        default:
        echo "page not founded!";

    }
}
    
    ?>

    </div>

    </div>
    <script src="app.js"></script>
</body>
</html>

