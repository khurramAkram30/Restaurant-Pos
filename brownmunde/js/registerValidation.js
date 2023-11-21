var validname = /^[A-Za-z]+$/;
let reg_fname = document.getElementById("fname");
reg_fname.addEventListener('keyup', fnameValidation);

function fnameValidation() {
    if (reg_fname.value.match(validname)) {
        reg_fname.style.borderColor = "green";
        return true;
    } else {
        reg_fname.style.borderColor = "red";
        return false;
    }
}

var validlname = /^[A-Za-z]+$/;
let reg_lname = document.getElementById("lname");
reg_lname.addEventListener('keyup', flnameValidation);

function flnameValidation() {
    if (reg_lname.value.match(validlname)) {
        reg_lname.style.borderColor = "green";
        return true;
    } else {
        reg_lname.style.borderColor = "red";
        return false;
    }
}

var validEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,10})+$/;
let email = document.getElementById("email");
email.addEventListener('keyup', emailValidation);
// console.log("valid email");  
function emailValidation() {
    if (email.value.match(validEmail)) {
        // console.log("valid email"); 
        // document.getElementById("register").disabled = false;
        email.style.borderColor = "green";
        return true;
    } else {
        email.style.borderColor = "red";
        return false;
    }
}


var validUKPhoneNumber = /^(?:(?:\+44)|(?:0))(?:(?:(?:20\d{3})|(?:11\d{2})|(?:116\d{2})))\d{6}$/;

var phoneNumberInput = document.getElementById("phone");
phoneNumberInput.addEventListener('keyup', validatePhoneNumber);
function validatePhoneNumber() {
    if (phoneNumberInput.value.match(validUKPhoneNumber)) {
        phoneNumberInput.style.borderColor = "green";
        // submitButton.disabled = false;
    } else {
        phoneNumberInput.style.borderColor = "red";
        // submitButton.disabled = true;
    }
}


var validUKFaxNumber = /^(?:(?:\+44\s?)?(?:\(0\)\s?|\(0\)|0)?)?(?:(?:(?:1\d{3}|20\d{3}|11\d{2})\s?\d{6})|(?:7[1-9]\d{2}|7[1-9]\d{1}|\(7[1-9]\d{2}\)|\(\d{5}\)|\d{5}\s?\d{6}))$/;
var faxNumberInput = document.getElementById("fax");
faxNumberInput.addEventListener('keyup', validateFaxNumber);

function validateFaxNumber(){
if (faxNumberInput.value.match(validUKFaxNumber)) {
    faxNumberInput.style.borderColor = "green";
    // submitButton.disabled = false;
} else {
    faxNumberInput.style.borderColor = "red";
    // submitButton.disabled = true;
}
}

var validUKPostcode = /^[A-Z]{1,2}\d[A-Z\d]? \d[A-Z]{2}$/;
var pcodeInput = document.getElementById("pcode");
pcodeInput.addEventListener('keyup', validatePostCode);
function validatePostCode(){
    if (pcodeInput.value.match(validUKPostcode)) {
        pcodeInput.style.borderColor = "green";
        // submitButton.disabled = false;
    } else {
        pcodeInput.style.borderColor = "red";
        // submitButton.disabled = true;
    }
}

var address1=/\b\d{1,5}\s[A-Za-z\s]{5,}\b/;
var address1Input = document.getElementById("address1");
address1Input.addEventListener('keyup', validateaddress1);
function validateaddress1(){
    if (address1Input.value.match(address1)) {
        address1Input.style.borderColor = "green";
        // submitButton.disabled = false;
    } else {
        address1Input.style.borderColor = "red";
        // submitButton.disabled = true;
    }
}

var address2=/\b\d{1,5}\s[A-Za-z\s]{5,}\b/;
var address2Input = document.getElementById("address2");
address2Input.addEventListener('keyup', validateaddress2);
function validateaddress2(){
    if (address2Input.value.match(address2)) {
        address2Input.style.borderColor = "green";
        // submitButton.disabled = false;
    } else {
        address2Input.style.borderColor = "red";
        // submitButton.disabled = true;
    }
}


var cityvaidation = /^[a-zA-Z\s\-']+$/;
var cityvaidationInput = document.getElementById("city");
cityvaidationInput.addEventListener('keyup', validateCity);

function validateCity(){
    if (cityvaidationInput.value.match(cityvaidation)) {
        cityvaidationInput.style.borderColor = "green";
        // submitButton.disabled = false;
    } else {
        cityvaidationInput.style.borderColor = "red";
        // submitButton.disabled = true;
    }  
}

// var validpassword = /^(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,20}$/;
// let reg_password = document.getElementById("pswd");
// reg_password.addEventListener('keyup', passwordValidation);
// function passwordValidation() {
//         // console.log(reg_password.value)
//     if (reg_password.value.match(validpassword)) {
//         document.getElementById("password_message").style.display = "none";
//         reg_password.style.borderColor = "green";
//     } else {
//         document.getElementById("password_message").style.display = "block";
//         document.getElementById("password_message").textContent = "password between 8 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
//         document.getElementById("password_message").style.color = "red";
//         reg_password.style.borderColor = "red";
//     }
// }



// email.addEventListener('keyup', disablecheck);
// reg_fname.addEventListener('keyup', disablecheck);
// reg_lname.addEventListener('keyup', disablecheck);
// phoneNumberInput.addEventListener('keyup', disablecheck);
// faxNumberInput.addEventListener('keyup', disablecheck);
// pcodeInput.addEventListener('keyup', disablecheck);
// faxNumberInput.addEventListener('keyup', disablecheck);
// faxNumberInput.addEventListener('keyup', disablecheck);

// // reg_pas/sword.addEventListener('keyup', disablecheck);
// // confirmPassword.addEventListener('keyup', disablecheck);
// // reg_province.addEventListener('change', disablecheck);
// // graduate.addEventListener('change', disablecheck);

// function disablecheck() {
//     if (reg_lname.value.match(validname) && reg_fname.value.match(validname) && email.value.match(validEmail) &&
//         reg_phone.value.match(validPhone) && reg_password.value.match(validpassword) && confirmPassword.value == reg_password.value &&
//         reg_province.value !== "" && reg_city.value !== "" && graduate.value !== "") {
//         document.getElementById("register").disabled = false;
//     } else {
//         document.getElementById("register").disabled = true;
//     }
// }