let formValidator = {
  name: (name) => {
    if (name.length == 0 || name.length > 20) {
      return false;
    }
    for (let i = 0; i < name.length; i++) {
      if (name[i].charCodeAt(0) < 1039 || name[i].charCodeAt(0) > 1104) {
        return false;
      }
    }
    return true;
  },

  phone: (phonenumber) => {
    if (phonenumber.length < 6) {
      return false;
    }
    let allowed = "+()0123456789 ";
    for (let i = 0; i < phonenumber.length; i++) {
      if (allowed.indexOf(phonenumber[i]) == -1) {
        return false;
      }
    }
    return true;
  },

  email: (email) => {
    if (email.length < 4) {
      return false;
    }
    let isdot = false;
    let isdog = false;
    for (let i = 0; i < email.length; i++) {
      if (email[i] == '@') {
        if (isdog == false) {
          isdog = true;
        } else {
          return false;
        }
      }
      if (email[i] == '.') {
        isdot = true;
      }
    }
    if (isdog && isdot) {
      return true;
    }
    return false;
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