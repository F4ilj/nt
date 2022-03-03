
<head>
    <title>Добавить</title>
</head>
<body>

<?php require_once 'act/connect.php'; ?>


<?php
    session_start();
    if($_SESSION['user'] == ''):
    ?>

<?php include "auth.php"; ?>

<?php else: ?>


<?php include "header.php" ?>


<div class="container">


<h2 class="hcomp_add">Создать компонент</h2>

<form action="act/add.php" method="post" enctype="multipart/form-data">

<div class="wrp_add">

<p class="pcomp_add">Название</p>
<input class="nameinp_add" type="text" name="name" required placeholder="">

<p class="pcomp_add">Описание</p>
<textarea class="textinp_add" name="text" placeholder=""></textarea>



<p class="pcomp_add">Количество</p>
<input class="sinp_add" type="number" name="amount" placeholder="">

<p class="pcomp_add">Место</p>
<input required class="sinp_add" name="storage" type="text" list="stor" />
<datalist id="stor">
<?php
$sql = "SELECT DISTINCT(storage) FROM components";
$res = mysqli_query($connect, $sql);
while ( $row = mysqli_fetch_assoc($res) ) {
$storage = $row['storage'];
?>
<option value="<?=$storage?>"><?=$storage?></option>
	<?php 
	}
    ?>
</datalist>




<p class="pcomp_add">Изображение</p>
<input class="img_add" type="file" name="imagec" placeholder="">

<p class="pcomp_add">Выбери тип</p>

<input class="ksel_add" name="kind" type="text" list="kinds" />
<datalist id="kinds">
<?php
$sql = "SELECT DISTINCT(kind) FROM components";
$res = mysqli_query($connect, $sql);
while ( $row = mysqli_fetch_assoc($res) ) {
$kind = $row['kind'];
?>
<option value="<?=$kind?>"><?=$kind?></option>
	<?php 
	}
    ?>
</datalist>








<!-- <option value="Button">Кнопка</option>
<option value="Chip">Микросхема</option>
<option value="Controller">Контроллер</option>
<option value="Sensor">Датчик</option> -->

<input value="<?=$comp['typething']?>" class="ksel_add" name="typething" type="text" list="tp" />
<datalist id="tp">
<?php
$sql = "SELECT DISTINCT(typething) FROM components";
$res = mysqli_query($connect, $sql);
while ( $row = mysqli_fetch_assoc($res) ) {
$typething = $row['typething'];
?>
<option value="<?=$typething?>"><?=$typething?></option>
	<?php 
	}
    ?>
</datalist>


<div><input class="btn_add" type="submit" name="go" value="Создать"></div>

</div>

</div>

<?php endif;?>

<script src="./js/script.js"></script>
</body>
</html>