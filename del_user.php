<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', 'gtt123', 'curso-db');

$query = "UPDATE `finalproject` SET status= 'I' WHERE `id` = $id";

if (! mysqli_query($link, $query)){
    $msg = 'not deleted';
} else {
    $msg =  "deleted";
}
header("Location: list_user.php?msg=$msg");