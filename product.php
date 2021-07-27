<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package slicer
 * Template name: Product Page
 * Template Post Type: post, page, product
 */

get_header();
?>

<?php 
  while(have_posts()){
    the_post();

    ?>
      <section class="product container">
    <div class="row mt-5 d-flex justify-content-center justify-content-md-start">
      <div class="col-10 col-md-4 d-flex justify-content-center justify-content-md-start">
        <img class="product__thumb" src="<?php the_post_thumbnail_url() ?>" alt="">
      </div>
      <div class="col-11 mt-3 mt-md-0 col-md-7 d-flex flex-column">
        <h1 class="product__title"> <?php the_title(); ?> </h1>
        <h2 class="product__price"> <?php the_excerpt() ?> </h2>
        <a href="#" style="margin-top: unset" class="product__button product-item__btn">Заказать</a>
      </div>
    </div>
    <div class="row mt-2 mt-md-5 d-flex justify-content-center justify-content-md-start">
      <div class="col-11 col-md-7 product__description">
        <p class="product__description">
          <?php the_content(); ?>
        </p>
      </div>
    </div>
  </section>
    <?php
  }
?>

<div class="recommendations">

<h2>Мы предлагаем</h2>

<div class="products">
  <div class="products__container container d-flex justify-content-center">
	<div class="row d-flex justify-content-around w-100">
    <?php 
      $posts = get_posts(array(
        'category_name' => 'product-index',
        'numberposts' => 3,
      ));
      foreach ($posts as $post) {
        ?>
        <div class="product-item col-10 col-xxl-3">
		<img src="<?php the_post_thumbnail_url() ?>" alt="">
		<h2><?php the_title(); ?></h2>
		<div class="line"></div>
		<span class="product-item__price"><?php the_excerpt(); ?></span>
		<a href="<?php the_permalink() ?>" class="product-item__btn">Ознакомиться</a>
	  </div>
        <?php 
      }
    ?>
	</div>
  </div>
</div>

<a href="#" class="recommendation__link">наверх</a>

</div>

<?php
get_footer();
