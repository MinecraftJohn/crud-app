<?php
    session_start();
    if (empty($_SESSION["sessionLoginEmail"])) {
        header("Location: index.php");
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
                <button class="navLink navLinkButton">+ &nbsp Add New</button>
            </div>
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
                        include "_connect.php";
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
        </div>
    </div>
</body>
</html>