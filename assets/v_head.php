<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $pagetitle;?></title>
    <meta charset="UTF-8">
   
      <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <?php
    $t = time();
    if(!empty($css)) {
      for($i=0;$i<count($css);$i++) {

        echo "<link rel=\"stylesheet\" href=\"css/{$css[$i]}?i=\"{$t}\"\">";
      }
     
    }
    
  ?>

   
</head>

<body>
    