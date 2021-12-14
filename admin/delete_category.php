<?php 
 require_once "init.php";
  
$Category=new Categories();
echo $_GET['id'];
$Category->delete($_GET['id']);
header('Location:post_categories.php');


?>