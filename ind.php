<form method="post">

<select class="ksel_add" name="kind">
<option class="opt_k"></option>
<option value="Button">Кнопка</option>
<option value="Chip">Микросхема</option>
<option value="Controller">Контроллер</option>
<option value="Sensor">Датчик</option>
</select>

<input type="submit" name="submit">

</form>


<?php
    if (isset($_POST['submit'])) {
        $uy = $_POST['kind'];
    }
?>