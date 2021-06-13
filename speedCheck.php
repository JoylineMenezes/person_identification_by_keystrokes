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
<?php
session_start(); //starts the session
if($_SESSION['user']){ //checks if user is logged in
    print '<script>console.log("session started");</script>';
}
else{
    header("location:loginForm.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>
<body>
<form  action="validate.php" method="post" enctype="multipart/form-data>
<!-- heading -->
<h2>SignUp Process</h2>
<p id="instructions">Please fill all the fields as per the instructions. It will play an important role in identifying you in the future!</p>

<hr>

<hr>

    <script>console.log("inside form")</script>
    <!-- password typing speed1 -->
<!-- read and type the passage1 -->
<div class="read_and_type_the_passage1">
    <!--h3>Read and Type the Passage 1</h3>
    <p class="t1">This is a typing test. This test is performed to calculate your typing speed. </p>
    <p class="t1">Instructions:<br>Your goal is to duplicate the provided text, <span>EXACTLY</span>, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p-->
    <section class = "test-area1">
        <div class="timings2">
            <!--timer starts from here -->
            <section id="clock2" class="label-text">
                <div class="timer2">00:00:00</div>
            </section>
            <button id="reset2" class="label-text">RESET</button>
        </div>

        <div class="original_text1">
            <p class="passage2">Enter your password</p>
        </div>

        <div class="test-wrapper1">
            <textarea id="test-area1"  onkeyup="javascript:keypress('one')" name="textarea1" rows="7" cols="66" placeholder="The clock starts when you start typing."></textarea>
        </div><!-- .test-wrapper -->
</div>

<hr>


<!-- read and type the passage2 -->
<div class="read_and_type_the_passage2">
    <!--h3>Read and Type the Passage 2</h3>
    <p class="t1">This is a typing test. This test is performed to calculate your typing speed. </p>
    <p class="t1">Instructions:<br>Your goal is to duplicate the provided text, <span>EXACTLY</span>, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p-->
    <section class="test-area2">
        <div class="timings3">
            <!--timer starts from here -->
            <section id="clock3" class="label-text">
                <div class="timer3">00:00:00</div>
            </section>
            <button id="reset3" class="label-text">RESET</button>
        </div>

        <div class="original_text2">
            <p class="passage3">Enter your password</p>
        </div>

        <div class="test-wrapper2">
            <textarea id="test-area2" onkeyup="javascript:keypress('two')" name="textarea2" rows="9" cols="66" placeholder="The clock starts when you start typing."></textarea>
        </div><!-- .test-wrapper -->

    </section></div>

<hr>

<div class="read_and_type_the_passage3">
    <!--h3>Read and Type the Passage 3</h3>
    <p class="t1">This is a typing test. This test is performed to calculate your typing speed. </p>
    <p class="t1">Instructions:<br>Your goal is to duplicate the provided text, <span>EXACTLY</span>, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p-->
    <section class = "test-area1">
        <div class="timings2">
            <!--timer starts from here -->
            <section id="clock7" class="label-text">
                <div class="timer2">00:00:00</div>
            </section>
            <button id="reset7" class="label-text">RESET</button>
        </div>

        <div class="original_text1">
            <p class="passage2">Enter your password</p>
        </div>

        <div class="test-wrapper1">
            <textarea id="test-area3"  onkeyup="javascript:keypress('three')" name="textarea3" rows="7" cols="66" placeholder="The clock starts when you start typing."></textarea>
        </div><!-- .test-wrapper -->
</div>

<hr>
<div class="read_and_type_the_passage4">
    <!--h3>Read and Type the Passage 4</h3>
    <p class="t1">This is a typing test. This test is performed to calculate your typing speed. </p>
    <p class="t1">Instructions:<br>Your goal is to duplicate the provided text, <span>EXACTLY</span>, in the field below. The timer starts when you start typing, and only stops when you match this text exactly. Good Luck!</p-->
    <section class = "test-area1">
        <div class="timings2">
            <!--timer starts from here -->
            <section id="clock8" class="label-text">
                <div class="timer2">00:00:00</div>
            </section>
            <button id="reset8" class="label-text">RESET</button>
        </div>

        <div class="original_text1">
            <p class="passage2">Enter your password</p>
        </div>

        <div class="test-wrapper1">
            <textarea id="test-area4"  onkeyup="javascript:keypress('four')" name="textarea4" rows="7" cols="66" placeholder="The clock starts when you start typing."></textarea>
        </div><!-- .test-wrapper -->
</div>

<hr>


<!-- thank you! -->

<div class="footer">
    <h3 class="thankyou">Thank You!</h3>
    <p id="last">We thank you for patiently participating in the SignUp process. <br>Please click <span>'Final Submit'</span> button for your response to get recorded.</p>
    <div class="lastbutton">
        <!--?php $_SESSION['user'] = $username; ?-->
        <button type="submit" name="Submit"  id="final_submit">Final Submit</button>
        <button type="button" name="button" id="cancel_all">Cancel</button>
    </div>
</div>

<hr><hr>
</form>
</section>
<script type="text/javascript">
    var diff = new Array(7);
    var i=new Array(7),d,x,curr=0;
    for (var k = 0; k < 7; k++) {
        diff[k] = new Array(100);
        //s[k]=new Array(100);
        i[k]=0;
    }
    function keypress (d)
    {
        //var x=document.getElementById(d);
        var evt = event || e; // for trans-browser compatibility
        var charCode = evt.which || evt.keyCode;
        d=new Date();
        curr=d.getTime();
        if(charCode==8)
        {
            alert('do not press backspace');
            window.location.href="speedCheck.php";

        }
        else if(charCode!=9)
        {
            x+=" "+curr;
            console.log(x);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "print.php?r=" + curr, true);
            xmlhttp.send();
        }
    }
</script>
</body>
</html>
