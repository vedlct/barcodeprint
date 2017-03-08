<?php
session_start();
include ('connection.php');
extract($_GET);
extract($_POST);
$sql="DELETE FROM `barcode` WHERE `id`=$id";
$result=mysqli_query($con,$sql);
?>