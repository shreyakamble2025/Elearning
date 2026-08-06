<?php
session_start();

$_SESSION['subject'] = "Basic Electrical and Electronics Engineering";
$_SESSION['semester'] = "Semester 2";

$_SESSION['answers']=array(

1=>'B',
2=>'C',
3=>'A',
4=>'D',
5=>'C',
6=>'B',
7=>'A',
8=>'B',
9=>'C',
10=>'D',
11=>'A',
12=>'B',
13=>'C',
14=>'A',
15=>'D',
16=>'B',
17=>'C',
18=>'A',
19=>'B',
20=>'C'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Basic Electrical and Electronics Engineering Quiz - LearnHub</title>

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
Semester 2 - Basic Electrical and Electronics Engineering Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. What is the SI unit of electric current?</h3>
<label><input type="radio" name="q1" value="A"> Volt</label>
<label><input type="radio" name="q1" value="B"> Ampere</label>
<label><input type="radio" name="q1" value="C"> Ohm</label>
<label><input type="radio" name="q1" value="D"> Watt</label>
</div>

<div class="question">
<h3>2. Which instrument is used to measure voltage?</h3>
<label><input type="radio" name="q2" value="A"> Ammeter</label>
<label><input type="radio" name="q2" value="B"> Wattmeter</label>
<label><input type="radio" name="q2" value="C"> Voltmeter</label>
<label><input type="radio" name="q2" value="D"> Ohmmeter</label>
</div>

<div class="question">
<h3>3. Ohm's Law is represented by?</h3>
<label><input type="radio" name="q3" value="A"> V = IR</label>
<label><input type="radio" name="q3" value="B"> P = VI</label>
<label><input type="radio" name="q3" value="C"> F = ma</label>
<label><input type="radio" name="q3" value="D"> E = mc²</label>
</div>

<div class="question">
<h3>4. Which material is an insulator?</h3>
<label><input type="radio" name="q4" value="A"> Copper</label>
<label><input type="radio" name="q4" value="B"> Aluminium</label>
<label><input type="radio" name="q4" value="C"> Silver</label>
<label><input type="radio" name="q4" value="D"> Rubber</label>
</div>

<div class="question">
<h3>5. Which component stores electrical energy?</h3>
<label><input type="radio" name="q5" value="A"> Diode</label>
<label><input type="radio" name="q5" value="B"> Resistor</label>
<label><input type="radio" name="q5" value="C"> Capacitor</label>
<label><input type="radio" name="q5" value="D"> Fuse</label>
</div>

<div class="question">
<h3>6. Transformer works on the principle of?</h3>
<label><input type="radio" name="q6" value="A"> Electrolysis</label>
<label><input type="radio" name="q6" value="B"> Electromagnetic Induction</label>
<label><input type="radio" name="q6" value="C"> Conduction</label>
<label><input type="radio" name="q6" value="D"> Radiation</label>
</div>

<div class="question">
<h3>7. What is the SI unit of resistance?</h3>
<label><input type="radio" name="q7" value="A"> Ohm</label>
<label><input type="radio" name="q7" value="B"> Volt</label>
<label><input type="radio" name="q7" value="C"> Watt</label>
<label><input type="radio" name="q7" value="D"> Ampere</label>
</div>

<div class="question">
<h3>8. Which device converts AC to DC?</h3>
<label><input type="radio" name="q8" value="A"> Transformer</label>
<label><input type="radio" name="q8" value="B"> Rectifier</label>
<label><input type="radio" name="q8" value="C"> Motor</label>
<label><input type="radio" name="q8" value="D"> Generator</label>
</div>

<div class="question">
<h3>9. What is the SI unit of capacitance?</h3>
<label><input type="radio" name="q9" value="A"> Henry</label>
<label><input type="radio" name="q9" value="B"> Weber</label>
<label><input type="radio" name="q9" value="C"> Farad</label>
<label><input type="radio" name="q9" value="D"> Tesla</label>
</div>

<div class="question">
<h3>10. Which device protects a circuit from overcurrent?</h3>
<label><input type="radio" name="q10" value="A"> Capacitor</label>
<label><input type="radio" name="q10" value="B"> Inductor</label>
<label><input type="radio" name="q10" value="C"> Resistor</label>
<label><input type="radio" name="q10" value="D"> Fuse</label>
</div>

<div class="question">
<h3>11. What is the SI unit of inductance?</h3>
<label><input type="radio" name="q11" value="A"> Henry</label>
<label><input type="radio" name="q11" value="B"> Farad</label>
<label><input type="radio" name="q11" value="C"> Ohm</label>
<label><input type="radio" name="q11" value="D"> Tesla</label>
</div>

<div class="question">
<h3>12. Which instrument measures current?</h3>
<label><input type="radio" name="q12" value="A"> Voltmeter</label>
<label><input type="radio" name="q12" value="B"> Ammeter</label>
<label><input type="radio" name="q12" value="C"> Wattmeter</label>
<label><input type="radio" name="q12" value="D"> Megger</label>
</div>

<div class="question">
<h3>13. Which semiconductor device is used as a rectifier?</h3>
<label><input type="radio" name="q13" value="A"> Transistor</label>
<label><input type="radio" name="q13" value="B"> LED</label>
<label><input type="radio" name="q13" value="C"> Diode</label>
<label><input type="radio" name="q13" value="D"> LDR</label>
</div>

<div class="question">
<h3>14. AC stands for?</h3>
<label><input type="radio" name="q14" value="A"> Alternating Current</label>
<label><input type="radio" name="q14" value="B"> Automatic Current</label>
<label><input type="radio" name="q14" value="C"> Average Current</label>
<label><input type="radio" name="q14" value="D"> Applied Current</label>
</div>

<div class="question">
<h3>15. Which device converts electrical energy into mechanical energy?</h3>
<label><input type="radio" name="q15" value="A"> Generator</label>
<label><input type="radio" name="q15" value="B"> Transformer</label>
<label><input type="radio" name="q15" value="C"> Rectifier</label>
<label><input type="radio" name="q15" value="D"> Motor</label>
</div>

<div class="question">
<h3>16. Which instrument measures power?</h3>
<label><input type="radio" name="q16" value="A"> Voltmeter</label>
<label><input type="radio" name="q16" value="B"> Wattmeter</label>
<label><input type="radio" name="q16" value="C"> Ammeter</label>
<label><input type="radio" name="q16" value="D"> Ohmmeter</label>
</div>

<div class="question">
<h3>17. The SI unit of frequency is?</h3>
<label><input type="radio" name="q17" value="A"> Volt</label>
<label><input type="radio" name="q17" value="B"> Watt</label>
<label><input type="radio" name="q17" value="C"> Hertz</label>
<label><input type="radio" name="q17" value="D"> Farad</label>
</div>

<div class="question">
<h3>18. Which law states the relation between voltage, current and resistance?</h3>
<label><input type="radio" name="q18" value="A"> Ohm's Law</label>
<label><input type="radio" name="q18" value="B"> Kirchhoff's Law</label>
<label><input type="radio" name="q18" value="C"> Faraday's Law</label>
<label><input type="radio" name="q18" value="D"> Lenz's Law</label>
</div>

<div class="question">
<h3>19. DC stands for?</h3>
<label><input type="radio" name="q19" value="A"> Double Current</label>
<label><input type="radio" name="q19" value="B"> Direct Current</label>
<label><input type="radio" name="q19" value="C"> Dynamic Current</label>
<label><input type="radio" name="q19" value="D"> Digital Current</label>
</div>

<div class="question">
<h3>20. The frequency of AC supply in India is?</h3>
<label><input type="radio" name="q20" value="A"> 25 Hz</label>
<label><input type="radio" name="q20" value="B"> 50 Hz</label>
<label><input type="radio" name="q20" value="C"> 60 Hz</label>
<label><input type="radio" name="q20" value="D"> 100 Hz</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>