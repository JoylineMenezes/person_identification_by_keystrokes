<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Login_identification</title>
    <link rel="stylesheet" href="identification_login.css">
    <script type="text/javascript">
        function buttonclick(){
            window.location="logout.php"
        }
        function buttonn(){
            window.location="login_keystroke.php"
        }

    </script>
</head>
<?php
session_start();
$result = "No" ?>
<body>
<div class="percentage_div">
    <p id="percentage_value"><?php $result ?> NO </p>
</div>
<hr>

<p id="instructions">Description will be given from ML and javascript calculations</p>

<div class="proceed_home_div">

    <button type="button" name="proceed_button" id="proceed_button" onclick="buttonn()"  >Re- enter Keystroke</button>

    <button type="button" name="home_button" id="home_button" onclick="buttonclick()">logout</button>
</div>
<hr><hr>

</body>
</html>

