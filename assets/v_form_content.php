 <!--BEGIN FORM-->

 <div class="form2">

<form action="ctr_doAddPost.php" method="post">
<input type="hidden" name = "id" value = <?php echo $postId;?>>

    <p>
        <input type="text" name="title" placeholder="Title" value = "<?php echo $updatePost['title'] ?>">  
    </p>
    <p>
       <textarea name="content" id="content" cols="30" rows="20" placeholder="Add your post here"><?php echo $updatePost['content'] ?></textarea>
    </p>
    <div class="submit">
   
        <input type="submit" value="Save">
   
    <div class="ease"></div>
     </div>
    <div class="clearfix"></div>
    </p>
</form>
</div>
<!--END FORM-->




