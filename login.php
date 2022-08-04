<?php
    session_start();
    if (!empty($_SESSION["sessionLoginEmail"])) {
        header("Location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Crudhub</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/variables.js" defer></script>
    <script src="assets/js/login.js" defer></script>
    <script src="assets/js/navigation.js" defer></script>
</head>
<body>
    <?php include "navigation.php"; ?>
    <div class="app_section">
        <div class="app_form_container">
            <h1 class="app_form_title">Login Account</h1>
            <form class="app_form" action="" method="POST">
                <div class="app_form_input_container">
                    <span class="app_form_input_label">Email</span>
                    <input class="app_form_input" 
                    onfocus="loginInputFocus(formInputLabel[0], formInput[0])"
                    onblur="loginInputBlur(formInputLabel[0], formInput[0], formInputMessage[0])"
                    id="email" type="text" name="loginEmail">
                    <div class="app_form_input_msg_container">
                        <svg class="app_form_input_msg_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <p class="app_form_input_msg"></p>
                    </div>
                </div>
                <div class="app_form_submit_container">
                    <span class="app_form_switch_form">Don't have an account? <a href="register.php">Register</a></span>
                    <button class="app_form_submit app_form_submit_button" name="loginSubmit">Login</button>
                </div>
                <?php
                    include "_connect.php";

                    if (isset($_POST['loginSubmit'])) {
                        $loginEmail = $_POST['loginEmail'];

                        $loginCheckEmail = "SELECT email FROM employees WHERE email='$loginEmail'";
                        $loginCheckEmailResult = mysqli_query($mysqlConnect, $loginCheckEmail);

                        if ($loginCheckEmailResult->num_rows > 0) {
                            $_SESSION["sessionLoginEmail"] = "$loginEmail";
                            echo "<script>window.location.href = 'home.php'</script>";
                        } else {
                            echo "<script>
                                    document.getElementsByClassName('app_form_input_label')[0].style.color = '#d93025';
                                    document.getElementsByClassName('app_form_input')[0].style.border = '#d93025 solid 1px';
                                    document.getElementsByClassName('app_form_input_msg_container')[0].style.display = 'flex';
                                    document.getElementsByClassName('app_form_input_msg')[0].innerHTML = 'Incorrect email. Try again.';
                                  </script>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>