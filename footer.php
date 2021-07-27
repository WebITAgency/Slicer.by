<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slicer
 */

?>

<footer class="footer">
    <div class="partners">
      <?php
          $posts = get_posts(array(
            'category_name' => 'footer-pics',
            'numberposts' => -1,
          ));
          foreach ($posts as $post) {
            ?>
              <img src="<?php the_post_thumbnail_url() ?>" alt="" class="partners__item">            
            <?php
          }
      ?>
    </div>
  </footer>

  <div class="popup">
    <div class="popup__background"></div>

    <div class="popup__card">
      <div class="card__close"><i class="bi bi-x"></i></div>

      <div class="card__offer">
        <img src="../img/A812T 1.png" alt="">
        <div class="offer__text">
          <h2></h2>
          <span></span>
        </div>
      </div>

      <p style="width: 85%" class="card__description popup__description"></p>

      <div class="card__buttons">
        <a href="#" class="buttons__buy-btn">Подробнее</a>
        <a href="#" class="buttons__more-btn">Заказать</a>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>
