 <?php
require "sessionManager.php";

?> 




<!--BEGIN WRAPPER-->
<div id= "wrapper">
        <!--BEGIN HEADER-->
        <div id="header" class="clearfix">
            <!--LOGO AND MENU LINE FULL PAGE widthFIXED TO TOP-->
            <!--BEGIN LOGO-->
            <div id="logo">
                <p>
                    <span class="deep">Deep</span>
                    <span class="soul">Soul</span>
                    <span class="point">.</span>
                </p>

            </div>
            <!--END LOGO-->
            
            <!--BEGIN TOP MENU-->
            <div id="top_menu" class="clearfix">
            <?php
            if($logged) {
  
   echo   "<ul class='primary clearfix'>";
   echo   "<li> <h4> {$logged['name']}</h4></li>";
   echo    "<li><a href='index.php'>home page</a> </li>" ;
   echo    "<li> <a href='ctr_addPost.php'>Add Post</a> </li>";
   echo    "<li><a href='ctr_login.php?logout'>Logout</a></li>";
   echo    "</ul>";
   echo    "</div>";
}
else {
    echo "<div id='top_menu' class='clearfix'>";
    echo "<ul class='primary clearfix'>";
    echo "<li> <a href='ctr_login.php'>Login</a></li>";
    echo "<li><a href='index.php'>home page</a> </li>" ;
    echo "<li> <a href='ctr_register.php'>Register</a></li>";
    echo "</ul>";
    echo "</div>";
} ?>
       
            </div>
            <!--END TOP MENU-->


        </div>
        <!--END HEADER-->