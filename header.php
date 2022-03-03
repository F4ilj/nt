<html lang="ru">
<header>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/style-card.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>



		<div class="container">

        <div class="wrapper_h">  
            
            <div class="wrp_is">
        
		<div class="icon">
        <a href="index.php"><img src="uploads/logo/logo.png" alt=""></a>
		</div>

        <div class="srch">

            <form class="search" method="get" action="search.php">
            <input type="search" name="search" placeholder="Поиск">

            </form>


        </div>
        <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
        <div></div>

            </div>

        


            <div class="dropdown"> 
            <button onclick="drop()" class="prf">Действия</button>
            <div id="myDropdown" class="dropdown-content">
            <p><?=$_SESSION['user']['full_name']?></p><hr>
            <a href="profile.php?id=<?=$user['login']?>">Кабинет</a>
            <a class="" href="component_add.php">Создать компонент</a>
            <a class="" href="act/export.php">Создать отчёт</a>
            <a class="ext" href="act/logout.php">Выход</a>

        </div>

        </div>  
		
	</div>
</header>