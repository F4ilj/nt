<?php 
error_reporting(E_ERROR);
require_once 'act/connect.php';

session_start();

$comp_id = $_GET['id'];

$sql = "SELECT * FROM components WHERE id = $comp_id";
$comp = mysqli_query($connect, $sql);
$comp = mysqli_fetch_assoc($comp);

?>

<head>
    <title>Изменить</title>
</head>
<body>

<?php include "header.php";

?>

<div class="container">

<form action="act/upd.php" method="post" enctype="multipart/form-data">

<div class="wrp_add">


<input type="hidden" name="id" value="<?=$comp['id']?>">

<p class="pcomp_add">Название</p>
<input class="nameinp_add" type="text" name="name" placeholder="Название" value="<?=$comp['name']?>">

<p class="pcomp_add">Описание</p>
<textarea class="textinp_add" name="text" placeholder="Текст" ><?=$comp['text']?></textarea>



<p class="pcomp_add">Количество</p>
<input class="sinp_add" type="number" name="amount" placeholder="Количество" value="<?=$comp['amount']?>">

<p class="pcomp_add">Место</p>
<input class="sinp_add" type="text" name="storage" placeholder="Место" value="<?=$comp['storage'] ?>">


<p class="pcomp_add">Выбери тип</p>


<input value="<?=$comp['kind']?>" class="ksel_add" name="kind" type="text" list="kinds" />
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

<input value="<?=$comp['typething']?>" class="ksel_add" name="kind" type="text" list="kinds" />
<datalist id="kinds">
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




<select class="ksel_add" name="typething">
<option class="opt_k" selected disabled></option>
<option value="Button">Компонент</option>
<option value="Chip">Оборудование</option>
</select>

<div><input class="btn_add" type="submit" name="go" value="Изменить"></div>

</div>

</div>


<script src="js/script.js"></script>
</body>
</html>