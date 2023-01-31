<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MinWater
 * @since MinWater 1.0
 */

?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>Минводы</title>
	<meta name="description" content="Минводы">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="icon" href="/minwater/wp-content/themes/minwatertheme/images/favicon.png">
	<meta property="og:image" content="/minwater/wp-content/themes/minwatertheme/images/preview.jpg">

	<link rel="stylesheet" href="/minwater/wp-content/themes/minwatertheme/libs/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="/minwater/wp-content/themes/minwatertheme/libs/bootstrap/css/bootstrap-grid.min.css">

	<link rel="stylesheet" href="/minwater/wp-content/themes/minwatertheme/css/main.css">
	<link rel="stylesheet" href="/minwater/wp-content/themes/minwatertheme/css/media.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body>

	<div class="container"><br>
		<div class="row">
      <div class="col-lg-1">
				<div class="textLogo"  alt="Logo Text"><a>Эльбрусская Прохлада</a></div>
			</div>
			<ul id="navbar">
        <li><a href="#">Главная</a></li>
        <li><a href="#">Каталог</a></li>
        <li><a href="#">Как заказать</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
      </ul>
      <div class="col-lg-2">
				<div class="phoneNumber"  alt="Phone Number"><a>+7 928 076 14 98</a></div>
			</div>
      <div class="col-lg-1">
				<div class="orderButton"  alt="Order Button"><a>Заказать обратный звонок</a></div>
			</div>
		</div>
	</div>

  <div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>
    <ul class="menu__box">
      <li><a href="#">Главная</a></li>
        <li><a href="#">Каталог</a></li>
        <li><a href="#">Как заказать</a></li>
        <li><a href="#">Отзывы</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>
  </div>


	<script src="/minwater/wp-content/themes/minwatertheme/libs/jquery/jquery-3.6.0.min.js"></script>

	<script src="/minwater/wp-content/themes/minwatertheme/js/common.js"></script>

</body>

</html>
