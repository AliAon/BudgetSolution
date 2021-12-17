<?php 
require_once "init.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
     $post_title=$_POST['post_title'];
    $create_time= $_POST['create_time'];
    $category_id= $_POST['category_id'];
    $post_content= $_POST['post_content'];
    $uploaddir = admin_path.DS.'images'.DS;
    $imagepath = 'images'.DS;

    // $uploadfile = $uploaddir . basename($_FILES['user_image']['name']);    // var_dump($_POST);
    $uploadfile = $imagepath . basename($_FILES['post_image']['name']);    // var_dump($_POST);

    //   echo $uploadfile;
    if (move_uploaded_file($_FILES['post_image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
       

    if(empty($id)){
        $Post=new Post();
        $Post->create($post_title,$create_time,$category_id,$post_content,$uploadfile);
        header('Location:Posts.php');
    }else{
    $Post=new Post();
    $Post->update($post_title,$create_time,$category_id,$post_content,$id,$uploadfile);
    header('Location:Posts.php');

    
    }
//var_dump ($_POST);

}




?>
