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
    if (formInput[0].value == "") {
        formInputLabel[0].style.color = "#d93025"
        formInput[0].style.border = "#d93025 solid 1px"
        formInputMessage[0].style.display = "flex"
        formInputMessageText[0].innerHTML = "This field is required"
    } else if (formInput[1].value == "") {
        formInputLabel[1].style.color = "#d93025"
        formInput[1].style.border = "#d93025 solid 1px"
        formInputMessage[1].style.display = "flex"
        formInputMessageText[1].innerHTML = "This field is required"
    } else if (formInput[2].value == "") {
        formInputLabel[2].style.color = "#d93025"
        formInput[2].style.border = "#d93025 solid 1px"
        formInputMessage[2].style.display = "flex"
        formInputMessageText[2].innerHTML = "This field is required"
    } else if (!formInput[0].value.match(/([A-ZÑ][a-z-ñ.]+)$/)) {
        formInputLabel[0].style.color = "#d93025"
        formInput[0].style.border = "#d93025 solid 1px"
        formInputMessage[0].style.display = "flex"
        formInputMessageText[0].innerHTML = "Make sure every first letter is capital"
    } else if (!formInput[1].value.match(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/)) {
        formInputLabel[1].style.color = "#d93025"
        formInput[1].style.border = "#d93025 solid 1px"
        formInputMessage[1].style.display = "flex"
        formInputMessageText[1].innerHTML = "Invalid email"
    } else if (!formInput[2].value.match(/^[0-9]*$/)) {
        formInputLabel[2].style.color = "#d93025"
        formInput[2].style.border = "#d93025 solid 1px"
        formInputMessage[2].style.display = "flex"
        formInputMessageText[2].innerHTML = "Only numbers are allowed"
    } else if (formInput[2].value.length != 11) {
        formInputLabel[2].style.color = "#d93025"
        formInput[2].style.border = "#d93025 solid 1px"
        formInputMessage[2].style.display = "flex"
        formInputMessageText[2].innerHTML = "Invalid phone number"
    } else {
        formSubmitButton[0].click()
    }
}