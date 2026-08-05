
<?php
session_start();

$_SESSION['subject'] = "A.C. Machines";
$_SESSION['semester'] = "Semester 5";

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

<title>A.C. Machines Quiz - LearnHub</title>

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
Semester 5 - A.C. Machines Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. AC machines operate on</h3>
<label><input type="radio" name="q1" value="A"> Alternating Current</label>
<label><input type="radio" name="q1" value="B"> Direct Current</label>
<label><input type="radio" name="q1" value="C"> Battery Only</label>
<label><input type="radio" name="q1" value="D"> Solar Energy</label>
</div>

<div class="question">
<h3>2. The unit of frequency is</h3>
<label><input type="radio" name="q2" value="A"> Volt</label>
<label><input type="radio" name="q2" value="B"> Hertz</label>
<label><input type="radio" name="q2" value="C"> Watt</label>
<label><input type="radio" name="q2" value="D"> Ohm</label>
</div>

<div class="question">
<h3>3. Synchronous motor runs at</h3>
<label><input type="radio" name="q3" value="A"> Variable Speed</label>
<label><input type="radio" name="q3" value="B"> Half Speed</label>
<label><input type="radio" name="q3" value="C"> Synchronous Speed</label>
<label><input type="radio" name="q3" value="D"> Zero Speed</label>
</div>

<div class="question">
<h3>4. Induction motor works on</h3>
<label><input type="radio" name="q4" value="A"> Electrolysis</label>
<label><input type="radio" name="q4" value="B"> Heating Effect</label>
<label><input type="radio" name="q4" value="C"> Chemical Effect</label>
<label><input type="radio" name="q4" value="D"> Electromagnetic Induction</label>
</div>

<div class="question">
<h3>5. Rotor is the</h3>
<label><input type="radio" name="q5" value="A"> Rotating Part</label>
<label><input type="radio" name="q5" value="B"> Stationary Part</label>
<label><input type="radio" name="q5" value="C"> Frame</label>
<label><input type="radio" name="q5" value="D"> Bearing</label>
</div>

<div class="question">
<h3>6. Stator is the</h3>
<label><input type="radio" name="q6" value="A"> Rotating Part</label>
<label><input type="radio" name="q6" value="B"> Stationary Part</label>
<label><input type="radio" name="q6" value="C"> Shaft</label>
<label><input type="radio" name="q6" value="D"> Coupling</label>
</div>

<div class="question">
<h3>7. Slip in induction motor is measured in</h3>
<label><input type="radio" name="q7" value="A"> Volt</label>
<label><input type="radio" name="q7" value="B"> Ampere</label>
<label><input type="radio" name="q7" value="C"> Percentage</label>
<label><input type="radio" name="q7" value="D"> Watt</label>
</div>

<div class="question">
<h3>8. A synchronous motor runs with</h3>
<label><input type="radio" name="q8" value="A"> High Slip</label>
<label><input type="radio" name="q8" value="B"> Negative Slip</label>
<label><input type="radio" name="q8" value="C"> 50% Slip</label>
<label><input type="radio" name="q8" value="D"> Zero Slip</label>
</div>

<div class="question">
<h3>9. Alternator converts</h3>
<label><input type="radio" name="q9" value="A"> Mechanical Energy into Electrical Energy</label>
<label><input type="radio" name="q9" value="B"> Electrical into Mechanical</label>
<label><input type="radio" name="q9" value="C"> AC into DC</label>
<label><input type="radio" name="q9" value="D"> DC into AC</label>
</div>

<div class="question">
<h3>10. Frequency of generated voltage depends on</h3>
<label><input type="radio" name="q10" value="A"> Current</label>
<label><input type="radio" name="q10" value="B"> Speed and Number of Poles</label>
<label><input type="radio" name="q10" value="C"> Resistance</label>
<label><input type="radio" name="q10" value="D"> Temperature</label>
</div>

<div class="question">
<h3>11. Induction motor is widely used because it is</h3>
<label><input type="radio" name="q11" value="A"> Costly</label>
<label><input type="radio" name="q11" value="B"> Complex</label>
<label><input type="radio" name="q11" value="C"> Simple and Rugged</label>
<label><input type="radio" name="q11" value="D"> Heavy</label>
</div>

<div class="question">
<h3>12. Synchronous speed depends on</h3>
<label><input type="radio" name="q12" value="A"> Voltage</label>
<label><input type="radio" name="q12" value="B"> Current</label>
<label><input type="radio" name="q12" value="C"> Power</label>
<label><input type="radio" name="q12" value="D"> Frequency and Poles</label>
</div>

<div class="question">
<h3>13. The rotor of squirrel cage motor consists of</h3>
<label><input type="radio" name="q13" value="A"> Conducting Bars</label>
<label><input type="radio" name="q13" value="B"> Brushes</label>
<label><input type="radio" name="q13" value="C"> Commutator</label>
<label><input type="radio" name="q13" value="D"> Slip Rings Only</label>
</div>

<div class="question">
<h3>14. Slip ring induction motor uses</h3>
<label><input type="radio" name="q14" value="A"> Commutator</label>
<label><input type="radio" name="q14" value="B"> Slip Rings</label>
<label><input type="radio" name="q14" value="C"> Brushes Only</label>
<label><input type="radio" name="q14" value="D"> Rectifier</label>
</div>

<div class="question">
<h3>15. AC generator is also called</h3>
<label><input type="radio" name="q15" value="A"> Motor</label>
<label><input type="radio" name="q15" value="B"> Transformer</label>
<label><input type="radio" name="q15" value="C"> Alternator</label>
<label><input type="radio" name="q15" value="D"> Converter</label>
</div>

<div class="question">
<h3>16. Power factor of synchronous motor can be</h3>
<label><input type="radio" name="q16" value="A"> Only Lagging</label>
<label><input type="radio" name="q16" value="B"> Only Unity</label>
<label><input type="radio" name="q16" value="C"> Only Leading</label>
<label><input type="radio" name="q16" value="D"> Leading, Lagging or Unity</label>
</div>

<div class="question">
<h3>17. Rotor speed of induction motor is</h3>
<label><input type="radio" name="q17" value="A"> Less than Synchronous Speed</label>
<label><input type="radio" name="q17" value="B"> Greater than Synchronous Speed</label>
<label><input type="radio" name="q17" value="C"> Equal to Double Speed</label>
<label><input type="radio" name="q17" value="D"> Zero</label>
</div>

<div class="question">
<h3>18. AC machines are commonly used in</h3>
<label><input type="radio" name="q18" value="A"> Toys Only</label>
<label><input type="radio" name="q18" value="B"> Industries and Power Systems</label>
<label><input type="radio" name="q18" value="C"> Mobile Phones Only</label>
<label><input type="radio" name="q18" value="D"> Watches Only</label>
</div>

<div class="question">
<h3>19. Efficiency of AC machines is generally</h3>
<label><input type="radio" name="q19" value="A"> Very Low</label>
<label><input type="radio" name="q19" value="B"> 20%</label>
<label><input type="radio" name="q19" value="C"> High</label>
<label><input type="radio" name="q19" value="D"> Zero</label>
</div>

<div class="question">
<h3>20. AC machines are essential for</h3>
<label><input type="radio" name="q20" value="A"> Power Generation and Utilization</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Painting</label>
<label><input type="radio" name="q20" value="D"> Plumbing</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

