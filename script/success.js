let success = document.querySelector('.form__success');
console.log(success);
let successBtn = document.querySelector('.form__btn');
console.log(successBtn);
successBtn.addEventListener('click', function(){    
    success.style.display = 'flex';
    setTimeout(function(){
        success.style.display = 'none';
    }, 1500)
})