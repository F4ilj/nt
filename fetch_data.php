<?php

//fetch_data.php

include('database_connection.php');


if(isset($_POST["action"]))
{
	$query = "SELECT * FROM components WHERE product_status = '1'";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND amount BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["kind"]))
	{
		$kind_filter = implode("','", $_POST["kind"]);
		$query .= "
		 AND kind IN('".$kind_filter."')
		";
	}
	if(isset($_POST["typething"]))
	{
		$typething_filter = implode("','", $_POST["typething"]);
		$query .= "
		 AND typething IN('".$typething_filter."')
		";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "
		 AND storage IN('".$storage_filter."')
		";
	}

	

	$statement = $connectnew->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0) {
		?>	
			<table id="table">
			<tr>
			<th class="reph">ID</th>
			<th class="reph">Название</th>	
			<th class="reph">Количество</th>
			<th class="reph">Тип</td>
			<th class="reph">Место Хранения</th>
			<th class="reph">Действия</th>

			<a href="component.php?id=<?=$id;?>"></a>
			</tr>
			<?php
			foreach($result as $row) {
	
				
					
				$output .= '
				<tr class="uy">
				<td class="rep">'. $row['id'] .'</td>
				<td class="rep"><a href="component.php?id='.$row['id'].'">'. $row['name'] .'</a></td>
				<td class="rep">'. $row['amount'] .'</td>
				<td class="rep">'. $row['kind'] .'</td>
				<td class="rep">'. $row['storage'] .'</td>
				<td class="rep"><a href="comp_upd.php?id='.$row['id'].'"> <img class="ind_svg" src="./uploads/svg/mdi_pencil.svg" alt=""> </a>
				<a href="act/del.php?id='.$row['id'].'"> <img class="ind_svg" src="./uploads/svg/mdi_delete.svg" alt=""> </a></td>

				</tr>
				
				'; 
	
				
			}
			?>
			<?php	
	
		} else {
			$output = '<h3>Не найдено</h3>';
		}
		echo $output;
	};

?>

