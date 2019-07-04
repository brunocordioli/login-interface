<?php

$username = $_GET['username'];
$password = $_GET['password'];

    include_once 'MySQL.class.php';
    $sql = "SELECT username, password, status from finalproject";
    $result = $con-> query($sql);
    echo 'ewpowepovwe';
    if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            $row3 = "status";
            $row4 = "username";
            $row5 = "password";
            if ($row[$row4] == $username && $row[$row5] == $password && $row[$row3] == "A"){
                header("Location: nav.php");
                $redirect = false;
                break;
            } else {
                $redirect = true;
                $msg = "User not found";
            }
        }
    }
    if ($redirect){
        header("Location: index.php?msg=$msg");
    }
    $con-> close();
?>