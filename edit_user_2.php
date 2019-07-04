<?php
    $id = $_GET['id'];


    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status   = 'A';

    $link = mysqli_connect("localhost", "root", "gtt123", "curso-db");
   
    $sql = "UPDATE finalproject set name='$name', email='$email', username='$username', password='$password', status='$status' where id = $id;";

    if (! mysqli_query($link, $sql)){
        $msg = 'not updated';
    } else {
        $msg =  "updated";
    }
    
    header("Location: add_user.php?msg=$msg");