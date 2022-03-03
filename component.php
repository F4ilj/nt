<?php require_once 'act/connect.php';
error_reporting(E_ERROR); 

$comp_id = $_GET['id'];
$sql = "SELECT * FROM `components` WHERE id = $comp_id";
$comp = mysqli_query($connect, $sql);
$comp = mysqli_fetch_assoc($comp);
?>

<head>
    <title><?=$comp['name']?></title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['user'] == ''):
    ?>


    <?php else: ?>

    
    <?php endif;?>

    <?php include "./header.php"; ?>

    <div class="container">


    <h2>#<?=$comp['id']?> <?=$comp['name']?></h2><br>
    <p><?=$comp['text']?></p>  

    </div> 

<script src="./js/script.js"></script>
</body>
</html>