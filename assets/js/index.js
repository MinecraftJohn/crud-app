// Input Label Functions
function registerInputFocus(formInputLabel, formInput) {
    formInputLabel.style.fontSize = "12px"
    formInputLabel.style.top = "-6px"
    formInputLabel.style.color = "#1a73e8"
    formInput.style.border = "#1a73e8 solid 1px"
}

function registerInputBlur(formInputLabel, formInput, formInputMessage) {
    if (formInput.value == "") {
        formInputLabel.style.fontSize = "13px"
        formInputLabel.style.top = "11px"
        formInputLabel.style.color = "#5f6368"
        formInput.style.border = "#dadce0 solid 1px"
        formInputMessage.style.display = "none"
    } else {
        formInputMessage.style.display = "none"
    }
}

// Shortcut Event Trigger Submit Form
formSubmit[0].addEventListener("keypress", function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        formSubmitButton[0].click();
    }
});

// Form Submit Validation
function formSubmitValidate() {

    function registerFormSubmitStyle(inputNumber, errorMessage) {
        formInputLabel[inputNumber].style.color = "#d93025"
        formInput[inputNumber].style.border = "#d93025 solid 1px"
        formInputMessage[inputNumber].style.display = "flex"
        formInputMessageText[inputNumber].innerHTML = errorMessage
    }

    if (formInput[0].value == "") {
        registerFormSubmitStyle(0, "This field is required")
    } else if (formInput[1].value == "") {
        registerFormSubmitStyle(1, "This field is required")
    } else if (formInput[2].value == "") {
        registerFormSubmitStyle(2, "This field is required")
    } else if (!formInput[0].value.match(/([A-ZÑ][a-z-ñ.]+)$/)) {
        registerFormSubmitStyle(0, "Make sure every first letter is capital, numbers not allowed")
    } else if (!formInput[1].value.match(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/)) {
        registerFormSubmitStyle(1, "Invalid email address")
    } else if (!formInput[2].value.match(/^[0-9]*$/)) {
        registerFormSubmitStyle(2, "Only numbers are allowed")
    } else if (formInput[2].value.length != 11) {
        registerFormSubmitStyle(2, "Invalid phone number")
    } else if (!formInput[2].value.match(/(09[0-9]{9})/)) {
        registerFormSubmitStyle(2, "Invalid phone number")
    } else {
        formSubmitButton[0].click()
    }
}