<?php 
 require_once "init.php";
  
$user=new User();
echo $_GET['id'];
$user->delete($_GET['id']);
header('Location:index.php');


?>