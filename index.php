<?php 
    include "connection.php";
    function toastActivate($color, $toast_msg) {
        echo "<script>
                document.getElementsByClassName('toast_container')[0].style.display = 'block';
                document.getElementsByClassName('toast_container')[0].style.background = '$color';
                document.getElementsByClassName('toast_msg')[0].innerHTML = '$toast_msg';
                function toastIn() {
                    document.getElementsByClassName('toast_container')[0].style.left = '16px';
                    function toastFadeOut() {
                        document.getElementsByClassName('toast_container')[0].style.left = '-332px';
                        function toastOut() {
                            document.getElementsByClassName('toast_container')[0].style.display = 'none';
                        }
                        setTimeout(toastOut, 600);
                    }
                    setTimeout(toastFadeOut, 5000);
                }
                setTimeout(toastIn, 1000);
              </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Crudhub</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/library.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/variables.js" defer></script>
    <script src="assets/js/navigation.js" defer></script>
    <script src="assets/js/forms.js" defer></script>
</head>
<body>
    <?php include "navigation.php"; ?>
    <div class="toast_container">
        <svg viewBox="0 0 80 80" class="toast_icon">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80ZM58.4633 22L64 27.5367L35.8917 55.645L35.8898 55.643L33.4731 58.0597L16 40.5867L21.5367 35.05L33.475 46.9884L58.4633 22Z" fill="var(--white)"/>
        </svg>
        <p class="toast_msg"></p>
    </div>
    <section>
        <h1 class="pageHeaderTitle">Hello there, Welcome to Crudhub.</h1>
    </section>
    <section>
        <p class="tip_container responsive_width border_radius border_container">Do you already know what C.R.U.D means?
            <a href="https://www.educative.io/answers/what-are-create-and-read-operations-in-crud-php" class="">Learn here!</a>
        </p>
    </section>
    <section>
        <div class="table_title_container responsive_width">
            <h3 class="table_title_text">Fictitious Employees</h3>
            <button class="table_add_new_button_mobile secondary_button border_radius button_padding" onclick="openAddNewForm()">+ &nbsp Add New</button>
        </div>
        <span class="form_background">
            <form method="post" class="form_container border_container border_radius">
                <div class="form_header">
                    <h3 class="form_title"></h3>
                    <div class="form_close_button" onclick="closeAddEditForm()">&times;</div>
                </div>
                <div class="form_body">
                    <div class="form_body_section">
                        <div class="form_body_input_container">
                            <label class="form_body_input_label">Name</label><br>
                            <input id="edit_data_id" name="dataID">
                            <input type="text" class="form_body_input_box" placeholder="First Name" name="formFirstName"
                            onfocus="addNewInputFocus(formBodyInputBox[0])" onblur="addNewInputBlur(formBodyInputBox[0])">
                        </div>
                        <div class="form_body_input_container">
                            <label class="form_body_input_label"></label><br>
                            <input type="text" class="form_body_input_box" placeholder="Last Name" name="formLastName"
                            onfocus="addNewInputFocus(formBodyInputBox[1])" onblur="addNewInputBlur(formBodyInputBox[1])">
                        </div>
                    </div>
                    <div class="form_body_section">
                        <div class="form_body_input_container">
                            <label for="" class="form_body_input_label">Date of Birth</label><br>
                            <select class="form_body_input_box tableAddNewFormInputSelect" name="formDateofBirthMonth"
                            onfocus="addNewInputFocus(formBodyInputBox[2])" onblur="addNewInputBlur(formBodyInputBox[2])">
                                <option>Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="form_body_input_container">
                            <label class="form_body_input_label"></label><br>
                            <select class="form_body_input_box tableAddNewFormInputSelect" name="formDateofBirthDay"
                            onfocus="addNewInputFocus(formBodyInputBox[3])" onblur="addNewInputBlur(formBodyInputBox[3])">
                                <option>Day</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select>
                        </div>
                        <div class="form_body_input_container">
                            <label class="form_body_input_label"></label><br>
                            <input type="text" class="form_body_input_box " placeholder="Year" name="formDateofBirthYear"
                            onfocus="addNewInputFocus(formBodyInputBox[4])" onblur="addNewInputBlur(formBodyInputBox[4])">
                        </div>
                    </div>
                    <div class="form_body_input_container">
                        <label class="form_body_input_label">Email</label><br>
                        <input type="text" class="form_body_input_box" placeholder="your@email.com" name="formEmail"
                        onfocus="addNewInputFocus(formBodyInputBox[5])" onblur="addNewInputBlur(formBodyInputBox[5])">
                    </div>
                    <div class="form_body_input_container">
                        <label class="form_body_input_label">Phone</label><br>
                        <input type="text" class="form_body_input_box" placeholder="09xx xxx xxxx" name="formPhone"
                        onfocus="addNewInputFocus(formBodyInputBox[6])" onblur="addNewInputBlur(formBodyInputBox[6])">
                    </div>
                    <div class="form_error_container">
                        <svg class="form_error_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <p class="form_error_msg"></p>
                    </div>
                    <div class="form_submit_container">
                        <button class="secondary_button border_radius button_padding" id="add_submit_button" name="addSubmit">Submit</button>
                        <button class="secondary_button border_radius button_padding" id="edit_submit_button" name="editSubmit">Edit</button>
                    </div>
                </div>
                <?php
                    if (isset($_POST['addSubmit'])) {
                        $inputFirstName = $_POST['formFirstName'];
                        $inputLastName = $_POST['formLastName'];
                        $inputDateofBirthMonth = $_POST['formDateofBirthMonth'];
                        $inputDateofBirthDay = $_POST['formDateofBirthDay'];
                        $inputDateofBirthYear = $_POST['formDateofBirthYear'];
                        $inputEmail = $_POST['formEmail'];
                        $inputPhone = $_POST['formPhone'];

                        $dbAddSelectionEmailQuery = mysqli_query($mysqlConnect, "SELECT email FROM users WHERE email='$inputEmail'");
                        $dbAddSelectionPhoneQuery = mysqli_query($mysqlConnect, "SELECT phone FROM users WHERE phone='$inputPhone'");

                        function addRetrieveInput($addErrorMsg, $addErrorNumber) {
                            $inputFirstName = $_POST['formFirstName'];
                            $inputLastName = $_POST['formLastName'];
                            $inputDateofBirthMonth = $_POST['formDateofBirthMonth'];
                            $inputDateofBirthDay = $_POST['formDateofBirthDay'];
                            $inputDateofBirthYear = $_POST['formDateofBirthYear'];
                            $inputEmail = $_POST['formEmail'];
                            $inputPhone = $_POST['formPhone'];
                            echo "<script>
                                    var formBodyInputBox = document.getElementsByClassName('form_body_input_box');

                                    document.getElementsByClassName('form_background')[0].style.display = 'flex';
                                    document.getElementsByClassName('form_container')[0].style.transform = 'scale(1)';
                                    document.getElementsByClassName('form_title')[0].innerHTML = 'Add Employee';
                                    document.getElementById('add_submit_button').style.display = 'block';
                                    formBodyInputBox[0].value = '$inputFirstName';
                                    formBodyInputBox[1].value = '$inputLastName';
                                    formBodyInputBox[2].value = '$inputDateofBirthMonth';
                                    formBodyInputBox[3].value = '$inputDateofBirthDay';
                                    formBodyInputBox[4].value = '$inputDateofBirthYear';
                                    formBodyInputBox[5].value = '$inputEmail';
                                    formBodyInputBox[6].value = '$inputPhone';
                                    document.getElementsByClassName('form_error_container')[0].style.display = 'flex';
                                    document.getElementsByClassName('form_error_msg')[0].innerHTML = '$addErrorMsg';
                                    formBodyInputBox[$addErrorNumber].style.border = 'var(--red) solid 1px';
                                </script>";
                        }

                        if ($inputFirstName == "") {
                            addRetrieveInput("First Name field is required", 0);
                        } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $inputFirstName)) {
                            addRetrieveInput("Make sure first letter is capital on First Name field", 0);
                        } else if ($inputLastName == "") {
                            addRetrieveInput("Last Name field is required", 1);
                        } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $inputLastName)) {
                            addRetrieveInput("Make sure first letter is capital on Last Name field", 1);
                        } else if ($inputDateofBirthMonth == "Month") {
                            addRetrieveInput("Your date of birth is invalid", 2);
                        } else if ($inputDateofBirthDay == "Day") {
                            addRetrieveInput("Your date of birth is invalid", 3);
                        } else if ($inputDateofBirthYear == "") {
                            addRetrieveInput("Date of Birth (Year) field is required", 4);
                        } else if ($inputDateofBirthYear < 1957 || $inputDateofBirthYear > 2003) {
                            addRetrieveInput("Employee must be around 18-65 years old only", 4);
                        } else if ($inputEmail == "") {
                            addRetrieveInput("Email address is required", 5);
                        } else if (!preg_match("/[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/", $inputEmail)) {
                            addRetrieveInput("Invalid email address", 5);
                        } else if ($dbAddSelectionEmailQuery->num_rows != 0) {
                            addRetrieveInput("Email address already exist", 5);
                        } else if ($inputPhone == "") {
                            addRetrieveInput("Phone number is required", 6);
                        } else if (!preg_match("/^[0-9]*$/", $inputPhone)) {
                            addRetrieveInput("Only numbers are allowed", 6);
                        } else if (strlen($inputPhone) != 11) {
                            addRetrieveInput("Invalid phone number", 6);
                        } else if (!preg_match("/(09[0-9]{9})/", $inputPhone)) {
                            addRetrieveInput("Invalid phone number", 6);
                        } else if ($dbAddSelectionPhoneQuery->num_rows != 0) {
                            addRetrieveInput("Phone number already exist", 6);
                        } else if ($dbAddSelectionPhoneQuery->num_rows == 0 && $dbAddSelectionEmailQuery->num_rows == 0) {
                            mysqli_query($mysqlConnect, "INSERT INTO users (fname, lname, bdmonth, bdday, bdyear, email, phone)
                                                        VALUES ('$inputFirstName', '$inputLastName', '$inputDateofBirthMonth', '$inputDateofBirthDay', '$inputDateofBirthYear', '$inputEmail', '$inputPhone');");
                            toastActivate("var(--green)", "Successfully added!");
                        } else {
                            addRetrieveInput("An error has occurred!", 6);
                        }
                    }
                    if (isset($_POST['editSubmit'])) {
                        $dataID = $_POST['dataID'];
                        $inputFirstName = $_POST['formFirstName'];
                        $inputLastName = $_POST['formLastName'];
                        $inputDateofBirthMonth = $_POST['formDateofBirthMonth'];
                        $inputDateofBirthDay = $_POST['formDateofBirthDay'];
                        $inputDateofBirthYear = $_POST['formDateofBirthYear'];
                        $inputEmail = $_POST['formEmail'];
                        $inputPhone = $_POST['formPhone'];

                        $dbEditSelectionEmailQuery = mysqli_query($mysqlConnect, "SELECT email FROM users WHERE email='$inputEmail'");
                        $dbEditSelectionPhoneQuery = mysqli_query($mysqlConnect, "SELECT phone FROM users WHERE phone='$inputPhone'");
                        $dbEditDataFetch = mysqli_fetch_assoc(mysqli_query($mysqlConnect, "SELECT * FROM users WHERE id='$dataID'"));

                        function editRetrieveInput($addErrorMsg, $addErrorNumber) {
                            $inputFirstName = $_POST['formFirstName'];
                            $inputLastName = $_POST['formLastName'];
                            $inputDateofBirthMonth = $_POST['formDateofBirthMonth'];
                            $inputDateofBirthDay = $_POST['formDateofBirthDay'];
                            $inputDateofBirthYear = $_POST['formDateofBirthYear'];
                            $inputEmail = $_POST['formEmail'];
                            $inputPhone = $_POST['formPhone'];
                            echo "<script>
                                    var formBodyInputBox = document.getElementsByClassName('form_body_input_box');

                                    document.getElementsByClassName('form_background')[0].style.display = 'flex';
                                    document.getElementsByClassName('form_container')[0].style.transform = 'scale(1)';
                                    document.getElementsByClassName('form_title')[0].innerHTML = 'Edit Employee';
                                    document.getElementById('edit_submit_button').style.display = 'block';
                                    formBodyInputBox[0].value = '$inputFirstName';
                                    formBodyInputBox[1].value = '$inputLastName';
                                    formBodyInputBox[2].value = '$inputDateofBirthMonth';
                                    formBodyInputBox[3].value = '$inputDateofBirthDay';
                                    formBodyInputBox[4].value = '$inputDateofBirthYear';
                                    formBodyInputBox[5].value = '$inputEmail';
                                    formBodyInputBox[6].value = '$inputPhone';
                                    document.getElementsByClassName('form_error_container')[0].style.display = 'flex';
                                    document.getElementsByClassName('form_error_msg')[0].innerHTML = '$addErrorMsg';
                                    formBodyInputBox[$addErrorNumber].style.border = 'var(--red) solid 1px';
                                </script>";
                        }

                        if ($inputFirstName == "") {
                            editRetrieveInput("First Name field is required", 0);
                        } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $inputFirstName)) {
                            editRetrieveInput("Make sure first letter is capital on First Name field", 0);
                        } else if ($inputLastName == "") {
                            editRetrieveInput("Last Name field is required", 1);
                        } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $inputLastName)) {
                            editRetrieveInput("Make sure first letter is capital on Last Name field", 1);
                        } else if ($inputDateofBirthMonth == "Month") {
                            editRetrieveInput("Your date of birth is invalid", 2);
                        } else if ($inputDateofBirthDay == "Day") {
                            editRetrieveInput("Your date of birth is invalid", 3);
                        } else if ($inputDateofBirthYear == "") {
                            editRetrieveInput("Date of Birth (Year) field is required", 4);
                        } else if ($inputDateofBirthYear < 1957 || $inputDateofBirthYear > 2003) {
                            editRetrieveInput("Employee must be around 18-65 years old only", 4);
                        } else if ($inputEmail == "") {
                            editRetrieveInput("Email address is required", 5);
                        } else if (!preg_match("/[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/", $inputEmail)) {
                            editRetrieveInput("Invalid email address", 5);
                        } else if ($inputEmail == $dbEditDataFetch['email'] && $inputPhone == $dbEditDataFetch['phone']) {
                            mysqli_query($mysqlConnect, "UPDATE users SET fname='$inputFirstName', lname='$inputLastName', bdmonth='$inputDateofBirthMonth', bdday='$inputDateofBirthDay', bdyear='$inputDateofBirthYear', email='$inputEmail', phone='$inputPhone' 
                                                         WHERE id='$dataID'");
                            toastActivate("var(--blue)", "Data edited successfully!");
                        } else if ($inputEmail == $dbEditDataFetch['email']) {
                            mysqli_query($mysqlConnect, "UPDATE users SET fname='$inputFirstName', lname='$inputLastName', bdmonth='$inputDateofBirthMonth', bdday='$inputDateofBirthDay', bdyear='$inputDateofBirthYear', email='$inputEmail', phone='$inputPhone' 
                                                         WHERE id='$dataID'");
                            toastActivate("var(--blue)", "Data edited successfully!");
                        } else if ($dbEditSelectionEmailQuery->num_rows != 0) {
                            editRetrieveInput("Email address already exist", 5);
                        } else if ($inputPhone == "") {
                            editRetrieveInput("Phone number is required", 6);
                        } else if (!preg_match("/^[0-9]*$/", $inputPhone)) {
                            editRetrieveInput("Only numbers are allowed", 6);
                        } else if (strlen($inputPhone) != 11) {
                            editRetrieveInput("Invalid phone number", 6);
                        } else if (!preg_match("/(09[0-9]{9})/", $inputPhone)) {
                            editRetrieveInput("Invalid phone number", 6);
                        } else if ($inputPhone == $dbEditDataFetch['phone']) {
                            mysqli_query($mysqlConnect, "UPDATE users SET fname='$inputFirstName', lname='$inputLastName', bdmonth='$inputDateofBirthMonth', bdday='$inputDateofBirthDay', bdyear='$inputDateofBirthYear', email='$inputEmail', phone='$inputPhone' 
                                                         WHERE id='$dataID'");
                            toastActivate("var(--blue)", "Data edited successfully!");
                        } else if ($dbEditSelectionPhoneQuery->num_rows != 0) {
                            editRetrieveInput("Phone number already exist", 6);
                        } else {
                            editRetrieveInput("An error has occurred!", 6);
                        }
                    }
                ?>
            </form>
        </span>
        <span class="delete_data_background form_background">
            <form method="post" class="delete_data_container border_radius border_container">
                <h1 class="delete_data_msg">Are you sure you want to delete this data?</h1>
                <input class="delete_data_input" value name="deleteID">
                <div class="delete_data_button_container">
                    <span class="delete_data_button primary_button border_radius button_padding" onclick="closeDeleteConfirmation()">Cancel</span>
                    <button name="deleteSubmit" class="delete_data_button danger_button border_radius button_padding">Delete</button>
                </div>
                <?php
                    if (isset($_POST['deleteSubmit'])) {
                        $deleteID = $_POST['deleteID'];
                        mysqli_query($mysqlConnect, "DELETE FROM users WHERE id='$deleteID'");
                        toastActivate("var(--red)", "The data has been deleted!");
                    }
                ?>
            </form>
        </span>
        <div class="responsive_width" style="position: relative">
            <div class="table_container border_radius border_container">
                <div class="table_header">
                    <p class="table_row_name">Name</p>
                    <p class="table_row_birthdate">Birthdate</p>
                    <p class="table_row_email">Email</p>
                    <p class="table_row_phone">Phone</p>
                    <p class="table_row_actions">Actions</p>
                </div>
                <div class="table_content">
                    <?php 
                        $selectDataResult = mysqli_query($mysqlConnect, "SELECT * FROM users");

                        if (0 == $selectDataResult->num_rows) {
                            echo "<p class='table_empty_message'>Sorry, there is no data available.</p>";
                        } else {
                            while ($selectDataFetch = $selectDataResult->fetch_assoc()) {
                                echo "<div class='table_data'>
                                        <p class='table_row_name'>".$selectDataFetch['fname']." ". $selectDataFetch['lname']."</p>
                                        <p class='table_row_birthdate'>";
                                            switch ($selectDataFetch['bdmonth']) {
                                                case 1:
                                                    echo 'Jan';
                                                    break;
                                                case 2:
                                                    echo 'Feb';
                                                    break;
                                                case 3:
                                                    echo 'Mar';
                                                    break;
                                                case 4:
                                                    echo 'Apr';
                                                    break;
                                                case 5:
                                                    echo 'May';
                                                    break;
                                                case 6:
                                                    echo 'Jun';
                                                    break;
                                                case 7:
                                                    echo 'Jul';
                                                    break;
                                                case 8:
                                                    echo 'Aug';
                                                    break;
                                                case 9:
                                                    echo 'Sep';
                                                    break;
                                                case 10:
                                                    echo 'Oct';
                                                    break;
                                                case 11:
                                                    echo 'Nov';
                                                    break;
                                                case 12:
                                                    echo 'Dec';
                                                    break;
                                                
                                                default:
                                                    echo 'Err';
                                                    break;
                                            }
                                    echo " ".$selectDataFetch['bdday'].", ".$selectDataFetch['bdyear'].
                                    "</p>
                                    <p class='table_row_email'>".$selectDataFetch['email']."</p>
                                    <p class='table_row_phone'>".$selectDataFetch['phone']."</p>
                                    <div class='table_row_actions'>
                                        <svg class='table_row_actions_icon' viewBox='0 0 24 24' onclick='openEditForm(".$selectDataFetch['id'].", \"".$selectDataFetch['fname']."\", \"".$selectDataFetch['lname']."\", ".$selectDataFetch['bdmonth'].", ".$selectDataFetch['bdday'].", ".$selectDataFetch['bdyear'].", \"".$selectDataFetch['email']."\", \"".$selectDataFetch['phone']."\")'>
                                            <title>Edit</title>
                                            <path d='M19.769 9.923l-12.642 12.639-7.127 1.438 1.438-7.128 12.641-12.64 5.69 5.691zm1.414-1.414l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z' fill='var(--blue)'/>
                                        </svg>
                                        <svg class='table_row_actions_icon' viewBox='0 0 24 24' onclick='openDeleteConfirmation(".$selectDataFetch['id'].")'>
                                            <title>Delete</title>
                                            <path d='M19 24h-14c-1.104 0-2-.896-2-2v-16h18v16c0 1.104-.896 2-2 2m-9-14c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6 0c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6-5h-20v-2h6v-1.5c0-.827.673-1.5 1.5-1.5h5c.825 0 1.5.671 1.5 1.5v1.5h6v2zm-12-2h4v-1h-4v1z' fill='var(--red)'/>
                                        </svg>
                                    </div>
                                </div>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="table_row_actions_background"></div>
        </div>
    </section>
</body>
</html>