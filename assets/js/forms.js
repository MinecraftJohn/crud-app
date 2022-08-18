// FORM MODAL FUNCTIONS
function formContainerTransform(scale) {
    formContainer[0].style.transform = "scale(" + scale + ")";
}

function openAddNewForm() {
    formBackground[0].style.display = "flex";

    function scaleForm() {
        formContainerTransform(1.1);

        function scaleFormFinal() {
            formContainerTransform(1);
        }
        setTimeout(scaleFormFinal, 250);
    }
    setTimeout(scaleForm, 0);
}

function closeAddNewForm() {
    formContainerTransform(1.1);

    function scaleFormZero() {
        formContainerTransform(0);

        function removeFormBackground() {
            formBackground[0].style.display = "none";
        }
        setTimeout(removeFormBackground, 250);
    }
    setTimeout(scaleFormZero, 250);
}

// FORM VALIDATION FUNCTIONS
function addNewInputFocus(formBodyInputBox) {
    formBodyInputBox.style.border = "var(--blue) solid 1px"
}

function addNewInputBlur(formBodyInputBox) {
    if (formBodyInputBox.value == "" || formBodyInputBox.value == null || formBodyInputBox.value == "Month" || formBodyInputBox.value == "Day") {
        formBodyInputBox.style.border = "var(--red) solid 1px"
    } else {
        formBodyInputBox.style.border = "#dadce0 solid 1px"
    }
}