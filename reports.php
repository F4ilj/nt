<?php 

//index.php

include('database_connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Тест фильтры</title>

    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel = "stylesheet">


    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
<?php
    session_start();
    if($_SESSION['user'] == ''):
    ?>

    
<!-- Проверка на авторизацию -->


<?php include "auth.php"; ?>

<?php else: ?>

    <?php include "header.php" ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Тест фильтры</h2>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Количество</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="1000" />
                    <p id="price_show">1 - 1000</p>
                    <div id="price_range"></div>
                </div>				
                <div class="list-group">
					<h3>Тип</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
					<?php

                    $query = "SELECT DISTINCT(kind) FROM components WHERE product_status = '1' ORDER BY id DESC";
                    $statement = $connectnew->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector kind" value="<?php echo $row['kind']; ?>"  > <?php echo $row['kind']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>
                
                
				<div class="list-group">
				<!--	<h3>RAM</h3> -->
                    
                    <?php
                    /*
                    $query = "SELECT DISTINCT(product_ram) FROM product WHERE product_status = '1' ORDER BY product_ram DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram" value="<?php echo $row['product_ram']; ?>" > <?php echo $row['product_ram']; ?> GB</label>
                    </div>
                    <?php    
                    }
                    */
                    ?>
                    
                </div>


				<div class="list-group">
					<h3>Место хранения</h3>
					<?php
                    $query = "SELECT DISTINCT(storage) FROM components WHERE product_status = '1' ORDER BY storage DESC";
                    $statement = $connectnew->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage" value="<?php echo $row['storage']; ?>"  > <?php echo $row['storage']; ?></label>
                    </div>
                    <?php
                    }
                    ?>	
                </div>
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>

    <script>
    $(document).ready(function(){

filter_data();

function filter_data()
{
    $('.filter_data').html('<div id="loading" style="" ></div>');
    var action = 'fetch_data';
    var minimum_price = $('#hidden_minimum_price').val();
    var maximum_price = $('#hidden_maximum_price').val();
    var kind = get_filter('kind');
    var ram = get_filter('ram');
    var storage = get_filter('storage');
    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, kind:kind, ram:ram, storage:storage},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});

$('#price_range').slider({
    range:true,
    min:1,
    max:1000,
    values:[1, 1000],
    step:1,
    stop:function(event, ui)
    {
        $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
        $('#hidden_minimum_price').val(ui.values[0]);
        $('#hidden_maximum_price').val(ui.values[1]);
        filter_data();
    }
});

});

    </script>    


<?php endif;?>


</body>

</html>
