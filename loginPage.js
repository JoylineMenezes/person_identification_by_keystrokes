
//-------------------------login page javascript------------------------------------

//*******submit form**********

//1. take the value from the input
var login_form = document.querySelector(".login_form");
var login_submit = document.querySelector("log_submit");
var error = document.querySelector("#login_error_message")
var login_email;
var login_password;

//2. get signup values from the local storage
var locEmail = localStorage.getItem("localEmail");
var locPassword = localStorage.getItem("localPassword");
console.log(locEmail);
console.log(locPassword);

//event to occur when the submit is clicked
login_form.addEventListener('submit', function(event){
  event.preventDefault(); //prevents the form from auto submitting
  login_email = document.getElementById("login_email").value;
  login_password = document.getElementById("login_password").value;

  console.log(login_email);
  console.log(login_password);

  //3. Compare the signup values with that of login values
  if(locEmail == login_email && locPassword == login_password){
    error.innerHTML = "You are logged in!!"
      error.style.color = "#00e676";
  }
  else{
    error.innerHTML = " We do not know you!!!";
    error.style.color = "#b71c1c";
  }
});

//************read and type passage 1 **********************

const testWrapper1 = document.querySelector(".login_test-wrapper1");
const testArea1 = document.querySelector("#login_test-area1");
const originalText1 = document.querySelector(".login_original_text1 p").innerHTML;
const resetButton1 = document.querySelector("#login_reset1");
const theTimer1 = document.querySelector(".login_timer1");

var login_typing1_time = " ";
var timer1 = [0,0,0,0];
var interval1;
var timerRunning1= false;

// Add leading zero to numbers 9 or below (purely for aesthetics):
function leadingZero(time) {
    if (time <= 9) {
        time = "0" + time;
    }
    return time;
}

// Run a standard minute/second/hundredths timer:
function runTimer1() {
    let currentTime1 = leadingZero(timer1[0]) + ":" + leadingZero(timer1[1]) + ":" + leadingZero(timer1[2]);
    theTimer1.innerHTML = currentTime1;
    timer1[3]++;

    timer1[0] = Math.floor((timer1[3]/100)/60);
    timer1[1] = Math.floor((timer1[3]/100) - (timer1[0] * 60));
    timer1[2] = Math.floor(timer1[3] - (timer1[1] * 100) - (timer1[0] * 6000));
}

// Match the text entered with the provided text on the page:
function spellCheck1() {
    let textEntered1 = testArea1.value;
    let originTextMatch1 = originalText1.substring(0,textEntered1.length);

    if (textEntered1 == originalText1) {
      login_typing1_time = theTimer1.innerHTML;
      // console.log("HAHAHAHAHAHAHAHAHAHA");
      console.log(login_typing1_time);
        clearInterval(interval1);
        testWrapper1.style.borderColor = "#429890";
    } else {
        if (textEntered1 == originTextMatch1) {
            testWrapper1.style.borderColor = "#65CCf3";
        } else {
            testWrapper1.style.borderColor = "#E95D0F";
        }
    }

}

// Start the timer:
function start1() {
    let textEnterdLength1 = testArea1.value.length;
    if (textEnterdLength1 === 0 && !timerRunning1) {
        timerRunning1 = true;
        interval1 = setInterval(runTimer1, 10);
    }
    console.log(textEnterdLength1);
}

// Reset everything:
function reset1() {
    clearInterval(interval1);
    interval1 = null;
    timer1 = [0,0,0,0];
    timerRunning1 = false;

    testArea1.value = "";
    theTimer1.innerHTML = "00:00:00";
    testWrapper1.style.borderColor = "grey";
}

// Event listeners for keyboard input and the reset
testArea1.addEventListener("keypress", start1, false);
testArea1.addEventListener("keyup", spellCheck1, false);
resetButton1.addEventListener("click", reset1, false);

//************read and type passage 2 **********************

const testWrapper2 = document.querySelector(".login_test-wrapper2");
const testArea2 = document.querySelector("#login_test-area2");
const originalText2 = document.querySelector(".login_original_text2 p").innerHTML;
const resetButton2 = document.querySelector("#login_reset2");
const theTimer2 = document.querySelector(".login_timer2");

var login_typing2_time = " ";
var timer2 = [0,0,0,0];
var interval2;
var timerRunning2= false;

// Run a standard minute/second/hundredths timer:
function runTimer2() {
    let currentTime2 = leadingZero(timer2[0]) + ":" + leadingZero(timer2[1]) + ":" + leadingZero(timer2[2]);
    theTimer2.innerHTML = currentTime2;
    timer2[3]++;

    timer2[0] = Math.floor((timer2[3]/100)/60);
    timer2[1] = Math.floor((timer2[3]/100) - (timer2[0] * 60));
    timer2[2] = Math.floor(timer2[3] - (timer2[1] * 100) - (timer2[0] * 6000));
}

// Match the text entered with the provided text on the page:
function spellCheck2() {
    let textEntered2 = testArea2.value;
    let originTextMatch2 = originalText2.substring(0,textEntered2.length);

    if (textEntered2 == originalText2) {
      login_typing2_time = theTimer2.innerHTML;
      // console.log("HAHAHAHAHAHAHAHAHAHA");
      console.log(login_typing2_time);
        clearInterval(interval2);
        testWrapper2.style.borderColor = "#429890";
    } else {
        if (textEntered2 == originTextMatch2) {
            testWrapper2.style.borderColor = "#65CCf3";
        } else {
            testWrapper2.style.borderColor = "#E95D0F";
        }
    }

}

// Start the timer:
function start2() {
    let textEnterdLength2 = testArea2.value.length;
    if (textEnterdLength2 === 0 && !timerRunning2) {
        timerRunning2 = true;
        interval2 = setInterval(runTimer2, 10);
    }
    console.log(textEnterdLength2);
}

// Reset everything:
function reset2() {
    clearInterval(interval2);
    interval2 = null;
    timer2 = [0,0,0,0];
    timerRunning2 = false;

    testArea2.value = "";
    theTimer2.innerHTML = "00:00:00";
    testWrapper2.style.borderColor = "grey";
}

// Event listeners for keyboard input and the reset
testArea2.addEventListener("keypress", start2, false);
testArea2.addEventListener("keyup", spellCheck2, false);
resetButton2.addEventListener("click", reset2, false);





//
