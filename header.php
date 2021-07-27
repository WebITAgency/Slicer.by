<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slicer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="container-fluid d-flex justify-content-center align-items-center header">
    <div class="row w-100 d-flex justify-content-between align-items-center">
      <div class="col p-0 header__phonenumber d-lg-none">
        <i class="bi bi-telephone"></i>
        <a href="<?php echo 'tel:' . get_theme_mod('slicer_links_phone_fact') ?>">
         <?php echo get_theme_mod('slicer_links_phone')?>
         </a>
      </div>
      <div class="p-0 header__desktop-menu align-items-center col d-none d-lg-flex">

        <a class="header__homebutton" href="<?php echo get_home_url() ?>"> <i class="bi bi-house"></i> </a>
        <?php wp_nav_menu(array(
            'theme_location'=> 'header-menu',
            'container'=>'',
            'items_wrap' => '<ul class="header__desktop-links list-unstyled d-flex align-items-center p-0 m-0">%3$s</ul>',
        )); ?>
      </div>
      <div class="col d-flex justify-content-end align-items-center p-0">
        <form class="d-none d-lg-flex header__search-form">
          <input class="header__search-field" placeholder="Поиск" type="search" name="" id="">
          <button class="header__search-submit" type="submit"> <i class="bi bi-search"></i> </button>
        </form>
        <div class="header__menu d-lg-none">
          <i class="header__menu_icon bi bi-list"></i>
          <div class="header__menu-mobile header__menu-mobile--inactive container-fluid">
            <ul class="d-flex w-100 flex-column list-unstyled align-items-center justify-content-center container">
              <li><a href="#"> Контакты </a></li>
              <li><a href="#"> Каталог </a></li>
              <li><a href="#"> ВАЛВИТ </a></li>
              <form class="mt-4 header__search-form">
                <input class="header__search-field" placeholder="Поиск" type="search" name="" id="">
                <button class="header__search-submit" type="submit"> <i class="bi bi-search"></i> </button>
              </form>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </header>