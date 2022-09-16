// FORM MODAL FUNCTIONS
function formContainerTransform(element, scale) {
    element.style.transform = "scale(" + scale + ")";
}



// ADD NEW FORM FUNCTIONS
function openAddNewForm() {
    formBackground[0].style.display = "flex";
    formTitle[0].innerHTML = "Add Employee";
    formAddSubmitButton.style.display = "block";

    function scaleForm() {
        formContainerTransform(formContainer[0], 1.1);

        function scaleFormFinal() {
            formContainerTransform(formContainer[0], 1);
        }
        setTimeout(scaleFormFinal, 250);
    }
    setTimeout(scaleForm, 0);
}

function closeAddEditForm() {
    formContainerTransform(formContainer[0], 1.1);

    function scaleFormZero() {
        formContainerTransform(formContainer[0], 0);

        function removeFormBackground() {
            formBackground[0].style.display = "none";
            formErrorContainer[0].style.display = "none";
            formAddSubmitButton.style.display = "none";
            formEditSubmitButton.style.display = "none";
            editDataID.value = "";
            for (let i = 0; i <= 6; i++) {
                if (i == 2) {
                    formBodyInputBox[i].value = "Month";
                    formBodyInputBox[i].style.border = "#dadce0 solid 1px";
                } else if (i == 3) {
                    formBodyInputBox[i].value = "Day";
                    formBodyInputBox[i].style.border = "#dadce0 solid 1px";
                } else {
                    formBodyInputBox[i].value = "";
                    formBodyInputBox[i].style.border = "#dadce0 solid 1px";
                }
            }
        }
        setTimeout(removeFormBackground, 250);
    }
    setTimeout(scaleFormZero, 250);
}


// EDIT FORM FUNCTIONS
function openEditForm(dataID, dataFirstName, dataLastName, dataDateofBirthMonth, dataDateofBirthDay, dataDateofBirthYear, dataEmail, dataPhone) {
    formBackground[0].style.display = "flex";
    formTitle[0].innerHTML = "Edit Employee";
    formEditSubmitButton.style.display = "block";
    editDataID.value = dataID;
    formBodyInputBox[0].value = dataFirstName;
    formBodyInputBox[1].value = dataLastName;
    formBodyInputBox[2].value = dataDateofBirthMonth;
    formBodyInputBox[3].value = dataDateofBirthDay;
    formBodyInputBox[4].value = dataDateofBirthYear;
    formBodyInputBox[5].value = dataEmail;
    formBodyInputBox[6].value = dataPhone;

    function scaleForm() {
        formContainerTransform(formContainer[0], 1.1);

        function scaleFormFinal() {
            formContainerTransform(formContainer[0], 1);
        }
        setTimeout(scaleFormFinal, 250);
    }
    setTimeout(scaleForm, 0);
}



// DELETE DATA FUNCTIONS
function openDeleteConfirmation(dataID) {
    deleteDataBackground[0].style.display = "flex";
    deleteDataInput[0].setAttribute("value", dataID)

    function scaleForm() {
        formContainerTransform(deleteDataContainer[0], 1.1);

        function scaleFormFinal() {
            formContainerTransform(deleteDataContainer[0], 1);
        }
        setTimeout(scaleFormFinal, 250);
    }
    setTimeout(scaleForm, 0);
}

function closeDeleteConfirmation() {
    deleteDataInput[0].setAttribute("value", "")
    formContainerTransform(deleteDataContainer[0], 1.1);

    function scaleFormZero() {
        formContainerTransform(deleteDataContainer[0], 0);

        function removeDeleteConfirmationBackground() {
            deleteDataBackground[0].style.display = "none";
        }
        setTimeout(removeDeleteConfirmationBackground, 250);
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