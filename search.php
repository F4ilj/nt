<?php
require_once 'act/connect.php';

$search_get = $_GET['search'];

$sql = "SELECT * FROM components WHERE `name` LIKE '%$search_get%'";

$res = mysqli_query($connect, $sql);
?>



<body>

<?php include "header.php"; ?>



<div class="container">


<h2>Результаты поиска: <?php echo $_GET['search']; ?></h2><br>

<?php

while ($row = mysqli_fetch_assoc($res)) {
    ?>

    <ul>
    <li><a href="component.php?id=<?=$row['id'];?>"><?=$row['name'];?></a></li>
    
    </ul>

    <?php
}
?>

</div>


<script src="js/script.js"></script>    
</body>
</html>