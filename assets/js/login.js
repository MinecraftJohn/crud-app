// Input Label Functions
function loginInputFocus(formInputLabel, formInput) {
    formInputLabel.style.fontSize = "12px"
    formInputLabel.style.top = "-6px"
    formInputLabel.style.color = "#1a73e8"
    formInput.style.border = "#1a73e8 solid 1px"
}

function loginInputBlur(formInputLabel, formInput, formInputMessage) {
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