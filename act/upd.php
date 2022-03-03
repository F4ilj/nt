<?php 

require_once 'connect.php';
session_start();
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);



if(isset($_POST['go'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];
    $kind = $_POST['kind'];
    $amount = $_POST['amount'];
    $storage = $_POST['storage'];
    $product_quantity = 10;
    $product_status = 1;


    
    



    $sql = "UPDATE `components` SET `name`='$name',`text`='$text',`kind`='$kind',`amount`='$amount',`storage`='$storage' ,`product_quantity`='10',
    `product_status`='1' WHERE `components`.`id` = '$id';";

    

    $run = mysqli_query($connect, $sql);

    if($run) {
        header('location: ../index.php');
    } else {
        print_r("error");
    }



    



    };




?>