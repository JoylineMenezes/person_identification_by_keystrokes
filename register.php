<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <?php
    $myfile = fopen("data.txt","w");
    fclose($myfile);

    ?>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Person Identification -  SigUp!</title>
    <link rel="stylesheet" href="speedCheck.css">
    <script src="speedCheck.js" async></script>
</head>
<body>
<!-- heading -->
<h2>SignUp Process</h2>
<p id="instructions">Please fill the below fields to register </p>

<hr>

<!-- box for email and password -->
<form class="signup_form " action="register.php" method="POST">
    <h3>SignUp form</h3>
    <label for="email" class="label-text">E-mail id:<br><input class="form-control" type="email" name="email" id="email" value="" required></label>
    <label for="password0" class="label-text">Enter Password:<br><input class="form-control" type="password" name="password0" id="password0" value="" required></label>
    <label for="confirm_password" class="label-text">Confirm Password:<br><input class="form-control" type="password" id="confirm_password" name="confirm_password" value="" required></label>
    <div class="label-text">
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Clear">
    </div>
    <p id="error_message"></p>
</form>
<hr>
</body>
</html>


<?php

if(isset($_POST['submit'])) {
    //print '<script>console.log("inside php");</script>';
    $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error()); //Connect to server
    mysqli_select_db($conn, "keystrokee") or die("Cannot connect to database"); //Connect to database


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['email'];
        $password = $_POST['password0'];
        $password2= $_POST['confirm_password'];
        $bool = true;
        session_start();
        $_SESSION['user'] = $username;

        if($password != $password2 )
        {
            $bool = false;
            print '<script>    
                                var error = document.querySelector("#error_message")
                                error.innerHTML = "password doesn\'t match"
                                error.style.color = "#00e676";
                    </script>';

        }
        $query = mysqli_query($conn, "Select * from users"); //Query the users table
        while ($row = mysqli_fetch_array($query)) //display all rows from query
        {
            $table_users = $row['email']; // the first username row is passed on to $table_users, and so on until the query is finished
            if ($username == $table_users) // checks if there are any matching fields
            {
                $bool = false;
                // sets bool to false
                print '<script> 
                                var error = document.querySelector("#error_message")   
                                error.innerHTML = "Username has been taken!"
                                error.style.color = "#00e676";
                    </script>'; //Prompts the user
            }
        }
        if ($bool) // checks if bool is true
        {
            mysqli_query($conn, "INSERT INTO users (email, password,done) VALUES ('$username','$password',0)");//Inserts the value to table users
            $_SESSION['user'] = $username;
            print '<script>console.log("succesfull registration")</script>';
            print '<script>    alert("Successfully Submitted!!");
                    </script>';
            Print '<script>window.location.assign("speedCheck.php");</script>';
            // Prompts the user

        }
    }
}
?>