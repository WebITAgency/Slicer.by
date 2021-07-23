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
  <a href="#" class="phonenumber phonenumber_title">
    <i class="phonenumber__icon bi bi-telephone"></i>
    <span class="phonenumber__text"> <?php echo get_theme_mod('slicer_links_phone') ?></span>
  </a>
  <a href="#" class="insta">
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

<div class="catalog-container">

  <div class="catalog-container__btn-container"><a href="#" class="btn-container__button">Все товары</a></div>

  <ul class="catalog-container__catalog">
    <li class="catalog__item">
      <a href="<?php echo get_home_url() . '/products?cat=slicers' ?>" class="item__content">
        <img src="img/Meat slicer-Slice-Kitchen-Cook-Chef.svg" alt="">
        <span>Слайсеры</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Универсальные</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для сыра</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Ножи слайсерные</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Vector.svg" alt="">
        <span>Пилы</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Ленточные</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Дисковые</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Полотна для пил</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Дисковые ножи</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Vector-1.svg" alt="">
        <span>Ножи Eicker</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">MANAGER</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">PROFI</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">PROFI E7</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">С защитной ручкой</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Кованые ножи</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Кухонные ножи</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Секачи</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Аксессуары</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Group.svg" alt="">
        <span>Мусаты</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Поварские</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для мяса</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для птицы</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для рыбы</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для сыра</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Для овощей</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Секачи</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Хранение ножей</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Group-1.svg" alt="">
        <span>Ножи разделочные</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">EICKER</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Другие</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Group-2.svg" alt="">
        <span>Гигиена</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Гигиена ножей</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Vector-2.svg" alt="">
        <span>Защитная одежда</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">DICK</a>
        </li>
      </ul>
    </li>
    <li class="catalog__item">
      <a href="#" class="item__content">
        <img src="img/Group-3.svg" alt="">
        <span>Заточка</span>
      </a>

      <ul class="item__sub-menu">
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Фартуки</a>
        </li>
        <li class="sub-menu__item">
          <a href="#" class="sub-menu__link">Перчатки</a>
        </li>
      </ul>
    </li>
  </ul>

  <div class="catalog-container__btn-container"><a href="#" class="btn-container__button categories-btn"><i class="bi bi-arrow-down-short"></i><span>Все категории</span></a>

    <ul class="catalog-container__catalog push-menu">
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-1.svg" alt="">
          <span>Ножи разделочные</span>
        </a>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-2.svg" alt="">
          <span>Гигиена</span>
        </a>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Vector-2.svg" alt="">
          <span>Защитная одежда</span>
        </a>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-3.svg" alt="">
          <span>Заточка</span>
        </a>
      </li>
    </ul>

  </div>


</div>

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
    <div class="product-item col-10 col-md-5 col-xxl-3">
      <img src="img/A812T 1.png" alt="">
      <h2>Слайсер SL-228 EV-5</h2>
      <div class="line"></div>
      <span class="product-item__price">Цена договорная</span>
      <a href="#" class="product-item__btn">Ознакомиться</a>
    </div>

    <div class="product-item col-10 col-md-5 col-xxl-3">
      <img src="img/A812T 1.png" alt="">
      <h2>Слайсер SL-228 EV-5</h2>
      <div class="line"></div>
      <span class="product-item__price">Цена договорная</span>
      <a href="#" class="product-item__btn">Ознакомиться</a>
    </div>


    <div class="product-item col-10 col-md-5 col-xxl-3">
      <img src="img/A812T 1.png" alt="">
      <h2>Слайсер SL-228 EV-5</h2>
      <div class="line"></div>
      <span class="product-item__price">Цена договорная</span>
      <a href="#" class="product-item__btn">Ознакомиться</a>
    </div>

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
      <div class="news-card__thumb" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>
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
   

    <!-- <div class="product-item news-card col-10 col-md-5 col-xxl-3">
      <div class="news-card__thumb" style="background-image: url(img/newspic.png);"></div>
      <h2>Слайсер SL-228 EV-5</h2>
      <div class="line"></div>
      <span class="news-card__text">
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat...
      </span>
      <a href="#" class="product-item__btn">Читать далее</a>
    </div>

    <div class="product-item news-card col-10 col-md-5 col-xxl-3">
      <div class="news-card__thumb" style="background-image: url(img/newspic.png);"></div>
      <h2>Слайсер SL-228 EV-5</h2>
      <div class="line"></div>
      <span class="news-card__text">
        Lorem ipsum dolor sit amet, consectetur
        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
        ut aliquip ex ea commodo consequat...
      </span>
      <a href="#" class="product-item__btn">Читать далее</a>
    </div> -->

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
