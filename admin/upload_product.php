<?php 
require_once "init.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
     $product_title=$_POST['product_title'];
    $create_time= $_POST['create_time'];
    $product_category_id= $_POST['product_category_id'];
    $product_short_description= $_POST['product_short_description'];
    $product_description= $_POST['product_description'];

    $uploaddir = admin_path.DS.'images'.DS;
    $imagepath = 'images'.DS;

    // $uploadfile = $uploaddir . basename($_FILES['user_image']['name']);    // var_dump($_POST);
    $uploadfile = $imagepath . basename($_FILES['product_image']['name']);    // var_dump($_POST);

    //   echo $uploadfile;
    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
       

    if(empty($id)){
        $Product=new Product();
        $Product->create($product_title,$uploadfile,$create_time,$product_short_description,$product_description,$product_category_id);
        header('Location:Products.php');
    }else{
    $Product=new Product();
    $Product->update($product_title,$uploadfile,$create_time,$product_short_description,$product_description,$product_category_id,$id);
    header('Location:Products.php');
    
    }
//var_dump ($_POST);

}




?>
