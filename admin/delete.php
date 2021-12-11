<?php 
 require_once "init.php";
  
$buget=new Budget();
$buget->delete($_GET['id']);
header('Location:../index.php');


?>