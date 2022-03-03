<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>


<head>
    <title>Авторизация и регистрация</title>
</head>
<body>
<?php include "header.php" ?>

    <div class="container">

    <!-- Профиль -->

    <div class="wrapper">
  <div class="container_card">
    <img src="<?= $_SESSION['user']['avatar'] ?>" alt="" class="profile-img">
    
    <div class="content_card">
      <div class="sub-content">
        <h1><?= $_SESSION['user']['full_name'] ?></h1>
        <span>@Failj</span>
        <p></p>
        <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
        <a href=""></a>
      </div>
      <div class="data_card">
        <div class="inner-data">
          <span><i class="fa fa-users" aria-hidden="true"></i></span>
          <p></p>
        </div>
        <div class="inner-data">
          <span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
          <p></p>
        </div>
        <div class="inner-data">
          <span><i class="fa fa-user-plus" aria-hidden="true"></i></span>
          <p></p>
        </div>
      </div>
      <a class="btn" href="act/logout.php" class="logout">Выход</a>
    </div>
  </div>
</div>



</div>

</body>
</html>