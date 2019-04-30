<?php
//require 'sessionManager.php';
////////// CONNECTION TO DATABASE     ////////////////////////////////////////////////
$host = '127.0.0.1';
$dbname   = 'myblog'; 
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

try {
   $connexion = new PDO($dsn, $user, $pass);
   $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

   //var_dump("connexion reussi");


}
catch(PDOException $e)
    {
      echo 'ERROR:'.$e->getMessage();

    }
//***********************Comments ********************************************/

function getData(){
  //getting data from json file using file_get_content
  //string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = 0 [, int $maxlen ]]]] )

global $connexion;
try {
  $sqlPosts ="SELECT * FROM posts"; 
  $pdoStatPosts = $connexion->prepare($sqlPosts); 
  $pdoStatPosts->execute();
   $postsOnDatabase = $pdoStatPosts->fetchAll();
  
   return  $postsOnDatabase;

}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  echo 'no posts in database';
}
}
//******************  setData   ******************************************** */
//filling the jason file with data using file_put_contents function 
//doc : int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )


function setData($title , $content,$user_id){
  global $connexion;
  try {
    $sqlPosts="INSERT INTO
     posts (title,content,user_id)
    VALUES (:title,:content,
     (SELECT id FROM users
      WHERE username ='" .$_SESSION['logged']['name']."' ))";
    $pdoStat = $connexion->prepare($sqlPosts);
    $pdoStat->bindValue(':title',$title , PDO::PARAM_STR );
    $pdoStat->bindValue(':content',$content , PDO::PARAM_STR );
    //$pdoStat->bindValue(':user_id',$user_id , PDO::PARAM_INT );
     //$pdoStat->bindValue(':username','username' , PDO::PARAM_STR );
    $result=$pdoStat->execute();
    return $connexion->lastInsertId();
    var_dump($logged['name']); 
  }
  Catch (PDOException $e) {
      echo 'DB ERROR: '.$e->getMessage();
      die;
  } 
}

//*********************  getPostTitles() ***************************************//

function getPostList(){
  global $connexion;
  try {
    $sqlPosts ="SELECT id,title, content FROM posts"; 
    $pdoStatPosts = $connexion->prepare($sqlPosts); 
    $pdoStatPosts->execute();
     $postsOnDatabase = $pdoStatPosts->fetchAll();
    
     return  $postsOnDatabase;

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo 'no posts in database';
}
  
}

//***************************  getPost  *****************************************/
//Affiche le titre et le contenu du post sur lequel on a cliqué
function getSinglePost($id){


 global $connexion;
 try {
   $sqlSinglePost ="SELECT title , content FROM posts WHERE id = :id "; 
   $pdoStat = $connexion->prepare($sqlSinglePost);
   $pdoStat->bindValue(':id',$id , PDO::PARAM_INT ); 
   $pdoStat->execute();
    $postTitle = $pdoStat->fetch();
   
    return  $postTitle;

}
catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
}
}

//************************************************************************************** */

function deletePost($id){
 
    global $connexion;
    try{
$sqlDelete = "DELETE FROM posts WHERE id =  :id";
$pdoStat = $connexion->prepare($sqlDelete);
$pdoStat->bindValue(':id', $id, PDO::PARAM_INT);   
$pdoStat->execute();
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
}

//////////////////////////////////////////////////////////////////////
function storeToDb($posts) {
  @file_put_contents("data.json",json_encode($posts));
}

/////////////////////////////////////////////////////////////////////

function editPost($id,$title,$content) {

global $connexion;
try {
$sqlEdit = "UPDATE posts SET
            title = :title,  
            content = :content  
            WHERE id = :id";
$pdoStat = $connexion->prepare($sqlEdit);                                  

$pdoStat->bindValue(':title', $title, PDO::PARAM_STR); 
$pdoStat->bindValue(':content', $content, PDO::PARAM_STR);   
$pdoStat->bindValue(':id', $id, PDO::PARAM_INT);   
$pdoStat->execute(); 
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  echo 'no users in file';
}
}
///////////////////////////////////////////////////////////////////////////////

//************************* getUsers ********************************************/

function getUsers(){
  global $connexion;
  //$users = [];
  try {
    $sqlUsers ="SELECT id, username, status_id FROM users"; 
    $pdoStatUsers = $connexion->prepare($sqlUsers); 
    $pdoStatUsers->execute();
     $usersOnDatabase = $pdoStatUsers->fetchAll();
    
     return  $usersOnDatabase;

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    echo 'no users in file';
}
  
}

 
//******************  setUsers   ******************************************** */
//filling the jason file with data using file_put_contents function 
//doc : int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )
function setUser($pseudo){
  global $connexion;
  try {
    $sql = "INSERT INTO users (username) VALUES (:username)";
    $pdoStat = $connexion->prepare($sql);
    $pdoStat->bindValue(':username',$pseudo );
    $result=$pdoStat->execute();
    // header("location: index.php");
    return $connexion->lastInsertId();
    var_dump($connexion->lastInsertId()); 
  }
  Catch (PDOException $e) {
      echo 'DB ERROR: '.$e->getMessage();
      die;
  } 
}

/////////////////////////////////////////////////////////////////////////////////////////

function getUserId($username){
  global $connexion;
  try {
    $sqlSingleUser ="SELECT id FROM users WHERE username = :username "; 
    $pdoStat = $connexion->prepare($sqlSingleUser);
    $pdoStat->bindValue(':username',$username , PDO::PARAM_STR ); 
    $pdoStat->execute();
     $userId = $pdoStat->fetch();
    
     return  $userId;
 
 }
 catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
 }
}

 ///////////////////////////////////////////////////////////////////////////////////

function getUsersList(){
  $ret = [];
  $user = getUsers();
  foreach($user as $id => $data){
    $ret[] = [
      "id" => $id,
      "pseudo" => $data['pseudo']
    ];
  }
  return $ret;
  }

  //******************  SET COMMENTS   ******************************************** */

function setComment( $content,$date, $post_id , $publisher){

 global $connexion;
 try {

   $sqlComments = "INSERT INTO comments (content,theDate,post_id,publisher) VALUES (:content,:theDate,:post_id,:publisher)";
   $pdoStat = $connexion->prepare($sqlComments);
   $pdoStat->bindValue(':content',$content , PDO::PARAM_STR );
   $pdoStat->bindValue(':theDate',$date , PDO::PARAM_STR );
   $pdoStat->bindValue(':post_id', $post_id , PDO::PARAM_INT );
   $pdoStat->bindValue(':publisher',$publisher , PDO::PARAM_STR );
   $result=$pdoStat->execute();
   return $connexion->lastInsertId();
 }
 Catch (PDOException $e) {
     echo 'DB ERROR: '.$e->getMessage();
     die;
 } 
}

//////////////////////// getComments ////////////////////////////////////////////////////

function getComments(){
 
global $connexion;
try {
  $sqlComments ="SELECT * FROM comments   "; 
  $pdoStat = $connexion->prepare($sqlComments); 
  //$pdoStat->bindValue(':post_id', $post_id , PDO::PARAM_INT );
  $pdoStat->execute();
   $commentsList = $pdoStat->fetchAll();
   return  $commentsList;
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  echo 'no comments in database';
}
}

/////////////////////////////////////////////////////////////////////////////////////////



  
?>








