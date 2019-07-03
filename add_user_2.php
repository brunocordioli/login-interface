<?php
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $status   = "A";

    $link = mysqli_connect("localhost", "root", "gtt123", "curso-db");
    
    $sql = "INSERT INTO final-project (status,name,email,username,password) VALUES ('$status','$name','$email','$username','$password')";


    if (! mysqli_query($link, $sql)){
        echo "not inserted";
        $msg = 'not inserted';
    } else {
        echo "inserted";
        $msg =  "inserted";
        $query = "SELECT * from final-project where 'status'='A'";
    }
    header("Location: add_user.php?msg=$msg");