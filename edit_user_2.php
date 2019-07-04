<?php
    $id = $_GET['id'];


    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status   = 'A';

    include_once 'MySQL.class.php';
   
    $sql = "UPDATE finalproject set name='$name', email='$email', username='$username', password='$password', status='$status' where id = $id;";

    if (! mysqli_query($con, $sql)){
        $msg = 'not updated';
    } else {
        $msg =  "updated";
    }
    
    header("Location: add_user.php?msg=$msg");