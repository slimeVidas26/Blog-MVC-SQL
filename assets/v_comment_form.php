
 <!--BEGIN FORM-->
 <div class="comment_form">
 <form action="ctr_addComment.php" method="post">
 <input type="hidden" name = "id" value = <?php echo $postid;?>>
     <p>
        <textarea name="content" id="content" cols="30" rows="20" placeholder="Add your comment here"></textarea>
     </p>
     <div class="submit">
         <button id="addComment" class="button-blue-update" data-id="<?php echo $postid ?>">Add</button>

     <!-- <div class="ease"></div> -->
      </div>
     <div class="clearfix"></div>
     </p>
 </form>
 </div>
 <!--END FORM-->