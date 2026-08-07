<?php
session_start();

$_SESSION['subject'] = "Microcontroller and Applications";
$_SESSION['semester'] = "Semester 4";

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

<title>Microcontroller and Applications Quiz - LearnHub</title>

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
Semester 4 - Microcontroller and Applications Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. A microcontroller is a</h3>
<label><input type="radio" name="q1" value="A"> Memory Device</label>
<label><input type="radio" name="q1" value="B"> Single Chip Computer</label>
<label><input type="radio" name="q1" value="C"> Power Supply</label>
<label><input type="radio" name="q1" value="D"> Sensor</label>
</div>

<div class="question">
<h3>2. 8051 is a</h3>
<label><input type="radio" name="q2" value="A"> Microcontroller</label>
<label><input type="radio" name="q2" value="B"> Resistor</label>
<label><input type="radio" name="q2" value="C"> Capacitor</label>
<label><input type="radio" name="q2" value="D"> Transistor</label>
</div>

<div class="question">
<h3>3. CPU stands for</h3>
<label><input type="radio" name="q3" value="A"> Central Power Unit</label>
<label><input type="radio" name="q3" value="B"> Control Processing Unit</label>
<label><input type="radio" name="q3" value="C"> Central Processing Unit</label>
<label><input type="radio" name="q3" value="D"> Computer Processing Utility</label>
</div>

<div class="question">
<h3>4. Program memory in 8051 is</h3>
<label><input type="radio" name="q4" value="A"> RAM</label>
<label><input type="radio" name="q4" value="B"> Cache</label>
<label><input type="radio" name="q4" value="C"> Register</label>
<label><input type="radio" name="q4" value="D"> ROM</label>
</div>

<div class="question">
<h3>5. RAM is used for</h3>
<label><input type="radio" name="q5" value="A"> Temporary Storage</label>
<label><input type="radio" name="q5" value="B"> Permanent Storage</label>
<label><input type="radio" name="q5" value="C"> Power Supply</label>
<label><input type="radio" name="q5" value="D"> Clock Generation</label>
</div>

<div class="question">
<h3>6. Port pins are used for</h3>
<label><input type="radio" name="q6" value="A"> Memory</label>
<label><input type="radio" name="q6" value="B"> Input/Output Operations</label>
<label><input type="radio" name="q6" value="C"> Clocking</label>
<label><input type="radio" name="q6" value="D"> Power Regulation</label>
</div>

<div class="question">
<h3>7. Timer is used for</h3>
<label><input type="radio" name="q7" value="A"> Storage</label>
<label><input type="radio" name="q7" value="B"> Amplification</label>
<label><input type="radio" name="q7" value="C"> Time Delay Generation</label>
<label><input type="radio" name="q7" value="D"> Power Supply</label>
</div>

<div class="question">
<h3>8. Interrupt is a</h3>
<label><input type="radio" name="q8" value="A"> Memory Block</label>
<label><input type="radio" name="q8" value="B"> Timer</label>
<label><input type="radio" name="q8" value="C"> Port</label>
<label><input type="radio" name="q8" value="D"> Signal that Stops Current Task</label>
</div>

<div class="question">
<h3>9. Crystal oscillator provides</h3>
<label><input type="radio" name="q9" value="A"> Clock Signal</label>
<label><input type="radio" name="q9" value="B"> Power</label>
<label><input type="radio" name="q9" value="C"> Memory</label>
<label><input type="radio" name="q9" value="D"> Voltage Regulation</label>
</div>

<div class="question">
<h3>10. Assembly language is</h3>
<label><input type="radio" name="q10" value="A"> Machine Independent</label>
<label><input type="radio" name="q10" value="B"> Low Level Language</label>
<label><input type="radio" name="q10" value="C"> Database Language</label>
<label><input type="radio" name="q10" value="D"> Web Language</label>
</div>

<div class="question">
<h3>11. ADC stands for</h3>
<label><input type="radio" name="q11" value="A"> Automatic Data Converter</label>
<label><input type="radio" name="q11" value="B"> Analog Device Controller</label>
<label><input type="radio" name="q11" value="C"> Analog to Digital Converter</label>
<label><input type="radio" name="q11" value="D"> Advanced Data Circuit</label>
</div>

<div class="question">
<h3>12. DAC converts</h3>
<label><input type="radio" name="q12" value="A"> Digital to Analog</label>
<label><input type="radio" name="q12" value="B"> Analog to Digital</label>
<label><input type="radio" name="q12" value="C"> AC to DC</label>
<label><input type="radio" name="q12" value="D"> DC to AC</label>
</div>

<div class="question">
<h3>13. Embedded systems use</h3>
<label><input type="radio" name="q13" value="A"> Microcontrollers</label>
<label><input type="radio" name="q13" value="B"> Only Resistors</label>
<label><input type="radio" name="q13" value="C"> Only Capacitors</label>
<label><input type="radio" name="q13" value="D"> Relays Only</label>
</div>

<div class="question">
<h3>14. UART is used for</h3>
<label><input type="radio" name="q14" value="A"> Memory Storage</label>
<label><input type="radio" name="q14" value="B"> Serial Communication</label>
<label><input type="radio" name="q14" value="C"> Power Control</label>
<label><input type="radio" name="q14" value="D"> Signal Filtering</label>
</div>

<div class="question">
<h3>15. EEPROM is</h3>
<label><input type="radio" name="q15" value="A"> Temporary Memory</label>
<label><input type="radio" name="q15" value="B"> RAM</label>
<label><input type="radio" name="q15" value="C"> Non-Volatile Memory</label>
<label><input type="radio" name="q15" value="D"> Register</label>
</div>

<div class="question">
<h3>16. SPI stands for</h3>
<label><input type="radio" name="q16" value="A"> Serial Program Interface</label>
<label><input type="radio" name="q16" value="B"> System Peripheral Interface</label>
<label><input type="radio" name="q16" value="C"> Serial Processor Interface</label>
<label><input type="radio" name="q16" value="D"> Serial Peripheral Interface</label>
</div>

<div class="question">
<h3>17. I2C is used for</h3>
<label><input type="radio" name="q17" value="A"> Communication</label>
<label><input type="radio" name="q17" value="B"> Storage</label>
<label><input type="radio" name="q17" value="C"> Power Supply</label>
<label><input type="radio" name="q17" value="D"> Amplification</label>
</div>

<div class="question">
<h3>18. Microcontroller applications include</h3>
<label><input type="radio" name="q18" value="A"> Washing Machines</label>
<label><input type="radio" name="q18" value="B"> Traffic Control</label>
<label><input type="radio" name="q18" value="C"> Embedded Systems</label>
<label><input type="radio" name="q18" value="D"> All of These</label>
</div>

<div class="question">
<h3>19. Register is used to</h3>
<label><input type="radio" name="q19" value="A"> Store Data Temporarily</label>
<label><input type="radio" name="q19" value="B"> Generate Power</label>
<label><input type="radio" name="q19" value="C"> Measure Current</label>
<label><input type="radio" name="q19" value="D"> Amplify Signals</label>
</div>

<div class="question">
<h3>20. Main advantage of microcontroller is</h3>
<label><input type="radio" name="q20" value="A"> Large Size</label>
<label><input type="radio" name="q20" value="B"> High Cost</label>
<label><input type="radio" name="q20" value="C"> Complex Wiring</label>
<label><input type="radio" name="q20" value="D"> Compact and Cost Effective</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>