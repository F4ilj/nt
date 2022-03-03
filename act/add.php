<?php require_once 'connect.php';
session_start();



if(isset($_POST['go'])) {
$name = $_POST['name'];
$text = $_POST['text'];
$kind = $_POST['kind'];
$typething = $_POST['typething'];
$amount = $_POST['amount'];
$storage = $_POST['storage'];
$product_quantity = 10;
$product_status = 1;


$path = 'uploads/components/' . time() . $_FILES['imagec']['name'];
move_uploaded_file($_FILES['imagec']['tmp_name'], '../' . $path);


$sql = "INSERT INTO `components` (`id`, `name`, `text`, `kind`, `typething` , `amount`, `storage`, `image`, `product_quantity`, `product_status`)
VALUES (NULL, '$name', '$text', '$kind', '$typething', '$amount', '$storage', '$path', '$product_quantity', '$product_status')";

mysqli_query($connect, $sql);

header('location: ../index.php');
}; 

/* if(isset($_POST['godiv'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $kind = $_POST['kind'];
    $amount = $_POST['amount'];
    $storage = $_POST['storage'];
    $product_quantity = 10;
    $product_status = 1;
    
    
    $path = 'uploads/components/' . time() . $_FILES['imagec']['name'];
    move_uploaded_file($_FILES['imagec']['tmp_name'], '../' . $path);
    
    
    $sql = "INSERT INTO `device` (`id`, `name`, `text`, `kind`, `amount`, `storage`, `image`, `product_quantity`, `product_status`)
    VALUES (NULL, '$name', '$text', '$kind', '$amount', '$storage', '$path', '$product_quantity', '$product_status')";
    
    mysqli_query($connect, $sql);
    
    header('location: ../index.php');
    }; 


?>







