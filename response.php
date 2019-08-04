<?php 
if (!isset($_GET['msg'])){
$_GET['msg'] = "";
} 
$msg = $_GET['msg']; 
echo $msg;
?>  