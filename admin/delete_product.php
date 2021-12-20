<?php 
 require_once "init.php";
  
$Product=new Product();
$Product->delete($_GET['id']);
header('Location:Products.php');


?>