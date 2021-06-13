
<html>
<?php
session_start(); //starts the session
if($_SESSION['user']){ //checks if user is logged in
}
else{
    header("location:loginForm.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
if(isset($_SESSION['str'])&& isset($_SESSION['strn'])&& isset($_SESSION['strm'])){
    $res=$_SESSION['str'];
    $resn=$_SESSION['strn'];
    $resm=$_SESSION['strm'];
}
?>
<body>
<a href="logout.php">LOGOUT</a>
<div id="euc" class="tab-pane fade ">
    <h3>Euclidian</h3>
    <?php Print "$res"; ?>

</div>
<div id="man" class="tab-pane fade">
    <h3>Manhattan model</h3>
    <?php Print "$resn" ?>
</div>
<div id="med" class="tab-pane fade">
    <h3>Manhattan model using median </h3>
<?php Print "$resm" ?>

    <?php
    $count=0;
    if(isset($_SESSION['str'])){
        if(strpos($res, "yes")!==false)
            $count=$count+1;
        if(strpos($resn, "yes")!==false)
            $count=$count+1;
        if(strpos($resm, "yes")!==false)
            $count=$count+1;

        Print "The input has passed ".$count." out of three predictive algorithms";
        //if(strpos($res, "yes")!==false ||( strpos($resn, "yes")!==false &&strpos($resm, "yes")!==false))
        if ($count>=1)
            Print "<br>It has passed the ensemble criteria!!Yippe!!";
        else
            Print "<br>It has failed the ensemble criteria! Sorry";
    }
    else{
        Print "Enter your keystroke";
    }
    ?>
</div>
</body>
</html>
