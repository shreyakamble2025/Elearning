<?php
session_start();

$_SESSION['subject'] = "Analog Electronics";
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

<title>Analog Electronics Quiz - LearnHub</title>

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
Semester 4 - Analog Electronics Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. A diode allows current to flow in</h3>
<label><input type="radio" name="q1" value="A"> Both Directions</label>
<label><input type="radio" name="q1" value="B"> One Direction Only</label>
<label><input type="radio" name="q1" value="C"> No Direction</label>
<label><input type="radio" name="q1" value="D"> Reverse Direction Only</label>
</div>

<div class="question">
<h3>2. Unit of voltage is</h3>
<label><input type="radio" name="q2" value="A"> Volt</label>
<label><input type="radio" name="q2" value="B"> Ampere</label>
<label><input type="radio" name="q2" value="C"> Watt</label>
<label><input type="radio" name="q2" value="D"> Ohm</label>
</div>

<div class="question">
<h3>3. BJT stands for</h3>
<label><input type="radio" name="q3" value="A"> Binary Junction Transistor</label>
<label><input type="radio" name="q3" value="B"> Basic Junction Terminal</label>
<label><input type="radio" name="q3" value="C"> Bipolar Junction Transistor</label>
<label><input type="radio" name="q3" value="D"> Bipolar Joint Technology</label>
</div>

<div class="question">
<h3>4. Zener diode is mainly used for</h3>
<label><input type="radio" name="q4" value="A"> Amplification</label>
<label><input type="radio" name="q4" value="B"> Rectification</label>
<label><input type="radio" name="q4" value="C"> Oscillation</label>
<label><input type="radio" name="q4" value="D"> Voltage Regulation</label>
</div>

<div class="question">
<h3>5. Transistor can be used as</h3>
<label><input type="radio" name="q5" value="A"> Amplifier</label>
<label><input type="radio" name="q5" value="B"> Capacitor</label>
<label><input type="radio" name="q5" value="C"> Inductor</label>
<label><input type="radio" name="q5" value="D"> Fuse</label>
</div>

<div class="question">
<h3>6. Rectifier converts</h3>
<label><input type="radio" name="q6" value="A"> DC to AC</label>
<label><input type="radio" name="q6" value="B"> AC to DC</label>
<label><input type="radio" name="q6" value="C"> AC to AC</label>
<label><input type="radio" name="q6" value="D"> DC to DC</label>
</div>

<div class="question">
<h3>7. LED stands for</h3>
<label><input type="radio" name="q7" value="A"> Light Emitting Device</label>
<label><input type="radio" name="q7" value="B"> Low Energy Diode</label>
<label><input type="radio" name="q7" value="C"> Light Emitting Diode</label>
<label><input type="radio" name="q7" value="D"> Light Energy Display</label>
</div>

<div class="question">
<h3>8. Full form of FET is</h3>
<label><input type="radio" name="q8" value="A"> Field Effect Terminal</label>
<label><input type="radio" name="q8" value="B"> Fast Electronic Transistor</label>
<label><input type="radio" name="q8" value="C"> Field Electronic Technology</label>
<label><input type="radio" name="q8" value="D"> Field Effect Transistor</label>
</div>

<div class="question">
<h3>9. Op-Amp stands for</h3>
<label><input type="radio" name="q9" value="A"> Operational Amplifier</label>
<label><input type="radio" name="q9" value="B"> Output Amplifier</label>
<label><input type="radio" name="q9" value="C"> Optical Amplifier</label>
<label><input type="radio" name="q9" value="D"> Open Amplifier</label>
</div>

<div class="question">
<h3>10. Common emitter configuration provides</h3>
<label><input type="radio" name="q10" value="A"> No Gain</label>
<label><input type="radio" name="q10" value="B"> High Gain</label>
<label><input type="radio" name="q10" value="C"> Zero Output</label>
<label><input type="radio" name="q10" value="D"> Constant Current</label>
</div>

<div class="question">
<h3>11. Semiconductor material commonly used is</h3>
<label><input type="radio" name="q11" value="A"> Copper</label>
<label><input type="radio" name="q11" value="B"> Aluminium</label>
<label><input type="radio" name="q11" value="C"> Silicon</label>
<label><input type="radio" name="q11" value="D"> Iron</label>
</div>

<div class="question">
<h3>12. Oscillator generates</h3>
<label><input type="radio" name="q12" value="A"> DC Signal</label>
<label><input type="radio" name="q12" value="B"> Power Only</label>
<label><input type="radio" name="q12" value="C"> Heat</label>
<label><input type="radio" name="q12" value="D"> Periodic Signal</label>
</div>

<div class="question">
<h3>13. Capacitor stores</h3>
<label><input type="radio" name="q13" value="A"> Electric Charge</label>
<label><input type="radio" name="q13" value="B"> Current</label>
<label><input type="radio" name="q13" value="C"> Voltage</label>
<label><input type="radio" name="q13" value="D"> Frequency</label>
</div>

<div class="question">
<h3>14. Amplifier increases</h3>
<label><input type="radio" name="q14" value="A"> Resistance</label>
<label><input type="radio" name="q14" value="B"> Signal Strength</label>
<label><input type="radio" name="q14" value="C"> Frequency Only</label>
<label><input type="radio" name="q14" value="D"> Temperature</label>
</div>

<div class="question">
<h3>15. Diode consists of</h3>
<label><input type="radio" name="q15" value="A"> N-N Junction</label>
<label><input type="radio" name="q15" value="B"> P-P Junction</label>
<label><input type="radio" name="q15" value="C"> P-N Junction</label>
<label><input type="radio" name="q15" value="D"> Metal Only</label>
</div>

<div class="question">
<h3>16. Voltage gain is ratio of</h3>
<label><input type="radio" name="q16" value="A"> Current/Input</label>
<label><input type="radio" name="q16" value="B"> Resistance/Input</label>
<label><input type="radio" name="q16" value="C"> Power/Input</label>
<label><input type="radio" name="q16" value="D"> Output Voltage/Input Voltage</label>
</div>

<div class="question">
<h3>17. Collector current flows through</h3>
<label><input type="radio" name="q17" value="A"> Transistor</label>
<label><input type="radio" name="q17" value="B"> Capacitor</label>
<label><input type="radio" name="q17" value="C"> Resistor Only</label>
<label><input type="radio" name="q17" value="D"> Fuse Only</label>
</div>

<div class="question">
<h3>18. FET is a</h3>
<label><input type="radio" name="q18" value="A"> Bipolar Device</label>
<label><input type="radio" name="q18" value="B"> Unipolar Device</label>
<label><input type="radio" name="q18" value="C"> Mechanical Device</label>
<label><input type="radio" name="q18" value="D"> Optical Device</label>
</div>

<div class="question">
<h3>19. Analog signal varies</h3>
<label><input type="radio" name="q19" value="A"> Discretely</label>
<label><input type="radio" name="q19" value="B"> Digitally</label>
<label><input type="radio" name="q19" value="C"> Continuously</label>
<label><input type="radio" name="q19" value="D"> Randomly</label>
</div>

<div class="question">
<h3>20. Main application of analog electronics is</h3>
<label><input type="radio" name="q20" value="A"> Signal Processing</label>
<label><input type="radio" name="q20" value="B"> Cooking</label>
<label><input type="radio" name="q20" value="C"> Printing</label>
<label><input type="radio" name="q20" value="D"> Networking Only</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>