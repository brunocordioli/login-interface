<!--
 Projected and made by Bruno Cordioli Machado
 Please access my website "brunocordioli.tk" to know more about me!
 --> 

<?php
$id = $_GET['id'];
include_once 'MySQL.class.php';

$query = "UPDATE `finalproject` SET status= 'I' WHERE `id` = $id";

if (! mysqli_query($con, $query)){
    $msg = 'not deleted';
} else {
    $msg =  "deleted";
}
header("Location: list_user.php?msg=$msg");

