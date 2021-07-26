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
 * @package slicer
 */

get_header();
?>

<section style="<?php echo 'background: url(' . get_theme_mod('slicer_view_background') . ');' ?>" class="
        title
        container-fluid
        d-flex
        flex-column
        justify-content-center
        align-items-center
      ">
  <div class="title__gradient"></div>

  <img src="<?php echo get_theme_mod('slicer_identic_logo') ?>" class="logo" />
  <a href="<?php echo 'tel:' . get_theme_mod('slicer_links_phone_fact') ?>" class="phonenumber phonenumber_title">
    <i class="phonenumber__icon bi bi-telephone"></i>
    <span class="phonenumber__text"> <?php echo get_theme_mod('slicer_links_phone') ?></span>
  </a>
  <a target="_blank" rel="noopener noreferrer"  href="<?php echo get_theme_mod('slicer_links_inst_back') ?>" class="insta">
    <i class="insta__icon bi bi-instagram"></i>
    <span class="insta__text"> <?php echo get_theme_mod('slicer_links_inst') ?> </span>
  </a>
</section>

<section class="slider">
  <div class="row justify-content-center m-0">
    <div class="col-10 col-lg-9 slider__container">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <?php
            $posts = get_posts(
              array(
                'category_name' => 'slides',
              )
            );
            foreach ($posts as $post) {
            ?>
              <li class="slider__item glide__slide">
                <div class="slider__item-content" data-href="0" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                  <span><?php the_title(); ?></span>
                </div>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <div class="slider__controls" data-glide-el="controls">
          <button class="slider__side-btn" data-glide-dir="<"> <i class="bi bi-arrow-left"></i> </button>
          <a class="slider__topic-btn"> Подробнее </a>
          <button class="slider__side-btn" data-glide-dir=">"> <i class="bi bi-arrow-right"></i> </button>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require('cat-menu.php') ?>

<section class="container">
  <div class="row d-flex justify-content-center">
    <h2 class="text-center col-12 section-title">
      Хит продаж
    </h2>
  </div>
  <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
    <?php
    $posts = get_posts(array(
      'category_name' => 'hits',
      'numberposts' => 3,
    ));
    foreach ($posts as $post) {
    ?>
      <div class="product-item col-10 col-md-5 col-xxl-3">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h2><?php the_title(); ?></h2>
        <div class="line"></div>
        <span class="product-item__price"><?php the_excerpt(); ?></span> 
        <a href="#" class="product-item__btn">Ознакомиться</a>
        <div class="triangle"><span>ХИТ!</span></div>
      </div>
    <?php
    }
    ?>
  </div>

</section>

<section class="container">
  <div class="row d-flex justify-content-center">
    <h2 class="text-center col-12 section-title">
      Все товары
    </h2>
  </div>
  <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
        <?php
    $posts = get_posts(array(
      'category_name' => 'product-index',
      'numberposts' => 3,
    ));
    foreach ($posts as $post) {
    ?>
      <div class="product-item col-10 col-md-5 col-xxl-3">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        <h2><?php the_title(); ?></h2>
        <div class="line"></div>
        <span class="product-item__price"><?php the_excerpt(); ?></span> 
        <a href="#" class="product-item__btn">Ознакомиться</a>
      </div>
    <?php
    }
    ?>

  </div>

</section>

<section class="container">
  <div class="row d-flex justify-content-center">
    <h2 class="text-center col-12 section-title">
      Новости
    </h2>
  </div>
  <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
        <?php 
          $posts = get_posts(array(
            'category_name' => 'news',
            'numberposts' => 3,
          ));
          foreach ($posts as $post) {
            ?>
      <div class="product-item news-card col-10 col-md-5 col-xxl-3">
      <a class="news-card__thumb" href="<?php the_permalink() ?>" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></a>
      <h2><?php the_title() ?></h2>
      <div class="line"></div>
      <span class="news-card__text">
        <?php the_excerpt() ?>
      </span>
      <a href="<?php the_permalink() ?>" class="product-item__btn">Читать далее</a>
    </div>
            <?php
          }
        ?>

  </div>
</section>

<section class="d-flex flex-column container justify-content-start">
  <div class="row d-flex justify-content-center">
    <h2 class="text-center col-12 section-title">
      Контакты
    </h2>
  </div>
  <h3 class="contacts__title">
    ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ВАЛВИТ"
  </h3>
  <span class="contacts__subtitle">
    Наш адрес:
  </span>
  <span class="contacts__text">
    224023, Республика Беларусь, г. Брест, ул. Васнецова 50, офис 8
  </span>
  <span class="contacts__subtitle">
    Банк:
  </span>
  <span class="contacts__text">
    р/с BY45OLMP30123000590040000933 в ОАО "Белгазпромбанк" Брестская областная дирекция"
    г. Брест, ул. Советской Конституции, 15, код банка OLMPBY2X
  </span>
  <span class="contacts__subtitle">
    Контакты:
  </span>
  <span class="contacts__text">
    <span>тел./факс: +375 162 35 64 45</span>
    <span>моб.тел.: +375 29 340-05-37</span>
    <span>е-mail: valvitinfo@tut.by</span>
    <span>сайт: www.valvit.by, www.slicer.by</span>

  </span>
  <div class="container-fluid">
    <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.1320393878077!2d27.548209715974792!3d53.89385704125977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf73f6e678a7%3A0x3a381d5362a18cb7!2z0JvQtdC90LjQvdCz0YDQsNC00YHQutCw0Y8gMQ!5e0!3m2!1sru!2sby!4v1626270655913!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
</section>

<?php
get_footer();
