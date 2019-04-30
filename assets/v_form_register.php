<?php
 
  if(!empty($_POST['name']) && isset($_POST)) {
         for($i=0;$i < count($users); $i++){

              if(trim($_POST['name'])!=$users[$i]['username']){
              setUser($_POST['name']);
              header("location: index.php");
               }
            
         else{
          header("location: ctr_register.php?err");
           }
       } 
    }
  else {
    $err = '';
    if(isset($_GET['err']) ) {
          if(empty($_POST['name'])){
        $err = '<p>Empty field !!</p>'; 
       }
    }
     
   echo <<<XXX
   <div class='container'>
    <div class='inner'>
     {$err}
      <h3>Register</h3>
      <inner>
      <form action='ctr_register.php' method='post'>
        <input type='text' name = 'name' placeholder='Enter your name'>
        <input type='submit' value='Register'>
        </form>
      </inner>
    <div> 
   </div> 
   
XXX;
   
  }


//////////////////////////////////////////////////////////////


?>
 




