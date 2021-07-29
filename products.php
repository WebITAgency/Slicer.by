<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package slicer
 * Template Name: Products
 */

get_header();
?>

<?php require('cat-menu.php') ?>


<div class="products">
<div class="products__navigation">
  <!-- <a href="#" class="item">All</a>
  <i class="bi bi-arrow-right arrow"></i>
  <a href="#" class="item">Next item</a>
  <i class="bi bi-arrow-right arrow"></i>
  <a href="" class="item">Next item</a> -->
  <?php echo get_category_parents(
     get_category_by_slug( $_GET['cat'] ),
     false,
     ' <i class="bi bi-arrow-right arrow"></i> '
  ); ?> 
</div>

<div class="row d-flex justify-content-center">
    <h2 class="text-center col-12 section-title">
    <?php 
    echo get_category_by_slug($_GET['cat'])->name;
    ?>
    </h2>
  </div>

<div class="products__container container d-flex justify-content-center">
  <div class="row d-flex justify-content-around w-100">

    <?php 
      $posts = get_posts(array(
        'category_name' => $_GET['cat'],
      )
      );
      foreach ($posts as $post) {
        ?>
          <div class="product-item col-10 col-md-5 col-xxl-3">
      <img src="<?php the_post_thumbnail_url() ?>" alt="">
      <h2><?php the_title(); ?></h2>
      <div class="line"></div>
      <span class="product-item__price"><?php the_excerpt() ?></span>
      <a href="#" class="product-item__btn">Ознакомиться</a>
    </div>
        <?php
      }
    ?>

</div>
</div>

<footer class="footer">
<div class="partners">
  <img src="../img/dick-white 1.png" alt="" class="partners__item">
  <img src="../img/Giesser_Messer_magazin_posudy_posuda_dlya_restoranov_professionalnaya.png" alt="" class="partners__item">
  <img src="../img/mainca 1.png" alt="" class="partners__item">
  <img src="../img/roser-group.png" alt="" class="partners__item">
  <img src="../img/eicker 1.png" alt="" class="partners__item">
</div>
</footer>

<div class="popup">
<div class="popup__background"></div>

<div class="popup__card">
  <div class="card__close"><i class="bi bi-x"></i></div>

  <div class="card__offer">
    <img src="../img/A812T 1.png" alt="">
    <div class="offer__text">
      <h2>Слайсер SL-228 EV-5</h2>
      <span>Цена договорная</span>
    </div>
  </div>

  <ul class="card__description">
    <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
    <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
    <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
    <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
  </ul>

  <div class="card__buttons">
    <a href="#" class="buttons__buy-btn">Подробнее</a>
    <a href="#" class="buttons__more-btn">Заказать</a>
  </div>
</div>
</div>

<?php
get_footer();
