let formValidator = {
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

  }
};