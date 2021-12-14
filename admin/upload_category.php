<?php 
require_once "init.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
     $name=$_POST['name'];
   

    

    // $Post=new Post();
    //     $Post->create($post_title,$create_time,$category_id,$post_content);
    //     header('Location:Posts.php');
    // // $uploaddir = admin_path.DS.'images'.DS;
    // $imagepath = 'images'.DS;

    // // $uploadfile = $uploaddir . basename($_FILES['user_image']['name']);    // var_dump($_POST);
    // $uploadfile = $imagepath . basename($_FILES['user_image']['name']);    // var_dump($_POST);

    // //   echo $uploadfile;
    // if (move_uploaded_file($_FILES['user_image']['tmp_name'], $uploadfile)) {
    //     echo "File is valid, and was successfully uploaded.\n";
    // } else {
    //     echo "Possible file upload attack!\n";
    // }
       

    if(empty($id)){
        $Categories=new Categories();
        $Categories->create($name);
        header('Location:post_categoies.php');
    }else{
    $Categories=new Categories();
    $Categories->update($name,$id);
    header('Location:post_categoies.php');

    
    }
//var_dump ($_POST);

}




?>
