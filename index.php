<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Главная</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/index.css">

</head>

<body>
  <?php include "parts/header.php" ?>

  <div class="tabs__content">
    <div class="tab is-active" block-content-name="profile_page">

      Профили
      <!-- TODO доделать раздел  с профилями, добавить создание новых профилей -->

    </div>
    <div class="tab" block-content-name="lamp-page">
      Лампочки
      <!-- TODO доделать раздел  с лампочкой -->
    </div>

    <div class="tab" block-content-name="history_page">
      История проходов
      <!-- TODO Выводить историю проходов по замку -->
    </div>
  </div>


  <script src="js/navbar.js"></script>

</body>

</html>
