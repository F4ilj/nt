<?php 

require_once 'connect.php';

$id = $_GET['id'];


$sql = "DELETE FROM `components` WHERE `components`.`id` = '$id'";
mysqli_query($connect, $sql);

header('Location: ../index.php');