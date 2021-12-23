<?php require_once 'admin/init.php';
      
$Cart=new Cart();
 
$quentity_data=json_decode(file_get_contents('php://input'));
if(isset($quentity_data)){
    foreach($quentity_data as $key=> $value){
            $result_cart_item_price=$Cart->findbyproductid($key);
            $row=$result_cart_item_price->fetch_object();
            $cart_item_subtotal=$value*$row->cart_item_price;
            $Cart->update($key,$value,$cart_item_subtotal);

     //  echo $updatedqty;








       // echo $key .'<br>'.$value;
    }
}

$data=array();
$result=$Cart->get_all();
while($row=$result->fetch_assoc()){
$data[]=$row;
}

header("Location:cart.php");
?>