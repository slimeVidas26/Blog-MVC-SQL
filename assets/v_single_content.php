  <!--BEGIN ARTICLES-->
  <div id="articles">
 
  <div class="article" class="clearfix">

      <div class="article_friend">
            
          <h3> <?php echo $onePost['title'] ?></h3>
          <p><?php echo nl2br($onePost['content']) ?></p>
      </div>
     
  </div>

  <div class="del-submit">
   
   <!-- <input type="submit" value="Delete" id = "deletePost"> -->
   <button id="deletePost" class="button-blue-delete" data-id="<?php echo $postid ?>">DELETE</button>
   <button id="updatePost" class="button-blue-update" data-id="<?php echo $postid ?>">UPDATE</button>

<div class="del-ease"></div>
</div>

</div>

<!--END ARTICLES-->







