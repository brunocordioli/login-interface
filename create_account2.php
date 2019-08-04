<?php


    include("User.class.php");



    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status   = 'A';

    $user = new User();
    
    $user->set_name($name);
    $user->set_email($email);
    $user->set_username($username);
    $user->set_password($password);
    $user->set_status($status);
    
    $msg1 = $user->add_user();
    $msg = "created";
   
    header("Location: index.php?msg=$msg");

