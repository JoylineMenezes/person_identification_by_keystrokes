<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Login_identification</title>
    <link rel="stylesheet" href="identification_login.css">
</head>
<?php $result = "No" ?>
<body>
<a href="logout.php">LOGOUT</a>
<!--?php echo $res . "<br>" . $res3 . "<br>" . $res4; ?-->
<div class="percentage_div">
    <!-- identification percentage -->
    <p id="percentage_value"><?php $result ?> NO </p>
</div> <!--percentage_div -->
<hr>

<!-- small line giving the description about the value of percentage -->
<p id="instructions">Description will be given from ML and javascript calculations</p>

<div class="proceed_home_div">
    <!-- you can proceed button, disabled initially -->
    <button type="button" name="proceed_button" id="proceed_button" onclick ="window.location.href= 'login_keystroke.php';"   disabled>You cannot Proceed!re enter the keystroke</button>

    <!-- go to home page button -->
    <button type="button" name="home_button" id="home_button">Go to Home page</button>
</div> <!--proceed_home_div-->
<hr><hr>

</body>
</html>

