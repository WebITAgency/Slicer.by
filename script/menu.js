"use strict"
// Мобильное меню
let $burgerBtn = document.querySelector('.header__menu_icon');
let $menu = document.querySelector('.header__menu-mobile');
let isMenuActive = false;
$burgerBtn.addEventListener('click', () => {
    $menu.classList.toggle('header__menu-mobile--inactive');
    $menu.classList.toggle('header__menu-mobile--active');
    $burgerBtn.classList.toggle('bi-x');
    $burgerBtn.classList.toggle('bi-list');
    isMenuActive = !isMenuActive;
});

// Меню с категориями
let $categoriesBtn = document.querySelector('.categories-btn');
let $categories = document.querySelector('.push-menu');

$categoriesBtn.addEventListener('click', showCategories);

function showCategories(event) {
  event.preventDefault();
  if ($categories.style.display === 'none') {
    $categories.style.display = 'flex';
    $categoriesBtn.querySelector('i').classList.remove('bi-arrow-down-short');
    $categoriesBtn.querySelector('i').classList.add('bi-arrow-up-short');
    $categoriesBtn.querySelector('span').textContent = 'Свернуть';
  } else {
    $categories.style.display = 'none';
    $categoriesBtn.querySelector('i').classList.add('bi-arrow-down-short');
    $categoriesBtn.querySelector('i').classList.remove('bi-arrow-up-short');
    $categoriesBtn.querySelector('span').textContent = 'Все категории';
  }
}

//Отключение стандартного поведения элементов меню с категориями
let $links = document.querySelectorAll('.item__content');

for (let i = 0; i < $links.length; i++) {
  $links[i].addEventListener('click', function(event) {
    event.preventDefault();
  })
}