<?php 
 require_once "init.php";
  
$Comments=new Comments();
echo $_GET['id'];
$Comments->delete($_GET['id']);
header('Location:post_commment.php');


?>