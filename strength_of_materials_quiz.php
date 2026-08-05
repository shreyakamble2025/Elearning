<?php
session_start();

$_SESSION['subject'] = "Strength of Materials";
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

<title>Strength of Materials Quiz - LearnHub</title>


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
Semester 3 - Strength of Materials Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Strength of Materials deals with</h3>

<label>
<input type="radio" name="q1" value="A">
Electrical Properties
</label>

<label>
<input type="radio" name="q1" value="B">
Strength and Behaviour of Materials
</label>

<label>
<input type="radio" name="q1" value="C">
Chemical Reaction
</label>

<label>
<input type="radio" name="q1" value="D">
Heat Transfer
</label>

</div>



<div class="question">

<h3>2. Unit of Stress is</h3>

<label>
<input type="radio" name="q2" value="A">
Pascal
</label>

<label>
<input type="radio" name="q2" value="B">
Joule
</label>

<label>
<input type="radio" name="q2" value="C">
Newton
</label>

<label>
<input type="radio" name="q2" value="D">
Watt
</label>

</div>



<div class="question">

<h3>3. Stress is defined as</h3>

<label>
<input type="radio" name="q3" value="A">
Force × Area
</label>

<label>
<input type="radio" name="q3" value="B">
Mass / Volume
</label>

<label>
<input type="radio" name="q3" value="C">
Force / Area
</label>

<label>
<input type="radio" name="q3" value="D">
Work / Time
</label>

</div>



<div class="question">

<h3>4. Strain is</h3>

<label>
<input type="radio" name="q4" value="A">
Force
</label>

<label>
<input type="radio" name="q4" value="B">
Stress
</label>

<label>
<input type="radio" name="q4" value="C">
Load
</label>

<label>
<input type="radio" name="q4" value="D">
Deformation per Unit Length
</label>

</div>



<div class="question">

<h3>5. Hooke's Law is valid up to</h3>

<label>
<input type="radio" name="q5" value="A">
Elastic Limit
</label>

<label>
<input type="radio" name="q5" value="B">
Breaking Point
</label>

<label>
<input type="radio" name="q5" value="C">
Plastic Limit
</label>

<label>
<input type="radio" name="q5" value="D">
Failure Point
</label>

</div>



<div class="question">

<h3>6. Young's Modulus is the ratio of</h3>

<label>
<input type="radio" name="q6" value="A">
Load and Area
</label>

<label>
<input type="radio" name="q6" value="B">
Stress and Strain
</label>

<label>
<input type="radio" name="q6" value="C">
Force and Distance
</label>

<label>
<input type="radio" name="q6" value="D">
Work and Time
</label>

</div>



<div class="question">

<h3>7. Tensile stress occurs due to</h3>

<label>
<input type="radio" name="q7" value="A">
Compression
</label>

<label>
<input type="radio" name="q7" value="B">
Twisting
</label>

<label>
<input type="radio" name="q7" value="C">
Pulling Force
</label>

<label>
<input type="radio" name="q7" value="D">
Heating
</label>

</div>



<div class="question">

<h3>8. Compression stress acts due to</h3>

<label>
<input type="radio" name="q8" value="A">
Pushing Force
</label>

<label>
<input type="radio" name="q8" value="B">
Pulling Force
</label>

<label>
<input type="radio" name="q8" value="C">
Rotation
</label>

<label>
<input type="radio" name="q8" value="D">
Temperature
</label>

</div>



<div class="question">

<h3>9. Bending moment unit is</h3>

<label>
<input type="radio" name="q9" value="A">
N
</label>

<label>
<input type="radio" name="q9" value="B">
Pa
</label>

<label>
<input type="radio" name="q9" value="C">
Joule
</label>

<label>
<input type="radio" name="q9" value="D">
N-m
</label>

</div>



<div class="question">

<h3>10. Beam is mainly subjected to</h3>

<label>
<input type="radio" name="q10" value="A">
Tension
</label>

<label>
<input type="radio" name="q10" value="B">
Bending
</label>

<label>
<input type="radio" name="q10" value="C">
Heating
</label>

