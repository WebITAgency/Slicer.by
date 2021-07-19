"use strict"
// Мобильное меню
let $burgerBtn = document.querySelector('.btn-container__menu');
let $menu = document.querySelector('.mobile-menu');

$burgerBtn.addEventListener('click', showMenu);

function show($element) {
  $element.style.display = 'flex';
}

function hide($element) {
  $element.style.display = 'none';
}

function showMenu() {
  if ($menu.style.display === 'flex') {
    hide($menu);
    $burgerBtn.classList.add('bi-list');
    $burgerBtn.classList.remove('bi-x');
  } else {
    show($menu);
    $burgerBtn.classList.add('bi-x');
    $burgerBtn.classList.remove('bi-list');
  }
}


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

