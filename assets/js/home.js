// ADD NEW MODAL FUNCTIONS
function addNewEmployeeFadein() {
    tableAddNewBackground[0].style.display = "flex"
    tableAddNewBackground[0].style.opacity = "1"

    function addNewScaleModal1() {
        tableAddNewContainer[0].style.transform = "scale(1)"
    }
    setTimeout(addNewScaleModal1, 0)
}

function addNewEmployeeFadeout() {
    tableAddNewContainer[0].style.transform = "scale(0)"
    tableAddNewBackground[0].style.opacity = "0"

    function addNewScaleModal0() {
        tableAddNewBackground[0].style.display = "none"
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
    setTimeout(addNewScaleModal0, 150)
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