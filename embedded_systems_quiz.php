<?php
session_start();

$_SESSION['subject'] = "Embedded Systems";
$_SESSION['semester'] = "Semester 5";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'D',
9=>'A',
10=>'B',
11=>'C',
12=>'D',
13=>'A',
14=>'B',
15=>'C',
16=>'D',
17=>'A',
18=>'B',
19=>'C',
20=>'D'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Embedded Systems Quiz - LearnHub</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:linear-gradient(135deg,#0f172a,#1e1b4b,#311042);
color:white;
min-height:100vh;
padding:40px 20px;
}

.container{
max-width:900px;
margin:auto;
}

.heading{
text-align:center;
font-size:42px;
color:#38bdf8;
margin-bottom:30px;
}

.card{
background:rgba(255,255,255,0.06);
backdrop-filter:blur(15px);
padding:30px;
border-radius:20px;
}

.question{
background:rgba(255,255,255,0.05);
padding:20px;
margin-bottom:20px;
border-radius:15px;
}

.question h3{
color:#38bdf8;
margin-bottom:15px;
}

label{
display:block;
padding:8px;
}

.submit{
width:100%;
padding:15px;
background:#0d6efd;
color:white;
border:none;
border-radius:30px;
font-size:18px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h1 class="heading">
Semester 5 - Embedded Systems Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Embedded system is designed for</h3>
<label><input type="radio" name="q1" value="A"> General Purpose Computing</label>
<label><input type="radio" name="q1" value="B"> Specific Application</label>
<label><input type="radio" name="q1" value="C"> Gaming Only</label>
<label><input type="radio" name="q1" value="D"> Networking Only</label>
</div>

<div class="question">
<h3>2. Brain of an embedded system is</h3>
<label><input type="radio" name="q2" value="A"> Microcontroller</label>
<label><input type="radio" name="q2" value="B"> Resistor</label>
<label><input type="radio" name="q2" value="C"> Capacitor</label>
<label><input type="radio" name="q2" value="D"> Transistor</label>
</div>

<div class="question">
<h3>3. Example of embedded system</h3>
<label><input type="radio" name="q3" value="A"> Desktop Computer</label>
<label><input type="radio" name="q3" value="B"> Laptop</label>
<label><input type="radio" name="q3" value="C"> Washing Machine</label>
<label><input type="radio" name="q3" value="D"> Server</label>
</div>

<div class="question">
<h3>4. ROM is used to store</h3>
<label><input type="radio" name="q4" value="A"> Temporary Data</label>
<label><input type="radio" name="q4" value="B"> Input Signals</label>
<label><input type="radio" name="q4" value="C"> Sensor Data</label>
<label><input type="radio" name="q4" value="D"> Program Instructions</label>
</div>

<div class="question">
<h3>5. Embedded systems are generally</h3>
<label><input type="radio" name="q5" value="A"> Real Time</label>
<label><input type="radio" name="q5" value="B"> Manual Systems</label>
<label><input type="radio" name="q5" value="C"> Offline Systems</label>
<label><input type="radio" name="q5" value="D"> Analog Only</label>
</div>

<div class="question">
<h3>6. Microcontroller contains</h3>
<label><input type="radio" name="q6" value="A"> CPU Only</label>
<label><input type="radio" name="q6" value="B"> CPU, Memory and I/O</label>
<label><input type="radio" name="q6" value="C"> RAM Only</label>
<label><input type="radio" name="q6" value="D"> ROM Only</label>
</div>

<div class="question">
<h3>7. Embedded C is used for</h3>
<label><input type="radio" name="q7" value="A"> Database</label>
<label><input type="radio" name="q7" value="B"> Web Design</label>
<label><input type="radio" name="q7" value="C"> Embedded Programming</label>
<label><input type="radio" name="q7" value="D"> Networking</label>
</div>

<div class="question">
<h3>8. Sensor is used to</h3>
<label><input type="radio" name="q8" value="A"> Display Output</label>
<label><input type="radio" name="q8" value="B"> Store Data</label>
<label><input type="radio" name="q8" value="C"> Process Signals</label>
<label><input type="radio" name="q8" value="D"> Detect Physical Quantity</label>
</div>

<div class="question">
<h3>9. Embedded systems consume</h3>
<label><input type="radio" name="q9" value="A"> Low Power</label>
<label><input type="radio" name="q9" value="B"> High Power</label>
<label><input type="radio" name="q9" value="C"> Unlimited Power</label>
<label><input type="radio" name="q9" value="D"> No Power</label>
</div>

<div class="question">
<h3>10. Actuator converts</h3>
<label><input type="radio" name="q10" value="A"> Output to Input</label>
<label><input type="radio" name="q10" value="B"> Electrical Signal to Physical Action</label>
<label><input type="radio" name="q10" value="C"> Data to Program</label>
<label><input type="radio" name="q10" value="D"> Heat to Light</label>
</div>

<div class="question">
<h3>11. RAM is</h3>
<label><input type="radio" name="q11" value="A"> Permanent Memory</label>
<label><input type="radio" name="q11" value="B"> Secondary Storage</label>
<label><input type="radio" name="q11" value="C"> Temporary Memory</label>
<label><input type="radio" name="q11" value="D"> Optical Memory</label>
</div>

<div class="question">
<h3>12. UART is used for</h3>
<label><input type="radio" name="q12" value="A"> Video Output</label>
<label><input type="radio" name="q12" value="B"> Audio Processing</label>
<label><input type="radio" name="q12" value="C"> Power Supply</label>
<label><input type="radio" name="q12" value="D"> Serial Communication</label>
</div>

<div class="question">
<h3>13. Embedded system software is called</h3>
<label><input type="radio" name="q13" value="A"> Firmware</label>
<label><input type="radio" name="q13" value="B"> Browser</label>
<label><input type="radio" name="q13" value="C"> Database</label>
<label><input type="radio" name="q13" value="D"> Driver Only</label>
</div>

<div class="question">
<h3>14. ADC stands for</h3>
<label><input type="radio" name="q14" value="A"> Automatic Data Control</label>
<label><input type="radio" name="q14" value="B"> Analog to Digital Converter</label>
<label><input type="radio" name="q14" value="C"> Analog Device Circuit</label>
<label><input type="radio" name="q14" value="D"> Automatic Digital Circuit</label>
</div>

<div class="question">
<h3>15. Embedded systems are used in</h3>
<label><input type="radio" name="q15" value="A"> Home Appliances</label>
<label><input type="radio" name="q15" value="B"> Vehicles</label>
<label><input type="radio" name="q15" value="C"> Medical Devices</label>
<label><input type="radio" name="q15" value="D"> All of These</label>
</div>

<div class="question">
<h3>16. GPIO stands for</h3>
<label><input type="radio" name="q16" value="A"> General Program Input Output</label>
<label><input type="radio" name="q16" value="B"> General Power Interface Output</label>
<label><input type="radio" name="q16" value="C"> General Processing I/O</label>
<label><input type="radio" name="q16" value="D"> General Purpose Input Output</label>
</div>

<div class="question">
<h3>17. Real-time systems require</h3>
<label><input type="radio" name="q17" value="A"> Fast Response</label>
<label><input type="radio" name="q17" value="B"> Slow Processing</label>
<label><input type="radio" name="q17" value="C"> Large Storage</label>
<label><input type="radio" name="q17" value="D"> Internet Only</label>
</div>

<div class="question">
<h3>18. Embedded systems improve</h3>
<label><input type="radio" name="q18" value="A"> Cost Only</label>
<label><input type="radio" name="q18" value="B"> Efficiency</label>
<label><input type="radio" name="q18" value="C"> Weight</label>
<label><input type="radio" name="q18" value="D"> Heat</label>
</div>

<div class="question">
<h3>19. Timer is used for</h3>
<label><input type="radio" name="q19" value="A"> Audio Only</label>
<label><input type="radio" name="q19" value="B"> Storage</label>
<label><input type="radio" name="q19" value="C"> Time Measurement</label>
<label><input type="radio" name="q19" value="D"> Networking</label>
</div>

<div class="question">
<h3>20. Main goal of embedded system is</h3>
<label><input type="radio" name="q20" value="A"> General Computing</label>
<label><input type="radio" name="q20" value="B"> Dedicated Function Efficiently</label>
<label><input type="radio" name="q20" value="C"> Gaming</label>
<label><input type="radio" name="q20" value="D"> Web Hosting</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>