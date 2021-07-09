<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Login_identification</title>
    <link rel="stylesheet" href="identification_login.css">
    <script type="text/javascript">
        function assign(){
            window.location = "assignment.php";
        }
    </script>
</head>
<!--?php $result = "Yes" ;
$user = $_SESSION['user']; //assigns user value
if(isset($_SESSION['str'])&& isset($_SESSION['strn'])&& isset($_SESSION['strm'])){
    $res=$_SESSION['str'];
    $resn=$_SESSION['strn'];
    $resm=$_SESSION['strm'];
}
?-->
<body>
<!--a href="logout.php" id="logout" >LOGOUT</a-->
<div class="percentage_div">
    <!-- identification percentage -->
    <p id="percentage_value"><!--?php $result ?--> YES </p>
</div> <!--percentage_div -->
<hr>

<p id="instructions">Description will be given from ML and javascript calculations</p>

<div class="proceed_home_div">
    <!-- you can proceed button, disabled initially -->
    <button type="button" name="proceed_button" id="proceed_button" onclick="assign()" >You can Proceed!</button>

    <!-- go to home page button -->
    <button type="button" name="home_button" id="home_button">Go to Home page</button>
</div> <!--proceed_home_div-->
<hr><hr>

</body>
</html>
