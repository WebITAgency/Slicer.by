<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package feedback
 * Template name: Обратная связь
 */

get_header();
?>

<div class="feedback__title"><h2>Заполните форму и мы с вами свяжемся</h2></div>

    <div class="feedback">
        <form action="" class="form">
            <div class="form__block1">
                <input autofocus type="text" id="form__name" placeholder="Введите имя: ">
                <input type="text" id="form__patronymic" placeholder="Введите отчество: ">
            </div>
            
            <div class="form__block2">
                <input type="text" id="form__phone" placeholder="Введите телефон: ">
                <input type="text" id="form__mail" placeholder="Введите e-mail: ">
            </div>

            <textarea name="" id="form__comments" cols="30" rows="10" placeholder="Комментарии к заказу"></textarea>
            <a class="form__btn">Отправить</a>
        </form>
        <div class="form__success">
            <div class="success__content">
                <i class="bi bi-check"></i>
                <span>Отправлено</span>
            </div>
        </div>
    </div>

    <div class="feedback__title">
        <h2>Или свяжитесь с нами сами</h2>
    </div>

<?php 

get_footer();