<label>
<input type="radio" name="q10" value="D">
Expansion
</label>

</div>

<div class="question">

<h3>11. Shear stress is caused by</h3>

<label>
<input type="radio" name="q11" value="A">
Tangential Force
</label>

<label>
<input type="radio" name="q11" value="B">
Vertical Load
</label>

<label>
<input type="radio" name="q11" value="C">
Temperature
</label>

<label>
<input type="radio" name="q11" value="D">
Weight
</label>

</div>



<div class="question">

<h3>12. Moment of inertia depends on</h3>

<label>
<input type="radio" name="q12" value="A">
Material Colour
</label>

<label>
<input type="radio" name="q12" value="B">
Weight
</label>

<label>
<input type="radio" name="q12" value="C">
Shape of Section
</label>

<label>
<input type="radio" name="q12" value="D">
Temperature
</label>

</div>



<div class="question">

<h3>13. Neutral axis in a beam has</h3>

<label>
<input type="radio" name="q13" value="A">
Maximum Stress
</label>

<label>
<input type="radio" name="q13" value="B">
Zero Stress
</label>

<label>
<input type="radio" name="q13" value="C">
Maximum Load
</label>

<label>
<input type="radio" name="q13" value="D">
Maximum Strain
</label>

</div>



<div class="question">

<h3>14. Torsion is related to</h3>

<label>
<input type="radio" name="q14" value="A">
Twisting
</label>

<label>
<input type="radio" name="q14" value="B">
Bending
</label>

<label>
<input type="radio" name="q14" value="C">
Compression
</label>

<label>
<input type="radio" name="q14" value="D">
Expansion
</label>

</div>



<div class="question">

<h3>15. Elasticity is the property of material to</h3>

<label>
<input type="radio" name="q15" value="A">
Break Easily
</label>

<label>
<input type="radio" name="q15" value="B">
Increase Weight
</label>

<label>
<input type="radio" name="q15" value="C">
Change Colour
</label>

<label>
<input type="radio" name="q15" value="D">
Regain Original Shape
</label>

</div>



<div class="question">

<h3>16. The ratio of lateral strain to longitudinal strain is called</h3>

<label>
<input type="radio" name="q16" value="A">
Young's Modulus
</label>

<label>
<input type="radio" name="q16" value="B">
Bulk Modulus
</label>

<label>
<input type="radio" name="q16" value="C">
Poisson's Ratio
</label>

<label>
<input type="radio" name="q16" value="D">
Shear Modulus
</label>

</div>



<div class="question">

<h3>17. Column is mainly subjected to</h3>

<label>
<input type="radio" name="q17" value="A">
Compression
</label>

<label>
<input type="radio" name="q17" value="B">
Tension
</label>

<label>
<input type="radio" name="q17" value="C">
Torsion
</label>

<label>
<input type="radio" name="q17" value="D">
Shear
</label>

</div>



<div class="question">

<h3>18. Factor of safety is the ratio of</h3>

<label>
<input type="radio" name="q18" value="A">
Working Stress / Failure Stress
</label>

<label>
<input type="radio" name="q18" value="B">
Failure Stress / Working Stress
</label>

<label>
<input type="radio" name="q18" value="C">
Load / Area
</label>

<label>
<input type="radio" name="q18" value="D">
Stress / Strain
</label>

</div>



<div class="question">

<h3>19. A simply supported beam has</h3>

<label>
<input type="radio" name="q19" value="A">
Two Supports
</label>

<label>
<input type="radio" name="q19" value="B">
No Support
</label>

<label>
<input type="radio" name="q19" value="C">
One Support
</label>

<label>
<input type="radio" name="q19" value="D">
Fixed Support
</label>

</div>



<div class="question">

<h3>20. The maximum stress before failure is called</h3>

<label>
<input type="radio" name="q20" value="A">
Ultimate Stress
</label>

<label>
<input type="radio" name="q20" value="B">
Working Stress
</label>

<label>
<input type="radio" name="q20" value="C">
Elastic Stress
</label>

<label>
<input type="radio" name="q20" value="D">
Safe Stress
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>