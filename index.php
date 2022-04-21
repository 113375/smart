<!DOCTYPE HTML>
<html>
<?php include "dataBase.php";?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Главная</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/lamp.css">

</head>

<body>

  <?php include "parts/header.php" ?>
  <div class="container">

    <div class="tabs__content">
      <div class="tab is-active" block-content-name="profile_page">

      <?php include "parts/moduls.php" ?>

      </div>
      <div class="tab " block-content-name="lamp-page">
        <?php include "parts/lamp.php" ?>
      </div>  

      <div class="tab" block-content-name="history_page">
              <?php include "parts/hystory_block.php" ?>
      </div>
    </div>
  </div>


  <script src="js/navbar.js"></script>
  

</body>

</html>
