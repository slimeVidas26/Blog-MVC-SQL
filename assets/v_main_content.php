 
 
 <div id="articles">
                  
                    <div class="article" class="clearfix">
                    <div class="message"> <?php  $logged['name'];?></div>
                         <?php
                       
                         for($i=0;$i<count($posts);$i++){ ?>
                          <div class="article_text">
                         
                          <?php echo "<h3><a href=\"ctr_singlePost.php?id={$posts[$i]['id']}\">
                      {$posts[$i]['title']}
                      </a></h3></div>";
                               
                      }

                      ?>
                    </div>
                </div>
                <!--END ARTICLES-->