<?php
session_start();

$_SESSION['subject'] = "Engineering Mechanics";
$_SESSION['semester'] = "Semester 1";


$_SESSION['answers']=array(

1=>'B',
2=>'C',
3=>'A',
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

<title>Engineering Mechanics Quiz - LearnHub</title>


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
Semester 1 - Engineering Mechanics Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Engineering Mechanics deals with</h3>

<label>
<input type="radio" name="q1" value="A">
Electricity
</label>

<label>
<input type="radio" name="q1" value="B">
Forces and Motion
</label>

<label>
<input type="radio" name="q1" value="C">
Chemistry
</label>

<label>
<input type="radio" name="q1" value="D">
Biology
</label>

</div>



<div class="question">

<h3>2. SI unit of Force is</h3>

<label>
<input type="radio" name="q2" value="A">
Joule
</label>

<label>
<input type="radio" name="q2" value="B">
Watt
</label>

<label>
<input type="radio" name="q2" value="C">
Newton
</label>

<label>
<input type="radio" name="q2" value="D">
Pascal
</label>

</div>



<div class="question">

<h3>3. Newton's First Law is related to</h3>

<label>
<input type="radio" name="q3" value="A">
Inertia
</label>

<label>
<input type="radio" name="q3" value="B">
Energy
</label>

<label>
<input type="radio" name="q3" value="C">
Power
</label>

<label>
<input type="radio" name="q3" value="D">
Pressure
</label>

</div>



<div class="question">

<h3>4. Force formula is</h3>

<label>
<input type="radio" name="q4" value="A">
Mass/Time
</label>

<label>
<input type="radio" name="q4" value="B">
Distance/Time
</label>

<label>
<input type="radio" name="q4" value="C">
Work/Time
</label>

<label>
<input type="radio" name="q4" value="D">
Mass × Acceleration
</label>

</div>



<div class="question">

<h3>5. Unit of Work is</h3>

<label>
<input type="radio" name="q5" value="A">
Joule
</label>

<label>
<input type="radio" name="q5" value="B">
Newton
</label>

<label>
<input type="radio" name="q5" value="C">
Watt
</label>

<label>
<input type="radio" name="q5" value="D">
Pascal
</label>

</div>



<div class="question">

<h3>6. Moment of Force is</h3>

<label>
<input type="radio" name="q6" value="A">
Force/Distance
</label>

<label>
<input type="radio" name="q6" value="B">
Force × Distance
</label>

<label>
<input type="radio" name="q6" value="C">
Mass × Velocity
</label>

<label>
<input type="radio" name="q6" value="D">
Work/Time
</label>

</div>



<div class="question">

<h3>7. Velocity is a</h3>

<label>
<input type="radio" name="q7" value="A">
Scalar quantity
</label>

<label>
<input type="radio" name="q7" value="B">
Unit
</label>

<label>
<input type="radio" name="q7" value="C">
Vector quantity
</label>

<label>
<input type="radio" name="q7" value="D">
Force
</label>

</div>



<div class="question">

<h3>8. Friction acts</h3>

<label>
<input type="radio" name="q8" value="A">
Opposite to motion
</label>

<label>
<input type="radio" name="q8" value="B">
Same direction
</label>

<label>
<input type="radio" name="q8" value="C">
Vertically upward
</label>

<label>
<input type="radio" name="q8" value="D">
No direction
</label>

</div>



<div class="question">

<h3>9. Acceleration unit is</h3>

<label>
<input type="radio" name="q9" value="A">
m
</label>

<label>
<input type="radio" name="q9" value="B">
m/s
</label>

<label>
<input type="radio" name="q9" value="C">
N
</label>

<label>
<input type="radio" name="q9" value="D">
m/s²
</label>

</div>



<div class="question">

<h3>10. Kinetic Energy depends on</h3>

<label>
<input type="radio" name="q10" value="A">
Height
</label>

<label>
<input type="radio" name="q10" value="B">
Mass and Velocity
</label>

<label>
<input type="radio" name="q10" value="C">
Temperature
</label>

<label>
<input type="radio" name="q10" value="D">
Pressure
</label>

</div>


<div class="question">

<h3>11. Potential Energy depends on</h3>

<label>
<input type="radio" name="q11" value="A">
Height
</label>

<label>
<input type="radio" name="q11" value="B">
Velocity
</label>

<label>
<input type="radio" name="q11" value="C">
Time
</label>

<label>
<input type="radio" name="q11" value="D">
Pressure
</label>

</div>



<div class="question">

<h3>12. Newton's Second Law gives relation between</h3>

<label>
<input type="radio" name="q12" value="A">
Work and Energy
</label>

<label>
<input type="radio" name="q12" value="B">
Pressure and Volume
</label>

<label>
<input type="radio" name="q12" value="C">
Force and Acceleration
</label>

<label>
<input type="radio" name="q12" value="D">
Mass and Density
</label>

</div>



<div class="question">

<h3>13. Equilibrium means</h3>

<label>
<input type="radio" name="q13" value="A">
Maximum Force
</label>

<label>
<input type="radio" name="q13" value="B">
Balanced Forces
</label>

<label>
<input type="radio" name="q13" value="C">
No Mass
</label>

<label>
<input type="radio" name="q13" value="D">
High Speed
</label>

</div>



<div class="question">

<h3>14. Scalar quantity has</h3>

<label>
<input type="radio" name="q14" value="A">
Only Magnitude
</label>

<label>
<input type="radio" name="q14" value="B">
Magnitude and Direction
</label>

<label>
<input type="radio" name="q14" value="C">
Only Direction
</label>

<label>
<input type="radio" name="q14" value="D">
No Value
</label>

</div>



<div class="question">

<h3>15. Power formula is</h3>

<label>
<input type="radio" name="q15" value="A">
Force × Distance
</label>

<label>
<input type="radio" name="q15" value="B">
Mass × Acceleration
</label>

<label>
<input type="radio" name="q15" value="C">
Velocity × Time
</label>

<label>
<input type="radio" name="q15" value="D">
Work / Time
</label>

</div>



<div class="question">

<h3>16. Unit of Pressure is</h3>

<label>
<input type="radio" name="q16" value="A">
Newton
</label>

<label>
<input type="radio" name="q16" value="B">
Joule
</label>

<label>
<input type="radio" name="q16" value="C">
Pascal
</label>

<label>
<input type="radio" name="q16" value="D">
Watt
</label>

</div>



<div class="question">

<h3>17. Centre of Gravity is the point where</h3>

<label>
<input type="radio" name="q17" value="A">
Weight acts
</label>

<label>
<input type="radio" name="q17" value="B">
Velocity acts
</label>

<label>
<input type="radio" name="q17" value="C">
Force stops
</label>

<label>
<input type="radio" name="q17" value="D">
Motion starts
</label>

</div>



<div class="question">

<h3>18. Work done is zero when force is</h3>

<label>
<input type="radio" name="q18" value="A">
Maximum
</label>

<label>
<input type="radio" name="q18" value="B">
Perpendicular to displacement
</label>

<label>
<input type="radio" name="q18" value="C">
Equal to weight
</label>

<label>
<input type="radio" name="q18" value="D">
High
</label>

</div>



<div class="question">

<h3>19. Momentum formula is</h3>

<label>
<input type="radio" name="q19" value="A">
Mass × Acceleration
</label>

<label>
<input type="radio" name="q19" value="B">
Force × Distance
</label>

<label>
<input type="radio" name="q19" value="C">
Work / Time
</label>

<label>
<input type="radio" name="q19" value="D">
Mass × Velocity
</label>

</div>



<div class="question">

<h3>20. SI unit of Mass is</h3>

<label>
<input type="radio" name="q20" value="A">
Kilogram
</label>

<label>
<input type="radio" name="q20" value="B">
Newton
</label>

<label>
<input type="radio" name="q20" value="C">
Gram
</label>

<label>
<input type="radio" name="q20" value="D">
Pound
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>