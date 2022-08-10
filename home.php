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
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <p style="color: #5f6368; font-weight: 500">Fictitious Employees</p>
                <button class="navLink navLinkButton">+ &nbsp Add New</button>
            </div>
            <div class="homeTipContainer homeTableContainer">
                <div class="tableContainerTitles">
                    <p class="tableTitles" style="width: 132px">Name</p>
                    <p class="tableTitles" style="width: 124px">Birthdate</p>
                    <p class="tableTitles" style="width: 48px">Gender</p>
                    <p class="tableTitles" style="width: 84px">Phone</p>
                    <p class="tableTitles" style="width: 142px">Title</p>
                    <p class="tableTitles" style="width: 64px">Actions</p>
                </div>
                <?php 
                    include "_connect.php";
                    $selectName = "SELECT * FROM fictitious_employees";
                    $selectNameResult = mysqli_query($mysqlConnect, $selectName);
                    $selectNameFetch = mysqli_fetch_assoc($selectNameResult);

                    for ($i=1; $i <= $selectNameResult->num_rows; $i++) { 
                        $selectData = "SELECT * FROM fictitious_employees WHERE id=$i;";
                        $selectDataResult = mysqli_query($mysqlConnect, $selectData);
                        $selectDataFetch = mysqli_fetch_assoc($selectDataResult);
                        switch ($selectNameFetch['bdmonth']) {
                            case 1:
                                echo "January";
                                break;
                            case 2:
                                echo "February";
                                break;
                            case 3:
                                echo "March";
                                break;
                            case 4:
                                echo "April";
                                break;
                            case 5:
                                echo "May";
                                break;
                            case 6:
                                echo "June";
                                break;
                            case 7:
                                echo "July";
                                break;
                            case 8:
                                echo "August";
                                break;
                            case 9:
                                echo "September";
                                break;
                            case 10:
                                echo "October";
                                break;
                            case 11:
                                echo "November";
                                break;
                            case 12:
                                echo "December";
                                break;
                            
                            default:
                                echo "Invalid month!";
                                break;
                        }
                        echo "<div class='tableContainerTitles'>
                                <p class='tableData' style='width: 132px'>"
                                    .$selectDataFetch['fname']." ". $selectDataFetch['lname']."
                                </p>
                              </div>";
                    }
                ?>
                <div class="tableContainerTitles">
                    <p class="tableData" style="width: 132px">
                        <?php echo $selectNameFetch['fname']." ".$selectNameFetch['lname']; ?>
                    </p>
                    <p class="tableData" style="width: 124px">
                        <?php
                            switch ($selectNameFetch['bdmonth']) {
                                case 1:
                                    echo "January";
                                    break;
                                case 2:
                                    echo "February";
                                    break;
                                case 3:
                                    echo "March";
                                    break;
                                case 4:
                                    echo "April";
                                    break;
                                case 5:
                                    echo "May";
                                    break;
                                case 6:
                                    echo "June";
                                    break;
                                case 7:
                                    echo "July";
                                    break;
                                case 8:
                                    echo "August";
                                    break;
                                case 9:
                                    echo "September";
                                    break;
                                case 10:
                                    echo "October";
                                    break;
                                case 11:
                                    echo "November";
                                    break;
                                case 12:
                                    echo "December";
                                    break;
                                
                                default:
                                    echo "Invalid month!";
                                    break;
                            }
                            echo " ".$selectNameFetch['bdday'].", ".$selectNameFetch['bdyear'];
                        ?>
                    </p>
                    <p class="tableData" style="width: 48px">
                        <?php
                            if ($selectNameFetch['gender'] == 0) {
                                echo "Female";
                            } else if ($selectNameFetch['gender'] == 1) {
                                echo "Male";
                            }
                            
                        ?>
                    </p>
                    <p class="tableData" style="width: 84px">
                        <?php echo $selectNameFetch['phone']; ?>
                    </p>
                    <p class="tableData" style="width: 142px">
                        <?php echo $selectNameFetch['title']; ?>
                    </p>
                    <p class="tableData" style="width: 64px">✎ 🗑</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>