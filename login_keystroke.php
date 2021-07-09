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
<form  action="keystroke_verification.php" method="post" enctype="multipart/form-data">
    <h2>Keystroke Entry </h2>
    <p id="instructions">Please fill all the fields . It will play an important role in identifying you in the future!</p>

    <hr>

    <hr>

    <script>console.log("inside form")</script>

    <!-- read and type the passage1 -->
    <div class="read_and_type_the_passage1">
        <section class = "test-area1">
            <!--div class="original_text1">
                <p class="passage2">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area1"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off onkeyup="javascript:keypress('one')" name="textarea1" rows="7" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->
        </section></div>

    <hr>


    <!-- read and type the passage2 -->
    <div class="read_and_type_the_passage2">
        <section class="test-area2">
            <!--div class="original_text2">
                <p class="passage3">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area2" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=offonkeyup="javascript:keypress('two')" name="textarea2" rows="9" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->

        </section></div>

    <hr>

    <div class="read_and_type_the_passage3">
        <section class = "test-area3">
            <!--div class="original_text1">
                <p class="passage2">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area3"  onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=offonkeyup="javascript:keypress('three')" name="textarea3" rows="7" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->
        </section></div>

    <hr>
    <div class="read_and_type_the_passage4">
        <section class = "test-area4">
            <!--div class="original_text1">
                <p class="passage2">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area4"  onkeyup="javascript:keypress('four')" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=offname="textarea4" rows="7" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->
        </section></div>

    <hr>
    <div class="read_and_type_the_passage3">
        <section class = "test-area3">
            <!--div class="original_text1">
                <p class="passage2">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area4"  onkeyup="javascript:keypress('five')" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=offname="textarea5" rows="7" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->
        </section></div>

    <hr>
    <div class="read_and_type_the_passage3">
        <section class = "test-area3">
            <!--div class="original_text1">
                <p class="passage2">Enter your password</p>
            </div-->

            <div class="test-wrapper1">
                <textarea id="test-area4"  onkeyup="javascript:keypress('six')" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off name="textarea6" rows="7" cols="66" placeholder="Enter your password"></textarea>
            </div><!-- .test-wrapper -->
        </section></div>

    <hr>

    <!-- thank you! -->

    <div class="footer">
        <h3 class="thankyou">Thank You!</h3>
        <p id="last">We thank you for patiently participating in the  process. <br>Please click <span>'Final Submit'</span> button for your response to get recorded.</p>
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
            window.location.href="login_keystroke.php";

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

