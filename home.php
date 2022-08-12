<?php
    session_start();
    if (empty($_SESSION["sessionLoginEmail"])) {
        header("Location: index.php");
    }
    include "_connect.php";
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
                                    <select name="" id="" class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewDateofBirthMonth"
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
                                    <select name="" id="" class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewDateofBirthDay"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[3])" onblur="addNewInputBlur(tableAddNewFormInput[3])">
                                        <option>Day</option>
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        <option >6</option>
                                        <option >7</option>
                                        <option >8</option>
                                        <option >9</option>
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
                                    <select name="" id="" class="tableAddNewFormInput tableAddNewFormInputSelect" name="addNewGender"
                                    onfocus="addNewInputFocus(tableAddNewFormInput[5])" onblur="addNewInputBlur(tableAddNewFormInput[5])">
                                        <option value="2"></option>
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
                                <span class="navLink navLinkButton" style="text-align: center" onclick="addNewSubmitValidate()" tabindex="0">Submit</span>
                                <button class="addNewSubmitButton" name="addNewSubmit" style="display: none">Add New Submit</button>
                            </div>
                            <?php
                                if (isset($_POST['addNewSubmit'])) {
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

                                    if (!$addNewSelectionResult->num_rows > 0) {
                                        $addNewInsertData = "INSERT INTO fictitious_employees (owner, fname, lname, bdmonth, bdday, bdyear, gender, phone, title)
                                                             VALUES                           ('$addNewOwner', '$addNewFirstName', '$addNewLastName', '$addNewDateofBirthMonth', '$addNewDateofBirthDay', '$addNewDateofBirthYear', '$addNewGender', '$addNewPhone', '$addNewEmployeeTitle');";
                                        mysqli_query($mysqlConnect, $addNewInsertData);
                                        echo "<script>console.log('Successfully Added!')</script>";
                                    } else {
                                        echo $addNewPhone;
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
                                        echo 'Invalid month!';
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
                                    <p class='tableData tableRowActions'>✎ 🗑</p>
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