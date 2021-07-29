let formValidator = {
  phone: (phonenumber) => {
    if(phonenumber.length < 6){
        return false;
    }
    let allowed = "+()0123456789 ";
    for(let i = 0; i < phonenumber.length; i++){
        if(allowed.indexOf(phonenumber[i]) == -1){
            return false;
        }
    }
    return true;
  }
};

document.addEventListener("DOMContentLoaded", function(event) {
  document.querySelector('.form__btn')
    .addEventListener('click', (e) => {
      let form = e.target.parentElement;
      let values = {
        name: form.querySelector('#form__name').value,
        patronymic: form.querySelector('#form__patronymic').value,
        phonenumber: form.querySelector('#form__phone').value,
        email: form.querySelector('#form__mail').value
      }

    })
});