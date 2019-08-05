<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php
    include("model/User.class.php");
    
    $id       = $_GET['id'];
    $name     = $_GET['name'];
    
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
    
    $msg = $user->edit_user($id);
   
    
    
    header("Location: index.php");