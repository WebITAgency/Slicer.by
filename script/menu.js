let $menu = document.querySelector('.mobile-menu');
let $openBtn = document.querySelector('.btn-container__menu');

$openBtn.addEventListener('click', openMenu);

let openMenu = () => {
    $menu.classList.toggle('open');
}