<?php
session_start();

$_SESSION['subject'] = "Electronic Devices and Circuits";
$_SESSION['semester'] = "Semester 2";

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

<title>Electronic Devices and Circuits Quiz - LearnHub</title>

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
Semester 2 - Electronic Devices and Circuits Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. A diode allows current to flow in</h3>
<label><input type="radio" name="q1" value="A"> Both directions</label>
<label><input type="radio" name="q1" value="B"> One direction only</label>
<label><input type="radio" name="q1" value="C"> No direction</label>
<label><input type="radio" name="q1" value="D"> Circular direction</label>
</div>

<div class="question">
<h3>2. Transistor is mainly used as</h3>
<label><input type="radio" name="q2" value="A"> Amplifier and Switch</label>
<label><input type="radio" name="q2" value="B"> Fuse</label>
<label><input type="radio" name="q2" value="C"> Resistor</label>
<label><input type="radio" name="q2" value="D"> Capacitor</label>
</div>

<div class="question">
<h3>3. LED stands for</h3>
<label><input type="radio" name="q3" value="A"> Light Energy Device</label>
<label><input type="radio" name="q3" value="B"> Light Emission Diode</label>
<label><input type="radio" name="q3" value="C"> Light Emitting Diode</label>
<label><input type="radio" name="q3" value="D"> Low Energy Diode</label>
</div>

<div class="question">
<h3>4. Zener diode is mainly used for</h3>
<label><input type="radio" name="q4" value="A"> Amplification</label>
<label><input type="radio" name="q4" value="B"> Rectification</label>
<label><input type="radio" name="q4" value="C"> Oscillation</label>
<label><input type="radio" name="q4" value="D"> Voltage Regulation</label>
</div>

<div class="question">
<h3>5. Full form of BJT is</h3>
<label><input type="radio" name="q5" value="A"> Bipolar Junction Transistor</label>
<label><input type="radio" name="q5" value="B"> Basic Junction Theory</label>
<label><input type="radio" name="q5" value="C"> Binary Junction Transistor</label>
<label><input type="radio" name="q5" value="D"> Bipolar Joint Terminal</label>
</div>

<div class="question">
<h3>6. Rectifier converts</h3>
<label><input type="radio" name="q6" value="A"> DC to AC</label>
<label><input type="radio" name="q6" value="B"> AC to DC</label>
<label><input type="radio" name="q6" value="C"> AC to AC</label>
<label><input type="radio" name="q6" value="D"> DC to DC</label>
</div>

<div class="question">
<h3>7. Which device emits light?</h3>
<label><input type="radio" name="q7" value="A"> Diode</label>
<label><input type="radio" name="q7" value="B"> Transistor</label>
<label><input type="radio" name="q7" value="C"> LED</label>
<label><input type="radio" name="q7" value="D"> Capacitor</label>
</div>

<div class="question">
<h3>8. Which transistor terminal controls current?</h3>
<label><input type="radio" name="q8" value="A"> Collector</label>
<label><input type="radio" name="q8" value="B"> Emitter</label>
<label><input type="radio" name="q8" value="C"> Substrate</label>
<label><input type="radio" name="q8" value="D"> Base</label>
</div>

<div class="question">
<h3>9. Semiconductor material is</h3>
<label><input type="radio" name="q9" value="A"> Silicon</label>
<label><input type="radio" name="q9" value="B"> Copper</label>
<label><input type="radio" name="q9" value="C"> Aluminium</label>
<label><input type="radio" name="q9" value="D"> Iron</label>
</div>

<div class="question">
<h3>10. Which diode is used in voltage regulation?</h3>
<label><input type="radio" name="q10" value="A"> LED</label>
<label><input type="radio" name="q10" value="B"> Zener Diode</label>
<label><input type="radio" name="q10" value="C"> Tunnel Diode</label>
<label><input type="radio" name="q10" value="D"> Photo Diode</label>
</div>

<div class="question">
<h3>11. Photodiode converts</h3>
<label><input type="radio" name="q11" value="A"> Heat to Electricity</label>
<label><input type="radio" name="q11" value="B"> Sound to Light</label>
<label><input type="radio" name="q11" value="C"> Light to Electrical Signal</label>
<label><input type="radio" name="q11" value="D"> AC to DC</label>
</div>

<div class="question">
<h3>12. SCR stands for</h3>
<label><input type="radio" name="q12" value="A"> Silicon Control Rectifier</label>
<label><input type="radio" name="q12" value="B"> Static Current Relay</label>
<label><input type="radio" name="q12" value="C"> Silicon Circuit Relay</label>
<label><input type="radio" name="q12" value="D"> Silicon Controlled Rectifier</label>
</div>

<div class="question">
<h3>13. FET stands for</h3>
<label><input type="radio" name="q13" value="A"> Field Effect Transistor</label>
<label><input type="radio" name="q13" value="B"> Fixed Effect Transistor</label>
<label><input type="radio" name="q13" value="C"> Fast Electronic Terminal</label>
<label><input type="radio" name="q13" value="D"> Frequency Effect Transistor</label>
</div>

<div class="question">
<h3>14. Which device is used for amplification?</h3>
<label><input type="radio" name="q14" value="A"> Fuse</label>
<label><input type="radio" name="q14" value="B"> Transistor</label>
<label><input type="radio" name="q14" value="C"> Switch</label>
<label><input type="radio" name="q14" value="D"> Lamp</label>
</div>

<div class="question">
<h3>15. Silicon is a</h3>
<label><input type="radio" name="q15" value="A"> Conductor</label>
<label><input type="radio" name="q15" value="B"> Insulator</label>
<label><input type="radio" name="q15" value="C"> Semiconductor</label>
<label><input type="radio" name="q15" value="D"> Superconductor</label>
</div>

<div class="question">
<h3>16. Which diode detects light?</h3>
<label><input type="radio" name="q16" value="A"> LED</label>
<label><input type="radio" name="q16" value="B"> Zener Diode</label>
<label><input type="radio" name="q16" value="C"> Tunnel Diode</label>
<label><input type="radio" name="q16" value="D"> Photodiode</label>
</div>

<div class="question">
<h3>17. NPN and PNP are types of</h3>
<label><input type="radio" name="q17" value="A"> Transistors</label>
<label><input type="radio" name="q17" value="B"> Capacitors</label>
<label><input type="radio" name="q17" value="C"> Inductors</label>
<label><input type="radio" name="q17" value="D"> Resistors</label>
</div>

<div class="question">
<h3>18. Diode acts as a</h3>
<label><input type="radio" name="q18" value="A"> Amplifier</label>
<label><input type="radio" name="q18" value="B"> Switch</label>
<label><input type="radio" name="q18" value="C"> Oscillator</label>
<label><input type="radio" name="q18" value="D"> Filter</label>
</div>

<div class="question">
<h3>19. Which device is used for switching and amplification?</h3>
<label><input type="radio" name="q19" value="A"> Resistor</label>
<label><input type="radio" name="q19" value="B"> Capacitor</label>
<label><input type="radio" name="q19" value="C"> Transistor</label>
<label><input type="radio" name="q19" value="D"> Fuse</label>
</div>

<div class="question">
<h3>20. Electronic circuits mainly use</h3>
<label><input type="radio" name="q20" value="A"> Wood</label>
<label><input type="radio" name="q20" value="B"> Water</label>
<label><input type="radio" name="q20" value="C"> Rubber</label>
<label><input type="radio" name="q20" value="D"> Semiconductor Devices</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>