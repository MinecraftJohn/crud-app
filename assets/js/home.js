// ADD NEW MODAL FUNCTIONS
function addNewEmployeeFadein() {
    tableAddNewBackground.style.display = "flex"
}

function addNewEmployeeFadeout() {
    tableAddNewBackground.style.display = "none"
    for (let i = 0; i <= 7; i++) {
        if (i == 2) {
            tableAddNewFormInput[i].value = "Month"
            tableAddNewFormInput[i].style.border = "#dadce0 solid 1px"
        } else if (i == 3) {
            tableAddNewFormInput[i].value = "Day"
            tableAddNewFormInput[i].style.border = "#dadce0 solid 1px"
        } else {
            tableAddNewFormInput[i].value = ""
            tableAddNewFormInput[i].style.border = "#dadce0 solid 1px"
        }
    }
}

// ADD NEW INPUT FUNCTIONS
function addNewInputFocus(tableAddNewFormInput) {
    tableAddNewFormInput.style.border = "#1a73e8 solid 1px"
}

function addNewInputBlur(tableAddNewFormInput) {
    if (tableAddNewFormInput.value == "" || tableAddNewFormInput.value == null || tableAddNewFormInput.value == "Month" || tableAddNewFormInput.value == "Day") {
        tableAddNewFormInput.style.border = "#d93025 solid 1px"
    } else {
        tableAddNewFormInput.style.border = "#dadce0 solid 1px"
    }
}

// ADD NEW SUBMIT VALIDATOR FUNCTIONS
function addNewSubmitValidate() {
    if (tableAddNewFormInput[0].value == "") {
        formInputMessage[0].style.display = "flex"
        formInputMessageText[0].innerHTML = "This First Name field is required"
        tableAddNewFormInput[0].style.border = "#dadce0 solid 1px"
    } else {
        formInputMessage[0].style.display = "none"
    }
}