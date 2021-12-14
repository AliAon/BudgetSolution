<?php 
 require_once "init.php";
  
$Post=new Post();
echo $_GET['id'];
$Post->delete($_GET['id']);
header('Location:Posts.php');


?>