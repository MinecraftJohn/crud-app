<?php
    include "_connect.php";
    function toastActivate($toastMessage) {
        echo "<script>
                document.getElementsByClassName('toastContainer')[0].style.display = 'block'
                document.getElementsByClassName('toastMessage')[0].innerHTML = '$toastMessage'
                function toastIn() {
                    if (window.matchMedia('(max-width: 767px)')) {
                        document.getElementsByClassName('toastContainer')[0].style.left = '2.5%'
                    } else {
                        document.getElementsByClassName('toastContainer')[0].style.left = '32px'
                    }
                    function toastFadeOut() {
                        document.getElementsByClassName('toastContainer')[0].style.opacity = '0'
                        function toastOut() {
                            document.getElementsByClassName('toastContainer')[0].style.display = 'none'
                        }
                        setTimeout(toastOut, 600)
                    }
                    setTimeout(toastFadeOut, 5000)
                }
                setTimeout(toastIn, 1000)
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
    <?php include "navigation.php" ?>
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
            <button class="table_add_new_button_mobile secondary_button border_radius" onclick="openAddNewForm()">+ &nbsp Add New</button>
        </div>
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
                    <p class="table_empty_message">Sorry, there is no data available.</p>
                    <?php 
                        $selectNameResult = mysqli_query($mysqlConnect, "SELECT * FROM users");
                        $selectNameFetch = mysqli_fetch_assoc($selectNameResult);

                        if (0 == $selectNameResult->num_rows) {
                            echo "<script>document.getElementsByClassName('table_empty_message')[0].style.display = 'flex'</script>";
                        } else {
                            for ($i=1; $i <= $selectNameResult->num_rows; $i++) { 
                                $selectDataFetch = mysqli_fetch_assoc(mysqli_query($mysqlConnect, "SELECT * FROM users WHERE id=$i;"));
                                if ($selectDataFetch['id'] == null) {
                                    # nothing xD
                                } else {
                                    echo "<div class='table_data'>
                                            <p class='table_row_name'>"
                                                .$selectDataFetch['fname']." ". $selectDataFetch['lname'].
                                            "</p>
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
                                            <p class='table_row_email'>"
                                                .$selectDataFetch['email'].
                                            "</p>
                                            <p class='table_row_phone'>"
                                                .$selectDataFetch['phone'].
                                            "</p>
                                            <div class='table_row_actions'>
                                                <svg class='table_row_actions_icon' viewBox='0 0 24 24'>
                                                    <title>Edit</title>
                                                    <path d='M19.769 9.923l-12.642 12.639-7.127 1.438 1.438-7.128 12.641-12.64 5.69 5.691zm1.414-1.414l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z' fill='#1a73e8'/>
                                                </svg>
                                                <svg class='table_row_actions_icon' viewBox='0 0 24 24'>
                                                    <title>Delete</title>
                                                    <path d='M19 24h-14c-1.104 0-2-.896-2-2v-16h18v16c0 1.104-.896 2-2 2m-9-14c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6 0c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6-5h-20v-2h6v-1.5c0-.827.673-1.5 1.5-1.5h5c.825 0 1.5.671 1.5 1.5v1.5h6v2zm-12-2h4v-1h-4v1z' fill='#e81123'/>
                                                </svg>
                                            </div>
                                        </div>";
                                }
                                
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="table_row_actions_background"></div>
        </div>
    </section>
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
                    <button class="secondary_button border_radius" id="add_submit_button" name="addSubmit">Submit</button>
                    <button class="secondary_button border_radius" id="edit_submit_button" name="editSubmit">Edit</button>
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
                        toastActivate("Successfully added!");
                    } else {
                        addRetrieveInput("An error has occurred!", 6);
                    }
                }
            ?>
        </form>
    </span>
</body>
</html>