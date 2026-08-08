<?php
session_start();

$_SESSION['subject'] = "Electrical Circuits and Networks";
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

<title>Electrical Circuits and Networks Quiz - LearnHub</title>

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
Semester 2 - Electrical Circuits and Networks Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Electric current is measured in</h3>
<label><input type="radio" name="q1" value="A"> Volt</label>
<label><input type="radio" name="q1" value="B"> Ampere</label>
<label><input type="radio" name="q1" value="C"> Ohm</label>
<label><input type="radio" name="q1" value="D"> Watt</label>
</div>

<div class="question">
<h3>2. Resistance is measured in</h3>
<label><input type="radio" name="q2" value="A"> Ohm</label>
<label><input type="radio" name="q2" value="B"> Volt</label>
<label><input type="radio" name="q2" value="C"> Ampere</label>
<label><input type="radio" name="q2" value="D"> Henry</label>
</div>

<div class="question">
<h3>3. Unit of capacitance is</h3>
<label><input type="radio" name="q3" value="A"> Henry</label>
<label><input type="radio" name="q3" value="B"> Ohm</label>
<label><input type="radio" name="q3" value="C"> Farad</label>
<label><input type="radio" name="q3" value="D"> Volt</label>
</div>

<div class="question">
<h3>4. Unit of inductance is</h3>
<label><input type="radio" name="q4" value="A"> Farad</label>
<label><input type="radio" name="q4" value="B"> Ohm</label>
<label><input type="radio" name="q4" value="C"> Watt</label>
<label><input type="radio" name="q4" value="D"> Henry</label>
</div>

<div class="question">
<h3>5. Ohm's Law is</h3>
<label><input type="radio" name="q5" value="A"> V = IR</label>
<label><input type="radio" name="q5" value="B"> P = VI</label>
<label><input type="radio" name="q5" value="C"> I = V²R</label>
<label><input type="radio" name="q5" value="D"> R = VI</label>
</div>

<div class="question">
<h3>6. Series circuit has</h3>
<label><input type="radio" name="q6" value="A"> Multiple paths</label>
<label><input type="radio" name="q6" value="B"> Single path</label>
<label><input type="radio" name="q6" value="C"> No path</label>
<label><input type="radio" name="q6" value="D"> Infinite path</label>
</div>

<div class="question">
<h3>7. Parallel circuit has</h3>
<label><input type="radio" name="q7" value="A"> One path</label>
<label><input type="radio" name="q7" value="B"> No path</label>
<label><input type="radio" name="q7" value="C"> Multiple paths</label>
<label><input type="radio" name="q7" value="D"> Fixed path</label>
</div>

<div class="question">
<h3>8. Kirchhoff's Voltage Law states</h3>
<label><input type="radio" name="q8" value="A"> Current is constant</label>
<label><input type="radio" name="q8" value="B"> Power is conserved</label>
<label><input type="radio" name="q8" value="C"> Resistance is fixed</label>
<label><input type="radio" name="q8" value="D"> Sum of voltages in a loop is zero</label>
</div>

<div class="question">
<h3>9. Power is measured in</h3>
<label><input type="radio" name="q9" value="A"> Watt</label>
<label><input type="radio" name="q9" value="B"> Volt</label>
<label><input type="radio" name="q9" value="C"> Ampere</label>
<label><input type="radio" name="q9" value="D"> Coulomb</label>
</div>

<div class="question">
<h3>10. Energy is measured in</h3>
<label><input type="radio" name="q10" value="A"> Volt</label>
<label><input type="radio" name="q10" value="B"> Joule</label>
<label><input type="radio" name="q10" value="C"> Watt</label>
<label><input type="radio" name="q10" value="D"> Ohm</label>
</div>

<div class="question">
<h3>11. AC stands for</h3>
<label><input type="radio" name="q11" value="A"> Automatic Current</label>
<label><input type="radio" name="q11" value="B"> Active Circuit</label>
<label><input type="radio" name="q11" value="C"> Alternating Current</label>
<label><input type="radio" name="q11" value="D"> Alternate Circuit</label>
</div>

<div class="question">
<h3>12. DC stands for</h3>
<label><input type="radio" name="q12" value="A"> Direct Circuit</label>
<label><input type="radio" name="q12" value="B"> Dynamic Current</label>
<label><input type="radio" name="q12" value="C"> Digital Current</label>
<label><input type="radio" name="q12" value="D"> Direct Current</label>
</div>

<div class="question">
<h3>13. Battery supplies</h3>
<label><input type="radio" name="q13" value="A"> DC</label>
<label><input type="radio" name="q13" value="B"> AC</label>
<label><input type="radio" name="q13" value="C"> Both</label>
<label><input type="radio" name="q13" value="D"> None</label>
</div>

<div class="question">
<h3>14. Network theorem used for simplification</h3>
<label><input type="radio" name="q14" value="A"> Norton Theorem</label>
<label><input type="radio" name="q14" value="B"> Thevenin Theorem</label>
<label><input type="radio" name="q14" value="C"> Both A and B</label>
<label><input type="radio" name="q14" value="D"> None</label>
</div>

<div class="question">
<h3>15. Frequency is measured in</h3>
<label><input type="radio" name="q15" value="A"> Volt</label>
<label><input type="radio" name="q15" value="B"> Ohm</label>
<label><input type="radio" name="q15" value="C"> Hertz</label>
<label><input type="radio" name="q15" value="D"> Joule</label>
</div>

<div class="question">
<h3>16. Impedance is represented by</h3>
<label><input type="radio" name="q16" value="A"> I</label>
<label><input type="radio" name="q16" value="B"> R</label>
<label><input type="radio" name="q16" value="C"> V</label>
<label><input type="radio" name="q16" value="D"> Z</label>
</div>

<div class="question">
<h3>17. Capacitor stores</h3>
<label><input type="radio" name="q17" value="A"> Charge</label>
<label><input type="radio" name="q17" value="B"> Heat</label>
<label><input type="radio" name="q17" value="C"> Current</label>
<label><input type="radio" name="q17" value="D"> Resistance</label>
</div>

<div class="question">
<h3>18. Inductor stores energy in</h3>
<label><input type="radio" name="q18" value="A"> Electric Field</label>
<label><input type="radio" name="q18" value="B"> Magnetic Field</label>
<label><input type="radio" name="q18" value="C"> Heat</label>
<label><input type="radio" name="q18" value="D"> Light</label>
</div>

<div class="question">
<h3>19. KCL stands for</h3>
<label><input type="radio" name="q19" value="A"> Kirchhoff Current Law</label>
<label><input type="radio" name="q19" value="B"> Kirchhoff Circuit Law</label>
<label><input type="radio" name="q19" value="C"> Known Current Law</label>
<label><input type="radio" name="q19" value="D"> None</label>
</div>

<div class="question">
<h3>20. Electrical network consists of</h3>
<label><input type="radio" name="q20" value="A"> Only Resistors</label>
<label><input type="radio" name="q20" value="B"> Only Capacitors</label>
<label><input type="radio" name="q20" value="C"> Only Inductors</label>
<label><input type="radio" name="q20" value="D"> Interconnected Electrical Components</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>