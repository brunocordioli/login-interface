
<?php

    include("model/User.class.php");
    include_once('template/nav.php');

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
    $msg = $user->add_user();
    
    header("Location: add_user.php?msg=$msg&username=$User");


