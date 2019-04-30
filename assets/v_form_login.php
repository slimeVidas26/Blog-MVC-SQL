<?php
if($logged) {
  header("location: index.php");
}
else {
        if(!empty($_POST) && isset($_POST['name'])) {
         
        for($j=0;$j < count($users); $j++){  
       if(trim($_POST['name']) == $users[$j]['username']){
         
        $_SESSION['logged'] = [
          'name' => $_POST['name']
        ];
       header("location: index.php");
     
       }
       else {
        header("location: ctr_login.php?err");
       
         
      
      }
     } 
     }
  else {
  
    $err = '';
    if(isset($_GET['err']) ) {
      $err = '<p>Invalid user</p>'; 
    }

   echo <<<XXX
   <div class='container'>
   {$err}
    <div class='inner'>
      <h3>Login to your account </h3>
      <inner>
      <form action='ctr_login.php' method='post'>
        <input type='text' name = 'name' placeholder='Enter your name'>
        <input type='submit' value='Login'>
        </form>
      </inner>
    <div> 
   </div> 
  
XXX;
   
  }
}
?>
 
