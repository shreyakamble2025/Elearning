
<?php
session_start();

$_SESSION['subject'] = "Elements of Electrical Engineering";
$_SESSION['semester'] = "Semester 3";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'A',
9=>'D',
10=>'B',
11=>'A',
12=>'C',
13=>'B',
14=>'A',
15=>'D',
16=>'C',
17=>'A',
18=>'B',
19=>'D',
20=>'A'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Elements of Electrical Engineering Quiz - LearnHub</title>

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
Semester 3 - Elements of Electrical Engineering Quiz
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
<h3>2. Unit of voltage is</h3>
<label><input type="radio" name="q2" value="A"> Volt</label>
<label><input type="radio" name="q2" value="B"> Ampere</label>
<label><input type="radio" name="q2" value="C"> Ohm</label>
<label><input type="radio" name="q2" value="D"> Henry</label>
</div>

<div class="question">
<h3>3. Resistance is measured in</h3>
<label><input type="radio" name="q3" value="A"> Watt</label>
<label><input type="radio" name="q3" value="B"> Volt</label>
<label><input type="radio" name="q3" value="C"> Ohm</label>
<label><input type="radio" name="q3" value="D"> Ampere</label>
</div>

<div class="question">
<h3>4. Unit of power is</h3>
<label><input type="radio" name="q4" value="A"> Joule</label>
<label><input type="radio" name="q4" value="B"> Volt</label>
<label><input type="radio" name="q4" value="C"> Ampere</label>
<label><input type="radio" name="q4" value="D"> Watt</label>
</div>

<div class="question">
<h3>5. Ohm's law is V =</h3>
<label><input type="radio" name="q5" value="A"> IR</label>
<label><input type="radio" name="q5" value="B"> I/R</label>
<label><input type="radio" name="q5" value="C"> R/I</label>
<label><input type="radio" name="q5" value="D"> VI</label>
</div>

<div class="question">
<h3>6. Electric energy is measured in</h3>
<label><input type="radio" name="q6" value="A"> Watt</label>
<label><input type="radio" name="q6" value="B"> kWh</label>
<label><input type="radio" name="q6" value="C"> Volt</label>
<label><input type="radio" name="q6" value="D"> Ampere</label>
</div>

<div class="question">
<h3>7. Unit of capacitance is</h3>
<label><input type="radio" name="q7" value="A"> Henry</label>
<label><input type="radio" name="q7" value="B"> Ohm</label>
<label><input type="radio" name="q7" value="C"> Farad</label>
<label><input type="radio" name="q7" value="D"> Watt</label>
</div>

<div class="question">
<h3>8. Series circuit has</h3>
<label><input type="radio" name="q8" value="A"> One current path</label>
<label><input type="radio" name="q8" value="B"> Two paths</label>
<label><input type="radio" name="q8" value="C"> Three paths</label>
<label><input type="radio" name="q8" value="D"> Four paths</label>
</div>

<div class="question">
<h3>9. Fuse is used for</h3>
<label><input type="radio" name="q9" value="A"> Lighting</label>
<label><input type="radio" name="q9" value="B"> Measuring voltage</label>
<label><input type="radio" name="q9" value="C"> Decoration</label>
<label><input type="radio" name="q9" value="D"> Protection</label>
</div>

<div class="question">
<h3>10. Ammeter is connected in</h3>
<label><input type="radio" name="q10" value="A"> Parallel</label>
<label><input type="radio" name="q10" value="B"> Series</label>
<label><input type="radio" name="q10" value="C"> Open circuit</label>
<label><input type="radio" name="q10" value="D"> Ground</label>
</div>

<div class="question">
<h3>11. Voltmeter is connected in</h3>
<label><input type="radio" name="q11" value="A"> Parallel</label>
<label><input type="radio" name="q11" value="B"> Series</label>
<label><input type="radio" name="q11" value="C"> Short circuit</label>
<label><input type="radio" name="q11" value="D"> Ground</label>
</div>

<div class="question">
<h3>12. Unit of inductance is</h3>
<label><input type="radio" name="q12" value="A"> Farad</label>
<label><input type="radio" name="q12" value="B"> Ohm</label>
<label><input type="radio" name="q12" value="C"> Henry</label>
<label><input type="radio" name="q12" value="D"> Volt</label>
</div>

<div class="question">
<h3>13. MCB stands for</h3>
<label><input type="radio" name="q13" value="A"> Main Control Board</label>
<label><input type="radio" name="q13" value="B"> Miniature Circuit Breaker</label>
<label><input type="radio" name="q13" value="C"> Main Circuit Box</label>
<label><input type="radio" name="q13" value="D"> Motor Control Breaker</label>
</div>

<div class="question">
<h3>14. Electrical power is calculated by</h3>
<label><input type="radio" name="q14" value="A"> V × I</label>
<label><input type="radio" name="q14" value="B"> V/I</label>
<label><input type="radio" name="q14" value="C"> I/R</label>
<label><input type="radio" name="q14" value="D"> R×I²</label>
</div>

<div class="question">
<h3>15. Transformer works on</h3>
<label><input type="radio" name="q15" value="A"> Resistance</label>
<label><input type="radio" name="q15" value="B"> Capacitance</label>
<label><input type="radio" name="q15" value="C"> Induction Heating</label>
<label><input type="radio" name="q15" value="D"> Mutual Induction</label>
</div>

<div class="question">
<h3>16. AC stands for</h3>
<label><input type="radio" name="q16" value="A"> Active Current</label>
<label><input type="radio" name="q16" value="B"> Automatic Current</label>
<label><input type="radio" name="q16" value="C"> Alternating Current</label>
<label><input type="radio" name="q16" value="D"> Applied Current</label>
</div>

<div class="question">
<h3>17. DC stands for</h3>
<label><input type="radio" name="q17" value="A"> Direct Current</label>
<label><input type="radio" name="q17" value="B"> Dynamic Current</label>
<label><input type="radio" name="q17" value="C"> Double Current</label>
<label><input type="radio" name="q17" value="D"> Differential Current</label>
</div>

<div class="question">
<h3>18. Earth wire is used for</h3>
<label><input type="radio" name="q18" value="A"> Lighting</label>
<label><input type="radio" name="q18" value="B"> Safety</label>
<label><input type="radio" name="q18" value="C"> Heating</label>
<label><input type="radio" name="q18" value="D"> Decoration</label>
</div>

<div class="question">
<h3>19. Short circuit causes</h3>
<label><input type="radio" name="q19" value="A"> Low current</label>
<label><input type="radio" name="q19" value="B"> No current</label>
<label><input type="radio" name="q19" value="C"> Normal operation</label>
<label><input type="radio" name="q19" value="D"> Excess current</label>
</div>

<div class="question">
<h3>20. Electrical engineering mainly deals with</h3>
<label><input type="radio" name="q20" value="A"> Generation, transmission and utilization of electricity</label>
<label><input type="radio" name="q20" value="B"> Building construction</label>
<label><input type="radio" name="q20" value="C"> Water supply</label>
<label><input type="radio" name="q20" value="D"> Agriculture</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

