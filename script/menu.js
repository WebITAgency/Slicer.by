"use strict"
// Мобильное меню
let $burgerBtn = document.querySelector('.btn-container__menu');
let $menu = document.querySelector('.mobile-menu');

console.log($menu);
console.log($burgerBtn);

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
let $categoriesBtn = document.querySelectorAll('.catalog__btn');
let $categories = document.querySelector('.menu__categories .catalog__menu');
let $arrow = document.querySelector('.catalog__btn i');

$categoriesBtn[1].addEventListener('click', showCategories);

function showCategories(event) {
  event.preventDefault();
  if ($categories.style.display === 'flex') {
    hide($categories);
    $categoriesBtn[1].querySelector('span').textContent = 'Все категории';
    $arrow.classList.remove('bi-arrow-up');
    $arrow.classList.add('bi-arrow-down');
  } else {
    show($categories);
    $categoriesBtn[1].querySelector('span').textContent = 'Свернуть';
    $arrow.classList.add('bi-arrow-up');
    $arrow.classList.remove('bi-arrow-down');
  }
}