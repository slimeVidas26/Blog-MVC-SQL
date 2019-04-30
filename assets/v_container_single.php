 <!--BEGIN INNER CONTAINER-->
 <div id="inner_container">
            <!--INNER CONTAINER CENTERED 1000PX-->
            <!--BEGIN BANNER-->
           <?php require 'v_banner.php'?> 
            <!--END BANNER-->
            <!--BEGIN CONTENT-->
            <div id="content" class="clearfix">  
             <?php require 'v_single_content.php';?>

                <!--BEGIN ALERTS-->
                <div id="alerts">
                    <!-- News alerts: Make the container fixed height Inside place h1 with preset height for title and Below add another div with
                    remaining height. Set its overflow-y:auto. Inside the div place multiple divs (no need for width/height
                    definition) See how scroll shows when they don`t fit in. Replicate the grey/white patterns in news items
                    Hint: When sharing elements between pages, best practice is to place it’s css in one external file, and
                    create another css file for the specific page style-->
                    <h2>What's new</h2>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>
                    <div class="alert">platea fo shizzle my nizzle. Fizzle dapibizzle. Curabitizzle tellizzle yo mamma, pretizzle eu, fo shiznit,
                        fo shizzle my nizzle vitae, doggy. Boofron suscipizzle. </div>

                </div>
                <!--END ALERTS-->
            </div>
           <?php if($logged){?>
           
            <div id="comments" class="clearfix">
        
            <?php     
                         for($j=0;$j<count($comments);$j++){
                           
                             
                             ?>
                          <div class="article_text">
                         
                          <?php
                          
                      echo 
                      "<p class=\"author\"> {$comments[$j]['publisher']}   </p>
                      <p class=\"content\" > {$comments[$j]['content']} </p>
                      <p class=\"article_id\"> {$comments[$j]['post_id']} </p>
                      <p class = \"date\"> {$comments[$j]['theDate']} </p>

                     
                     
                      </div>";
                            
                     
                    }

                      ?>
            </div>
            <div id="bottom_content" class="clearfix">
            <?php require 'v_comment_form.php';?>
            </div>
            <!--END CONTENT-->
             <?php }?>
        </div>
        <!--END INNER CONTAINER-->
        
        <?php
         echo  "<script src='js/{$js}'></script>";
        ?>