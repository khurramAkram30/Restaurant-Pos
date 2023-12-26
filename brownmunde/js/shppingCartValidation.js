var validname = /^[A-Za-z]+$/;
let reg_fname = document.getElementById("inputName");
reg_fname.addEventListener('keyup', fnameValidation);

function fnameValidation() {
    if (reg_fname.value.match(validname)) {
        reg_fname.style.borderColor = "green";
        $("#paysave").prop("disabled", false);
        return true;
    } else {
        reg_fname.style.borderColor = "red";
        $("#paysave").prop("disabled", true);
        return false;
    }
}

var validEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,10})+$/;
let email = document.getElementById("inputEmail");
email.addEventListener('keyup', emailValidation);
// console.log("valid email");  
function emailValidation() {
    if (email.value.match(validEmail)) {
        // console.log("valid email"); 
        // document.getElementById("register").disabled = false;
        email.style.borderColor = "green";
        $("#paysave").prop("disabled", false);

        return true;
    } else {
        email.style.borderColor = "red";
        $("#paysave").prop("disabled", true);

        return false;
    }
}

var validUKPhoneNumber = /^(?:(?:\+44)|(?:0))(?:(?:(?:\d{3})|(?:\d{2})|(?:\d{2})))\d{7}$/;

var phoneNumberInput = document.getElementById("inputphone");
phoneNumberInput.addEventListener('keyup', validatePhoneNumber);
function validatePhoneNumber() {
    if (phoneNumberInput.value.match(validUKPhoneNumber)) {
        phoneNumberInput.style.borderColor = "green";
        $("#paysave").prop("disabled", false);

        // submitButton.disabled = false;
    } else {
        phoneNumberInput.style.borderColor = "red";
        $("#paysave").prop("disabled", true);

        // submitButton.disabled = true;
    }
}
