let popupWindow = document.querySelector('.popup');
let closeBtn = document.querySelector('.card__close');
let header = document.querySelector('header');

closeBtn.addEventListener('click', closePopup);

function closePopup(){
    popupWindow.style.display = 'none';
    document.body.style.overflowY = 'scroll';
}

document.addEventListener('click', showPopup);

function showPopup(event){
    if (event.target.classList.contains('product-item__btn')){
        event.preventDefault();
        popupWindow.style.display = 'flex';
        document.body.style.overflowY = 'hidden';
        popupWindow.querySelector('h2').textContent = event.target.parentElement.querySelector('h2').textContent;
        popupWindow.querySelector('span').textContent = event.target.parentElement.querySelector('span').textContent;
        popupWindow.querySelector('img').setAttribute('src', event.target.parentElement.querySelector('img').getAttribute('src'));
        //popupWindow.querySelector('').textContent = "ABOBA";
        let targetHref = event.target.getAttribute('href');
        popupWindow.querySelector('.popup__card .card__buttons .buttons__buy-btn').setAttribute('href', targetHref);
    }
}