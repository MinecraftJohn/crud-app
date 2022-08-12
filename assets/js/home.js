// ADD NEW MODAL FUNCTIONS
function addNewEmployeeFadein() {
    tableAddNewBackground.style.display = "flex"
}

function addNewEmployeeFadeout() {
    tableAddNewBackground.style.display = "none"
    formInputMessage[0].style.display = "none"
    for (let i = 0; i <= 7; i++) {
        if (i == 2) {
            tableAddNewFormInput[i].value = "Month"
            tableAddNewFormInput[i].style.border = "#dadce0 solid 1px"
        } else if (i == 3) {
            tableAddNewFormInput[i].value = "Day"
            tableAddNewFormInput[i].style.border = "#dadce0 solid 1px"
        } else if (i == 5) {
            tableAddNewFormInput[i].value = 2
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

    function addNewErrorMessage(errorMessage, inputNumber) {
        formInputMessage[0].style.display = "flex"
        formInputMessageText[0].innerHTML = errorMessage
        tableAddNewFormInput[inputNumber].style.border = "#d93025 solid 1px"
    }

    if (tableAddNewFormInput[0].value == "") {
        addNewErrorMessage("First Name field is required", 0)
    } else if (!tableAddNewFormInput[0].value.match(/([A-ZÑ][a-z-ñ.]+)$/)) {
        addNewErrorMessage("Make sure first letter is capital on First Name field", 0)
    } else if (tableAddNewFormInput[1].value == "") {
        addNewErrorMessage("Last Name field is required", 1)
    } else if (!tableAddNewFormInput[1].value.match(/([A-ZÑ][a-z-ñ.]+)$/)) {
        addNewErrorMessage("Make sure first letter is capital on Last Name field", 1)
    } else if (tableAddNewFormInput[2].value == "Month") {
        addNewErrorMessage("Your date of birth is invalid", 2)
    } else if (tableAddNewFormInput[3].value == "Day") {
        addNewErrorMessage("Your date of birth is invalid", 3)
    } else if (tableAddNewFormInput[4].value == "") {
        addNewErrorMessage("Date of Birth (Year) field is required", 4)
    } else if (tableAddNewFormInput[4].value < 1957 || tableAddNewFormInput[4].value > 2003) {
        addNewErrorMessage("Employee must be around 18-65 years old only", 4)
    } else if (tableAddNewFormInput[6].value == "") {
        addNewErrorMessage("Phone number is required", 6)
    } else if (!tableAddNewFormInput[6].value.match(/^[0-9]*$/)) {
        addNewErrorMessage("Only numbers are allowed", 6)
    } else if (tableAddNewFormInput[6].value.length != 11) {
        addNewErrorMessage("Invalid phone number", 6)
    } else if (!tableAddNewFormInput[6].value.match(/(09[0-9]{9})/)) {
        addNewErrorMessage("Invalid phone number", 6)
    } else if (tableAddNewFormInput[7].value == "") {
        addNewErrorMessage("Employee title is required", 7)
    } else if (!tableAddNewFormInput[7].value.match(/([A-ZÑ][a-z-ñ.]+)$/)) {
        addNewErrorMessage("Make sure first letter is capital on Employee Title field", 7)
    } else {
        addNewSubmitButton.click()
    }
}