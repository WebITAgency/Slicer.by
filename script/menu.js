"use strict"
// Мобильное меню
let $burgerBtn = document.querySelector('.header__menu_icon');
let $menu = document.querySelector('.header__menu-mobile');
let isMenuActive = false;

let menuToggle = () => {
  $menu.classList.toggle('header__menu-mobile--inactive');
  $menu.classList.toggle('header__menu-mobile--active');
  $burgerBtn.classList.toggle('bi-x');
  $burgerBtn.classList.toggle('bi-list');
  document.querySelector('body').classList.toggle('over-f-hidden');
}

$burgerBtn.addEventListener('click', menuToggle);


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

let menuItems = document.querySelectorAll('.catalog__item');

for (let i = 0; i < menuItems.length; i++){
  menuItems[i].addEventListener('click', function(event){
    console.log(menuItems[i].querySelector('.item__sub-menu').style.display);
    if (menuItems[i].querySelector('.item__sub-menu').style.display == 'none'){
      menuItems[i].querySelector('.item__sub-menu').style.display == 'flex';
      menuItems[i].querySelector('.item__sub-menu').style.zIndex = '100000';
    } else {
      menuItems[i].querySelector('.item__sub-menu').style.display == 'none';
    }
    console.log(menuItems[i].querySelector('.item__sub-menu'));
  })
}
