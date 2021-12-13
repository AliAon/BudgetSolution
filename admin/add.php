<?php 
require_once "init.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $item= $_POST['item'];
    $quantity= $_POST['quantity'];
    $price= $_POST['price'];

if(empty($id)){
    $buget=new Budget();
    $buget->create($item,$quantity, $price);
    header('Location:../index.php');
}else{
$buget=new Budget();
$buget->update($item,$quantity,$price,$id);
    header('Location:../index.php');

}

}




?>
