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

<div class="info container ">
    <img src="<?php the_post_thumbnail_url( ); ?>" alt="">
    <h1><?php the_title(); ?></h1>
    <?php the_content() ?>
    <a href="<?php echo get_home_url() ?>" class="info__link">на главную</a>
	</div>
		<?
	};
?>

<?php
};
get_footer();
