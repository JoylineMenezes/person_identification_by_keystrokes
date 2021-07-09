<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
    <title>Assignment Page</title>
    <link rel="stylesheet" href="assignment.css">

</head>

<body>

<h2>Assignment !</h2>

<p id="instructions"> Please take your time to write this assignment carefully. Wish you all the very best!</p>
<hr>
<p id="question">Write a small essay of 50 words about <span>Independence Day of India</span></p>
<hr>
<form action="assignment.php" method="post">
    <div class="answer_div">
        <textarea name="answer" rows="15" cols="80" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off placeholder="Write your essay here." id="answer" onclick="val()" ></textarea><br>
        <p id="error_message"></p>
    </div>
    <div class="submit_clear_div">
        <input type="submit" name="ans_submit" value="Submit the answer" id="ans_submit"><!-- submit button -->
        <input type="reset" name="ans_clear" value="Clear answer" id="ans_clear" onclick="reset()">
    </div>
</form>

<hr>
<?php
if(isset($_POST['ans_submit'])) {
    print (isset($_POST['submit']));
    $answer = $_POST['answer'];
    $a = str_word_count($answer);
    if (empty($answer)) {
        print '<script>    
                                var error = document.querySelector("#error_message")
                                error.innerHTML = "Type your answer!!!!!!"
                                error.style.color = "#00e676";
                    </script>';
    }
    elseif ($a < 50) {
        echo '<script>    
                                var error = document.querySelector("#error_message")
                                var ans = document.querySelector("#answer")    
                                error.innerHTML = "Type at-least 50 words !!!"
                                error.style.color = "#e0f2f1";
                                ans.value="' . $_POST['answer'] . '"
                                
                    </script>';
        $answer = "";
    } else {
        session_start();
        $user = $_SESSION['user'];
        $name = strstr($user, '@', true);
        #$file = fopen("$name.txt", "a");
        $myfile = fopen("assignments/$name.txt", "a+") or die("Unable to open file!");
        fwrite($myfile, $answer);
        fclose($myfile);
        print '<script>window.location.assign("logout.php");</script>';
    }
}
?>
<script type="text/javascript">

    function reset(){
        document.getElementById('answer').value="";
        document.getElementById('answer').innerHTML="";
        document.getElementById('error_message').value="";
        location.reload();
    }
    function home(){
        window.location = "assignment.php";
    }
    function val(){
        document.getElementById('answer').value=<?php $answer ?>
    }
    function keypress(){

    }


</script>
</body>
</html>
