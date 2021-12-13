<?php 
require_once "init.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
     $username=$_POST['user_name'];
    $user_email= $_POST['user_email'];
    $user_pass= $_POST['user_pass'];
    // $uploaddir = admin_path.DS.'images'.DS;
    $imagepath = 'images'.DS;

    // $uploadfile = $uploaddir . basename($_FILES['user_image']['name']);    // var_dump($_POST);
    $uploadfile = $imagepath . basename($_FILES['user_image']['name']);    // var_dump($_POST);

    //   echo $uploadfile;
    if (move_uploaded_file($_FILES['user_image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
    // $User=new User();
    // $User->create($username,$user_email,$user_pass,$uploadfile);
    // header('Location:Users.php');

    if(empty($id)){
        $User=new User();
        $User->create($username,$user_email,$user_pass,$uploadfile);
        header('Location:Users.php');
    }else{
    $User=new User();
    $User->update($username,$user_email,$user_pass,$uploadfile,$id);
    header('Location:Users.php');
    
    }


}




?>
