document.getElementById("deletePost").onclick = function(e) {
    if(confirm("Delete this post?")) {
      var id = e.target.getAttribute('data-id');
      location.href = "ctr_doDelete.php?id="+ id;
    }
  };

  document.getElementById("updatePost").onclick = function(e) { 
    var id = e.target.getAttribute('data-id');
    location.href = "ctr_addPost.php?id=" + id;
  };

  document.getElementById("addComment").onclick = function(e) { 
    var id = updatePost.getAttribute('data-id');
    location.href = "ctr_addComment.php?id=" +id ;
  };


  