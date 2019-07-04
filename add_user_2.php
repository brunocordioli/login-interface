<?php
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status   = 'A';

    $link = mysqli_connect("localhost", "root", "gtt123", "curso-db");
    
    $sql = "INSERT INTO finalproject (name, email, username, password, status) VALUES ('$name','$email','$username','$password','$status')";


    if (! mysqli_query($link, $sql)){
        echo "not inserted";
        $msg = 'not inserted';
    } else {
        echo "inserted";
        $msg =  "inserted";
    }
    header("Location: add_user.php?msg=$msg");