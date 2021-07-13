"use strict"
let $burgerBtn = document.querySelector('.btn-container__menu');
let $menu = document.querySelector('.mobile-menu');

console.log($menu);
console.log($burgerBtn);

$burgerBtn.addEventListener('click', showMenu);

function show($element){
    $element.style.display = 'flex';
}

function hide($element){
    $element.style.display = 'none';
}

function showMenu(){
    if ($menu.style.display === 'flex'){
        hide($menu);
        $burgerBtn.classList.add('bi-list');
        $burgerBtn.classList.remove('bi-x');
    } else {
        show($menu);
        $burgerBtn.classList.add('bi-x');
        $burgerBtn.classList.remove('bi-list');
    }
}
