<?php require_once 'admin/init.php';
      
$Cart=new Cart();
 
$quentity_data=json_decode(file_get_contents('php://input'));
if(isset($quentity_data)){
    foreach($quentity_data as $key=> $value){
        $Cart->update($key,$value);
       // echo $key .'<br>'.$value;
    }
}

$data=array();
$result=$Cart->get_all();
while($row=$result->fetch_assoc()){
$data[]=$row;
}
var_dump($data);

?>