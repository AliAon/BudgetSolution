<?php
require_once "init.php";
if(isset($_POST['submit'])){
     $user_email=$_POST['user_email'];
    $user_pass= $_POST['user_pass'];
    $User=new User();
    $User->login($user_email,$user_pass);
}


?>