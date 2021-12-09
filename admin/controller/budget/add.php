<?php 
require_once "../../includes/Budget.php";

if(isset($_POST['submit'])){
    $item= $_POST['item'];
    $quantity= $_POST['quantity'];
    $price= $_POST['price'];
}
$buget=new Budget();
$buget->create($item,$quantity, $price);
header('Location:../../../index.php');

?>