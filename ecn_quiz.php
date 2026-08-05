
<?php
session_start();

$_SESSION['subject'] = "Electronic Components and Networks";
$_SESSION['semester'] = "Semester 2";

$_SESSION['answers']=array(

1=>'A',
2=>'B',
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

<title>Electronic Components and Networks Quiz - LearnHub</title>

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
Semester 2 - Electronic Components and Networks Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. The basic electronic component used to allow current in one direction is</h3>
<label><input type="radio" name="q1" value="A"> Diode</label>
<label><input type="radio" name="q1" value="B"> Resistor</label>
<label><input type="radio" name="q1" value="C"> Capacitor</label>
<label><input type="radio" name="q1" value="D"> Inductor</label>
</div>

<div class="question">
<h3>2. Resistance is measured in</h3>
<label><input type="radio" name="q2" value="A"> Volt</label>
<label><input type="radio" name="q2" value="B"> Ohm</label>
<label><input type="radio" name="q2" value="C"> Ampere</label>
<label><input type="radio" name="q2" value="D"> Watt</label>
</div>

<div class="question">
<h3>3. Unit of capacitance is</h3>
<label><input type="radio" name="q3" value="A"> Henry</label>
<label><input type="radio" name="q3" value="B"> Ohm</label>
<label><input type="radio" name="q3" value="C"> Farad</label>
<label><input type="radio" name="q3" value="D"> Volt</label>
</div>

<div class="question">
<h3>4. Transistor is mainly used as</h3>
<label><input type="radio" name="q4" value="A"> Fuse</label>
<label><input type="radio" name="q4" value="B"> Switch only</label>
<label><input type="radio" name="q4" value="C"> Indicator</label>
<label><input type="radio" name="q4" value="D"> Amplifier and Switch</label>
</div>

<div class="question">
<h3>5. LED stands for</h3>
<label><input type="radio" name="q5" value="A"> Light Emitting Diode</label>
<label><input type="radio" name="q5" value="B"> Low Energy Device</label>
<label><input type="radio" name="q5" value="C"> Light Energy Detector</label>
<label><input type="radio" name="q5" value="D"> Linear Electronic Device</label>
</div>

<div class="question">
<h3>6. Current is measured using</h3>
<label><input type="radio" name="q6" value="A"> Voltmeter</label>
<label><input type="radio" name="q6" value="B"> Ammeter</label>
<label><input type="radio" name="q6" value="C"> Wattmeter</label>
<label><input type="radio" name="q6" value="D"> CRO</label>
</div>

<div class="question">
<h3>7. The unit of frequency is</h3>
<label><input type="radio" name="q7" value="A"> Volt</label>
<label><input type="radio" name="q7" value="B"> Ohm</label>
<label><input type="radio" name="q7" value="C"> Hertz</label>
<label><input type="radio" name="q7" value="D"> Farad</label>
</div>

<div class="question">
<h3>8. A parallel circuit has</h3>
<label><input type="radio" name="q8" value="A"> One path</label>
<label><input type="radio" name="q8" value="B"> No path</label>
<label><input type="radio" name="q8" value="C"> Fixed current</label>
<label><input type="radio" name="q8" value="D"> Multiple paths</label>
</div>

<div class="question">
<h3>9. Semiconductor material commonly used is</h3>
<label><input type="radio" name="q9" value="A"> Silicon</label>
<label><input type="radio" name="q9" value="B"> Copper</label>
<label><input type="radio" name="q9" value="C"> Iron</label>
<label><input type="radio" name="q9" value="D"> Aluminium</label>
</div>

<div class="question">
<h3>10. Voltage is measured by</h3>
<label><input type="radio" name="q10" value="A"> Ammeter</label>
<label><input type="radio" name="q10" value="B"> Voltmeter</label>
<label><input type="radio" name="q10" value="C"> Ohmmeter</label>
<label><input type="radio" name="q10" value="D"> Frequency Meter</label>
</div>

<div class="question">
<h3>11. Logic gate performs</h3>
<label><input type="radio" name="q11" value="A"> Mechanical operation</label>
<label><input type="radio" name="q11" value="B"> Electrical wiring</label>
<label><input type="radio" name="q11" value="C"> Logical operation</label>
<label><input type="radio" name="q11" value="D"> Thermal operation</label>
</div>

<div class="question">
<h3>12. Full form of IC is</h3>
<label><input type="radio" name="q12" value="A"> Internal Circuit</label>
<label><input type="radio" name="q12" value="B"> Integrated Connection</label>
<label><input type="radio" name="q12" value="C"> Intelligent Circuit</label>
<label><input type="radio" name="q12" value="D"> Integrated Circuit</label>
</div>

<div class="question">
<h3>13. Rectifier converts</h3>
<label><input type="radio" name="q13" value="A"> AC to DC</label>
<label><input type="radio" name="q13" value="B"> DC to AC</label>
<label><input type="radio" name="q13" value="C"> AC to AC</label>
<label><input type="radio" name="q13" value="D"> DC to DC</label>
</div>

<div class="question">
<h3>14. Network theorem commonly used is</h3>
<label><input type="radio" name="q14" value="A"> Bernoulli Theorem</label>
<label><input type="radio" name="q14" value="B"> Thevenin Theorem</label>
<label><input type="radio" name="q14" value="C"> Pythagoras Theorem</label>
<label><input type="radio" name="q14" value="D"> Newton Theorem</label>
</div>

<div class="question">
<h3>15. Oscillator generates</h3>
<label><input type="radio" name="q15" value="A"> DC Voltage</label>
<label><input type="radio" name="q15" value="B"> Heat</label>
<label><input type="radio" name="q15" value="C"> Electrical Signals</label>
<label><input type="radio" name="q15" value="D"> Light</label>
</div>

<div class="question">
<h3>16. Zener diode is used for</h3>
<label><input type="radio" name="q16" value="A"> Amplification</label>
<label><input type="radio" name="q16" value="B"> Rectification</label>
<label><input type="radio" name="q16" value="C"> Oscillation</label>
<label><input type="radio" name="q16" value="D"> Voltage Regulation</label>
</div>

<div class="question">
<h3>17. Resistor opposes</h3>
<label><input type="radio" name="q17" value="A"> Current Flow</label>
<label><input type="radio" name="q17" value="B"> Voltage</label>
<label><input type="radio" name="q17" value="C"> Frequency</label>
<label><input type="radio" name="q17" value="D"> Power</label>
</div>

<div class="question">
<h3>18. Breadboard is used for</h3>
<label><input type="radio" name="q18" value="A"> Power Generation</label>
<label><input type="radio" name="q18" value="B"> Circuit Prototyping</label>
<label><input type="radio" name="q18" value="C"> Welding</label>
<label><input type="radio" name="q18" value="D"> Soldering Iron</label>
</div>

<div class="question">
<h3>19. Capacitor stores</h3>
<label><input type="radio" name="q19" value="A"> Current</label>
<label><input type="radio" name="q19" value="B"> Voltage</label>
<label><input type="radio" name="q19" value="C"> Electrical Charge</label>
<label><input type="radio" name="q19" value="D"> Frequency</label>
</div>

<div class="question">
<h3>20. Electronic network consists of</h3>
<label><input type="radio" name="q20" value="A"> Only resistors</label>
<label><input type="radio" name="q20" value="B"> Only capacitors</label>
<label><input type="radio" name="q20" value="C"> Only inductors</label>
<label><input type="radio" name="q20" value="D"> Interconnected electronic components</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

