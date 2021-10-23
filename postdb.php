<?php
include "server.php";
if (isset($_POST['submit'])]){

    $uname = $_POST['uname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['phone'];

    $post_insert = "INSERT INTO admin(uname,password,phone) VALUES('$uname','$password','$phone')";
    var_dump($post_insert);
    die();
//    if (!$Insert_PostDb){
//
//        echo 'Submitted';
//
//    }else{
//        echo'Error';
//    }

}