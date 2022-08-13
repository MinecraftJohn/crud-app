<?php
    session_start();
    if (empty($_SESSION["sessionLoginEmail"])) {
        header("Location: index.php");
    }
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/js/variables.js" defer></script>
    <script src="assets/js/navigation.js" defer></script>
    <script src="assets/js/home.js" defer></script>
</head>
<body>
    <?php include "navigation.php"; ?>
    <div class="toastContainer">
        <svg viewBox="0 0 80 80" fill="none" class="toastIcon">
            <circle cx="40" cy="40" r="40" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M64 27.5367L58.4633 22L33.475 46.9884L21.5367 35.05L16 40.5867L33.473 58.0597L35.8898 55.643L35.8917 55.645L64 27.5367Z" fill="#04844b"/>
        </svg>
        <p class="toastMessage"></p>
    </div>
    <div class="homeSection">
        <div class="homeListSection">
            <h1 class="headerTitle">Hello there, welcome to crudhub.</h1>
            <div class="homeTipContainer">
                <p>Do you already know what C.R.U.D means?
                <a href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete"
                target="_blank" rel="noopener noreferrer" style="color: #1a73e8; text-decoration: none;">Learn here!</a></p>
            </div>
            <div class="tableHeaderContainer">
                <p style="color: #5f6368; font-weight: 500">Fictitious Employees</p>
                <button class="navLink navLinkButton" onclick="addNewEmployeeFadein()">+ &nbsp Add New</button>
                <div class="tableAddNewBackground">
                    <div class="tableAddNewContainer">
                        <div class="tableAddNewHeader">
                            <p class="tableAddNewTitle">Add New Employee</p>
                            <div class="tableAddNewClose" onclick="addNewEmployeeFadeout()">&times;</div>
                        </div>
                        <form class="tableAddNewForm" method="post">
                            <div class="tableAddNewFormFullNameContainer">
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel">Name</label><br>
                                    <input type="text" class="tableAddNewFormInput" placeholder="First Name" name="addNewFirstName"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[0])" onblur="addNewInputBlur(tableAddNewFormInput[0])">
                                </div>
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel"></label><br>
                                    <input type="text" class="tableAddNewFormInput" placeholder="Last Name" name="addNewLastName"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[1])" onblur="addNewInputBlur(tableAddNewFormInput[1])">
                                </div>
                            </div>
                            <div class="tableAddNewFormFullNameContainer">
                                <div class="tableAddNewFormNameContainer">
                                    <label for="" class="tableAddNewFormLabel">Date of Birth</label><br>
                                    <select class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewDateofBirthMonth"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[2])" onblur="addNewInputBlur(tableAddNewFormInput[2])">
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
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel"></label><br>
                                    <select class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewDateofBirthDay"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[3])" onblur="addNewInputBlur(tableAddNewFormInput[3])">
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
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel"></label><br>
                                    <input type="text" class="tableAddNewFormInput" placeholder="Year" name="addNewDateofBirthYear"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[4])" onblur="addNewInputBlur(tableAddNewFormInput[4])">
                                </div>
                            </div>
                            <div class="tableAddNewFormFullNameContainer">
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel">Gender</label><br>
                                    <select class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewGender"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[5])" onblur="addNewInputBlur(tableAddNewFormInput[5])">
                                        <option value="2">Select</option>
                                        <option value="0">Female</option>
                                        <option value="1">Male</option>
                                    </select>
                                </div>
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel">Phone</label><br>
                                    <input type="text" class="tableAddNewFormInput" placeholder="09xx xxx xxxx" name="addNewPhone"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[6])" onblur="addNewInputBlur(tableAddNewFormInput[6])">
                                </div>
                            </div>
                            <div class="tableAddNewFormFullNameContainer">
                                <div class="tableAddNewFormNameContainer">
                                    <label class="tableAddNewFormLabel">Employee Title</label><br>
                                    <input type="text" class="tableAddNewFormInput" placeholder="e.g: Supervisor" name="addNewEmployeeTitle"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[7])" onblur="addNewInputBlur(tableAddNewFormInput[7])">
                                </div>
                            </div>
                            <div class="app_form_input_msg_container">
                                <svg class="app_form_input_msg_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                                <p class="app_form_input_msg"></p>
                            </div>
                            <div class="tableAddNewFormSubmitContainer">
                                <button class="navLink navLinkButton" name="addNewSubmit">Submit</button>
                            </div>
                            <?php
                                if (isset($_POST['addNewSubmit'])) {
                                    function addNewRetrieveInput($addNewErrorMsg, $addNewErrorNumber) {
                                        $addNewOwner = $_SESSION['sessionLoginEmail'];
                                        $addNewFirstName = $_POST['addNewFirstName'];
                                        $addNewLastName = $_POST['addNewLastName'];
                                        $addNewDateofBirthMonth = $_POST['addNewDateofBirthMonth'];
                                        $addNewDateofBirthDay = $_POST['addNewDateofBirthDay'];
                                        $addNewDateofBirthYear = $_POST['addNewDateofBirthYear'];
                                        $addNewGender = $_POST['addNewGender'];
                                        $addNewPhone = $_POST['addNewPhone'];
                                        $addNewEmployeeTitle = $_POST['addNewEmployeeTitle'];
                                        echo "<script>
                                                document.getElementsByClassName('tableAddNewBackground')[0].style.display = 'flex'
                                                document.getElementsByClassName('tableAddNewFormInput')[0].value = '$addNewFirstName'
                                                document.getElementsByClassName('tableAddNewFormInput')[1].value = '$addNewLastName'
                                                document.getElementsByClassName('tableAddNewFormInput')[2].value = '$addNewDateofBirthMonth'
                                                document.getElementsByClassName('tableAddNewFormInput')[3].value = '$addNewDateofBirthDay'
                                                document.getElementsByClassName('tableAddNewFormInput')[4].value = '$addNewDateofBirthYear'
                                                document.getElementsByClassName('tableAddNewFormInput')[5].value = '$addNewGender'
                                                document.getElementsByClassName('tableAddNewFormInput')[6].value = '$addNewPhone'
                                                document.getElementsByClassName('tableAddNewFormInput')[7].value = '$addNewEmployeeTitle'
                                                document.getElementsByClassName('app_form_input_msg_container')[0].style.display = 'flex'
                                                document.getElementsByClassName('app_form_input_msg')[0].innerHTML = '$addNewErrorMsg'
                                                document.getElementsByClassName('tableAddNewFormInput')[$addNewErrorNumber].style.border = '#d93025 solid 1px'
                                            </script>";
                                    }

                                    $addNewOwner = $_SESSION['sessionLoginEmail'];
                                    $addNewFirstName = $_POST['addNewFirstName'];
                                    $addNewLastName = $_POST['addNewLastName'];
                                    $addNewDateofBirthMonth = $_POST['addNewDateofBirthMonth'];
                                    $addNewDateofBirthDay = $_POST['addNewDateofBirthDay'];
                                    $addNewDateofBirthYear = $_POST['addNewDateofBirthYear'];
                                    $addNewGender = $_POST['addNewGender'];
                                    $addNewPhone = $_POST['addNewPhone'];
                                    $addNewEmployeeTitle = $_POST['addNewEmployeeTitle'];
                                    
                                    $addNewSelection = "SELECT phone FROM fictitious_employees WHERE phone='$addNewPhone'";
                                    $addNewSelectionResult = mysqli_query($mysqlConnect, $addNewSelection);

                                    if ($addNewFirstName == "") {
                                        addNewRetrieveInput("First Name field is required", 0);
                                    } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $addNewFirstName)) {
                                        addNewRetrieveInput("Make sure first letter is capital on First Name field", 0);
                                    } else if ($addNewLastName == "") {
                                        addNewRetrieveInput("Last Name field is required", 1);
                                    } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $addNewLastName)) {
                                        addNewRetrieveInput("Make sure first letter is capital on Last Name field", 1);
                                    } else if ($addNewDateofBirthMonth == "Month") {
                                        addNewRetrieveInput("Your date of birth is invalid", 2);
                                    } else if ($addNewDateofBirthDay == "Day") {
                                        addNewRetrieveInput("Your date of birth is invalid", 3);
                                    } else if ($addNewDateofBirthYear == "") {
                                        addNewRetrieveInput("Date of Birth (Year) field is required", 4);
                                    } else if ($addNewDateofBirthYear < 1957 || $addNewDateofBirthYear > 2003) {
                                        addNewRetrieveInput("Employee must be around 18-65 years old only", 4);
                                    } else if ($addNewPhone == "") {
                                        addNewRetrieveInput("Phone number is required", 6);
                                    } else if (!preg_match("/^[0-9]*$/", $addNewPhone)) {
                                        addNewRetrieveInput("Only numbers are allowed", 6);
                                    } else if (strlen($_POST['addNewPhone']) != 11) {
                                        addNewRetrieveInput("Invalid phone number", 6);
                                    } else if (!preg_match("/(09[0-9]{9})/", $addNewPhone)) {
                                        addNewRetrieveInput("Invalid phone number", 6);
                                    } else if ($addNewEmployeeTitle == "") {
                                        addNewRetrieveInput("Employee title is required", 7);
                                    } else if (!preg_match("/([A-ZÑ][a-z-ñ.]+)$/", $addNewEmployeeTitle)) {
                                        addNewRetrieveInput("Make sure first letter is capital on Employee Title field", 7);
                                    } else if (!$addNewSelectionResult->num_rows > 0) {
                                        $addNewInsertData = "INSERT INTO fictitious_employees (owner, fname, lname, bdmonth, bdday, bdyear, gender, phone, title)
                                                             VALUES ('$addNewOwner', '$addNewFirstName', '$addNewLastName', '$addNewDateofBirthMonth', '$addNewDateofBirthDay', '$addNewDateofBirthYear', '$addNewGender', '$addNewPhone', '$addNewEmployeeTitle');";
                                        mysqli_query($mysqlConnect, $addNewInsertData);
                                        toastActivate("Successfully added!");
                                    } else {
                                        addNewRetrieveInput("Phone number already exist", 6);
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="homeTableSection">
                <div class="homeTipContainer homeTableContainer">
                    <div class="tableContainer tableContainerTitles">
                        <p class="tableTitles tableRowName">Name</p>
                        <p class="tableTitles tableRowBirthdate">Birthdate</p>
                        <p class="tableTitles tableRowGender">Gender</p>
                        <p class="tableTitles tableRowPhone">Phone</p>
                        <p class="tableTitles tableRowTitle">Title</p>
                        <p class="tableTitles tableRowActions">Actions</p>
                    </div>
                    <div class="tableDataContainer">
                        <?php 
                            $selectName = "SELECT * FROM fictitious_employees";
                            $selectNameResult = mysqli_query($mysqlConnect, $selectName);
                            $selectNameFetch = mysqli_fetch_assoc($selectNameResult);

                            for ($i=1; $i <= $selectNameResult->num_rows; $i++) { 
                                $selectData = "SELECT * FROM fictitious_employees WHERE id=$i;";
                                $selectDataResult = mysqli_query($mysqlConnect, $selectData);
                                $selectDataFetch = mysqli_fetch_assoc($selectDataResult);
                                echo "<div class='tableContainer'>
                                        <p class='tableData tableRowName'>"
                                            .$selectDataFetch['fname']." ". $selectDataFetch['lname'].
                                        "</p>
                                        <p class='tableData tableRowBirthdate'>";
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
                                        <p class='tableData tableRowGender'>";
                                if ($selectDataFetch['gender'] == 0) {
                                    echo 'Female';
                                } else if ($selectDataFetch['gender'] == 1) {
                                    echo 'Male';
                                } else {
                                    echo 'Others';
                                }
                                echo "</p>
                                    <p class='tableData tableRowPhone'>"
                                        .$selectDataFetch['phone'].
                                    "</p>
                                    <p class='tableData tableRowTitle'>"
                                        .$selectDataFetch['title'].
                                    "</p>
                                    <div class='tableData tableRowActions'>
                                        <svg class='tableRowActionsIcon' viewBox='0 0 24 24'>
                                            <title>Edit</title>
                                            <path d='M19.769 9.923l-12.642 12.639-7.127 1.438 1.438-7.128 12.641-12.64 5.69 5.691zm1.414-1.414l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z' fill='#1a73e8'/>
                                        </svg>
                                        &nbsp
                                        <svg class='tableRowActionsIcon' viewBox='0 0 24 24'>
                                            <title>Delete</title>
                                            <path d='M19 24h-14c-1.104 0-2-.896-2-2v-16h18v16c0 1.104-.896 2-2 2m-9-14c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6 0c0-.552-.448-1-1-1s-1 .448-1 1v9c0 .552.448 1 1 1s1-.448 1-1v-9zm6-5h-20v-2h6v-1.5c0-.827.673-1.5 1.5-1.5h5c.825 0 1.5.671 1.5 1.5v1.5h6v2zm-12-2h4v-1h-4v1z' fill='#e81123'/>
                                        </svg>
                                    </div>
                                    </div>";
                            }
                        ?>
                    </div>
                </div>
                <div class="tableRowActionsMobileBackground"></div>
            </div>
        </div>
    </div>
</body>
</html>