const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const phone = document.getElementById('phone');
const date1 = document.getElementById('date1');
const time1 = document.getElementById('time1');
const date2 = document.getElementById('date2');
const time2 = document.getElementById('time2');
const email = document.getElementById('email');
const address = document.getElementById('address');
const city = document.getElementById('city');
const province = document.getElementById('province');
const pcode = document.getElementById('pcode');


form.addEventListner('submit', (e) => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');

};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const phoneValue = phone.value.trim();
    const date1Value = date1.value.trim();
    const time1Value = time1.value.trim();
    const date2Value = date2.value.trim();
    const time2Value = time2.value.trim();
    const emailValue = email.value.trim();
    const addressValue = address.value.trim();
    const cityValue = city.value.trim();
    const provinceValue = province.value.trim();
    const pcodeValue = pcode.value.trim();

    if(fnameValue === '') {
        setError(fname, 'First Name is Required');
    } else{
        setSuccess(fname);
    }

    if(lnameValue === '') {
        setError(lname, 'Last Name is Required');
    } else{
        setSuccess(lname);
    }

    if(phoneValue === '') {
        setError(phone, 'Phone Number is Required');
    } else if (phoneValue.length <= 10 ){
        setError(phone, 'Phone Number should be 10 digits.')
    }else {
        setSuccess(phone);
    }

    if(emailValue === '') {
        setError(email, 'Email is Required');
    } else if (!isValidEmail(emailValue)){
        setError(email, 'Provide a Valid Email Address');
    }else{
        setSuccess(email);
    }

    if(pcodeValue.length < 6) {
        setError(pcode, 'Postal Code should be Six Digits');
    } else{
        setSuccess(pcode);
    }

};

