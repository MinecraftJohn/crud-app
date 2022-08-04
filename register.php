<?php
    session_start();
    if (!empty($_SESSION["sessionLoginEmail"])) {
        header("Location: account.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Crudhub</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <script src="assets/js/variables.js" defer></script>
    <script src="assets/js/index.js" defer></script>
    <script src="assets/js/navigation.js" defer></script>
</head>
<body>
    <?php include "navigation.php"; ?>
    <div class="app_section">
        <div class="app_form_message_container"></div>
        <div class="app_form_container">
            <h1 class="app_form_title">Register Account</h1>
            <form class="app_form" action="" method="POST">
                <div class="app_form_input_container">
                    <span class="app_form_input_label">Name</span>
                    <input class="app_form_input"
                    onfocus="registerInputFocus(formInputLabel[0], formInput[0])"
                    onblur="registerInputBlur(formInputLabel[0], formInput[0], formInputMessage[0])"
                    id="name" type="text" name="registerName">
                    <div class="app_form_input_msg_container">
                        <svg class="app_form_input_msg_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <p class="app_form_input_msg"></p>
                    </div>
                </div>
                <div class="app_form_input_container">
                    <span class="app_form_input_label">Email</span>
                    <input class="app_form_input"
                    onfocus="registerInputFocus(formInputLabel[1], formInput[1])"
                    onblur="registerInputBlur(formInputLabel[1], formInput[1], formInputMessage[1])"
                    id="email" type="text" name="registerEmail">
                    <div class="app_form_input_msg_container">
                        <svg class="app_form_input_msg_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <p class="app_form_input_msg"></p>
                    </div>
                </div>
                <div class="app_form_input_container">
                    <span class="app_form_input_label">Phone</span>
                    <input class="app_form_input"
                    onfocus="registerInputFocus(formInputLabel[2], formInput[2])"
                    onblur="registerInputBlur(formInputLabel[2], formInput[2], formInputMessage[2])"
                    id="phone" type="text" name="registerPhone">
                    <div class="app_form_input_msg_container">
                        <svg class="app_form_input_msg_icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg>
                        <p class="app_form_input_msg"></p>
                    </div>
                </div>
                <div class="app_form_submit_container">
                    <span class="app_form_switch_form">Already have an account? <a href="login.php">Login</a></span>
                    <span class="app_form_submit" onclick="formSubmitValidate()" tabindex="0">Register</span>
                    <button class="app_form_submit_button" name="registerSubmit" style="display: none;"></button>
                </div>
                <?php
                    include "_connect.php";

                    if (isset($_POST['registerSubmit'])) {
                        $registerName = $_POST['registerName'];
                        $registerEmail = $_POST['registerEmail'];
                        $registerPhone = $_POST['registerPhone'];

                        $registerCheckEmail = "SELECT email FROM employees WHERE email='$registerEmail'";
                        $registerCheckEmailResult = mysqli_query($mysqlConnect, $registerCheckEmail);

                        if (!$registerCheckEmailResult->num_rows > 0) {
                            $registerInsertData = "INSERT INTO employees (name, email, phone)
                                                   VALUES                ('$registerName', '$registerEmail', '$registerPhone');";
                            mysqli_query($mysqlConnect, $registerInsertData);
                            echo "<script>
                                    document.getElementsByClassName('app_form_message_container')[0].style.display = 'block';
                                    document.getElementsByClassName('app_form_message_container')[0].style.color = '#00c851';
                                    document.getElementsByClassName('app_form_message_container')[0].innerHTML = 'Registered successfully. Please login.';
                                  </script>";
                        } else {
                            echo "<script>
                                    document.getElementById('name').value = '$registerName';
                                    document.getElementById('email').value = '$registerEmail';
                                    document.getElementById('phone').value = '$registerPhone';
                                    document.getElementsByClassName('app_form_input_label')[0].style.fontSize = '12px';
                                    document.getElementsByClassName('app_form_input_label')[0].style.top = '-6px';
                                    document.getElementsByClassName('app_form_input_label')[0].style.color = '#1a73e8';
                                    document.getElementById('name').style.border = '#1a73e8 solid 1px';
                                    document.getElementsByClassName('app_form_input_label')[1].style.fontSize = '12px';
                                    document.getElementsByClassName('app_form_input_label')[1].style.top = '-6px';
                                    document.getElementsByClassName('app_form_input_label')[1].style.color = '#d93025';
                                    document.getElementById('email').style.border = '#d93025 solid 1px';
                                    document.getElementsByClassName('app_form_input_label')[2].style.fontSize = '12px';
                                    document.getElementsByClassName('app_form_input_label')[2].style.top = '-6px';
                                    document.getElementsByClassName('app_form_input_label')[2].style.color = '#1a73e8';
                                    document.getElementById('phone').style.border = '#1a73e8 solid 1px';
                                    document.getElementsByClassName('app_form_input_msg_container')[1].style.display = 'flex';
                                    document.getElementsByClassName('app_form_input_msg')[1].innerHTML = 'Email already exist. Try another one.';
                                  </script>";
                        }
                    }
                    
                ?>
            </form>
        </div>
    </div>
</body>
</html>