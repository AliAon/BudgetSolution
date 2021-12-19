<?php 
require_once "init.php";

if(isset($_POST['submit'])){
    $name    = $_POST['con_name'];
    $email   = $_POST['con_email'];
    $subject = $_POST['con_subject'];
    $message = $_POST['con_message'];
    $headers = "From: aonmuham@aonmuhammad.com";
 
    //mail
    $reached=mail('aon094944@gmail.com',$subject,$message,$headers);
    if($reached){
        echo 'sent';
    }else{
        'not sent';
    }
 
 }
?>
