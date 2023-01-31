<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage MinWater
 * @since MinWater 1.0
 */

get_header(); ?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">

	<title>Минводы</title>
	<meta name="description" content="Минводы">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.cdnfonts.com/css/geometria?styles=17343" rel="stylesheet">
   
    


</head>

<body>


  <div class="container"><br>
		<div class="row">
      <div class="col-lg-4">
				<div class="textSlider"  alt="Slider Text"><a>Оптовые поставки минеральной воды <br> и безалкогольных напитков</a></div>
			</div>
      <div class="col-lg-8">
				<img class="image" src="/minwater/wp-content/themes/minwatertheme/images/tarhun.png" id="image" alt="Image Example">
        <img class="imageMob" src="/minwater/wp-content/themes/minwatertheme/images/tarhunMob.png" id="imageMob" alt="Image Example">
			</div>
		</div>
    <div class="row">
      <div class="col-lg-12">
        <div class="progress">
          <div class="progress_line_border">
              <div class="progress_line" id="progress_bar">
              </div>
          </div>
        </div>
      </div>
    </div>
	</div>



</body>

</html>



