<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package slicer
 * Template name: Paragraph
 * Template Post Type: post, page, product
 */

get_header();
?>

<?php 
	while(have_posts()){
		the_post();
		?>

<div class="info">

<img src="<?php the_post_thumbnail_url(); ?>" alt="">

<h1><?php the_title(); ?></h1>

<p><?php the_content(); ?></p>

<ul class="info__parameters">
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
</ul>

<a href="#" class="info__link">на главную</a>

</div>

		<?
	};
?>

<!-- <div class="info">

<ul class="info__parameters">
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  <li class="parameters__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
</ul>


</div>

<div class="recommendations">

<h2>Мы предлагаем</h2>

<div class="products">
  <div class="products__container container d-flex justify-content-center">
	<div class="row d-flex justify-content-around w-100">
	  <div class="product-item col-10 col-xxl-3">
		<img src="img/A812T 1.png" alt="">
		<h2>Слайсер SL-228 EV-5</h2>
		<div class="line"></div>
		<span class="product-item__price">Цена договорная</span>
		<a href="#" class="product-item__btn">Ознакомиться</a>
	  </div>
	  <div class="product-item col-10 col-xxl-3">
		<img src="img/A812T 1.png" alt="">
		<h2>Слайсер SL-228 EV-5</h2>
		<div class="line"></div>
		<span class="product-item__price">Цена договорная</span>
		<a href="#" class="product-item__btn">Ознакомиться</a>
	  </div>
	  <div class="product-item col-10 col-xxl-3">
		<img src="img/A812T 1.png" alt="">
		<h2>Слайсер SL-228 EV-5</h2>
		<div class="line"></div>
		<span class="product-item__price">Цена договорная</span>
		<a href="#" class="product-item__btn">Ознакомиться</a>
	  </div>
	</div>
  </div>
</div>

<a href="#" class="recommendation__link">наверх</a>

</div>

<?php
};
get_footer();
