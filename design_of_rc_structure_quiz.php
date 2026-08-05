<?php
session_start();

$_SESSION['subject'] = "Design of RC Structure";
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

<title>Design of RC Structure Quiz - LearnHub</title>

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
Semester 3 - Design of RC Structure Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. RC structure means</h3>

<label><input type="radio" name="q1" value="A"> Road Concrete</label>
<label><input type="radio" name="q1" value="B"> Reinforced Concrete Structure</label>
<label><input type="radio" name="q1" value="C"> Railway Concrete</label>
<label><input type="radio" name="q1" value="D"> Ready Cement</label>

</div>


<div class="question">
<h3>2. RCC consists of</h3>

<label><input type="radio" name="q2" value="A"> Concrete and Steel</label>
<label><input type="radio" name="q2" value="B"> Wood and Glass</label>
<label><input type="radio" name="q2" value="C"> Bricks Only</label>
<label><input type="radio" name="q2" value="D"> Soil</label>

</div>


<div class="question">
<h3>3. Concrete is strong in</h3>

<label><input type="radio" name="q3" value="A"> Tension</label>
<label><input type="radio" name="q3" value="B"> Bending</label>
<label><input type="radio" name="q3" value="C"> Compression</label>
<label><input type="radio" name="q3" value="D"> Torsion</label>

</div>


<div class="question">
<h3>4. Steel reinforcement is provided to resist</h3>

<label><input type="radio" name="q4" value="A"> Colour</label>
<label><input type="radio" name="q4" value="B"> Weight</label>
<label><input type="radio" name="q4" value="C"> Heat</label>
<label><input type="radio" name="q4" value="D"> Tensile Stress</label>

</div>


<div class="question">
<h3>5. IS 456 code is related to</h3>

<label><input type="radio" name="q5" value="A"> RCC Design</label>
<label><input type="radio" name="q5" value="B"> Highway Design</label>
<label><input type="radio" name="q5" value="C"> Steel Design</label>
<label><input type="radio" name="q5" value="D"> Water Supply</label>

</div>


<div class="question">
<h3>6. Slab is a structural member used for</h3>

<label><input type="radio" name="q6" value="A"> Foundation</label>
<label><input type="radio" name="q6" value="B"> Floor and Roof</label>
<label><input type="radio" name="q6" value="C"> Wall</label>
<label><input type="radio" name="q6" value="D"> Column</label>

</div>


<div class="question">
<h3>7. Beam mainly resists</h3>

<label><input type="radio" name="q7" value="A"> Temperature</label>
<label><input type="radio" name="q7" value="B"> Colour</label>
<label><input type="radio" name="q7" value="C"> Bending Moment</label>
<label><input type="radio" name="q7" value="D"> Water Pressure</label>

</div>


<div class="question">
<h3>8. Column carries</h3>

<label><input type="radio" name="q8" value="A"> Compressive Load</label>
<label><input type="radio" name="q8" value="B"> Heat Load</label>
<label><input type="radio" name="q8" value="C"> Wind Only</label>
<label><input type="radio" name="q8" value="D"> Decoration</label>

</div>


<div class="question">
<h3>9. Reinforcement bars are made of</h3>

<label><input type="radio" name="q9" value="A"> Wood</label>
<label><input type="radio" name="q9" value="B"> Plastic</label>
<label><input type="radio" name="q9" value="C"> Glass</label>
<label><input type="radio" name="q9" value="D"> Steel</label>

</div>


<div class="question">
<h3>10. RCC design considers</h3>

<label><input type="radio" name="q10" value="A"> Colour</label>
<label><input type="radio" name="q10" value="B"> Load and Strength</label>
<label><input type="radio" name="q10" value="C"> Decoration</label>
<label><input type="radio" name="q10" value="D"> Paint</label>

</div>


<div class="question">
<h3>11. Footing transfers load to</h3>

<label><input type="radio" name="q11" value="A"> Soil</label>
<label><input type="radio" name="q11" value="B"> Roof</label>
<label><input type="radio" name="q11" value="C"> Beam</label>
<label><input type="radio" name="q11" value="D"> Slab</label>

</div>


<div class="question">
<h3>12. Dead load is</h3>

<label><input type="radio" name="q12" value="A"> Moving Load</label>
<label><input type="radio" name="q12" value="B"> Wind Load</label>
<label><input type="radio" name="q12" value="C"> Permanent Load</label>
<label><input type="radio" name="q12" value="D"> Vehicle Load</label>

</div>


<div class="question">
<h3>13. Live load is also called</h3>

<label><input type="radio" name="q13" value="A"> Dead Load</label>
<label><input type="radio" name="q13" value="B"> Imposed Load</label>
<label><input type="radio" name="q13" value="C"> Soil Load</label>
<label><input type="radio" name="q13" value="D"> Thermal Load</label>

</div>


<div class="question">
<h3>14. Concrete mix design determines</h3>

<label><input type="radio" name="q14" value="A"> Concrete Strength</label>
<label><input type="radio" name="q14" value="B"> Colour</label>
<label><input type="radio" name="q14" value="C"> Height</label>
<label><input type="radio" name="q14" value="D"> Shape</label>

</div>


<div class="question">
<h3>15. Beam reinforcement is provided for</h3>

<label><input type="radio" name="q15" value="A"> Decoration</label>
<label><input type="radio" name="q15" value="B"> Painting</label>
<label><input type="radio" name="q15" value="C"> Cooling</label>
<label><input type="radio" name="q15" value="D"> Bending Resistance</label>

</div>


<div class="question">
<h3>16. Limit state method provides</h3>

<label><input type="radio" name="q16" value="A"> Decoration</label>
<label><input type="radio" name="q16" value="B"> Colour</label>
<label><input type="radio" name="q16" value="C"> Safe Design</label>
<label><input type="radio" name="q16" value="D"> Extra Weight</label>

</div>


<div class="question">
<h3>17. Concrete grade represents</h3>

<label><input type="radio" name="q17" value="A"> Strength</label>
<label><input type="radio" name="q17" value="B"> Colour</label>
<label><input type="radio" name="q17" value="C"> Shape</label>
<label><input type="radio" name="q17" value="D"> Size</label>

</div>


<div class="question">
<h3>18. RCC structures are used in</h3>

<label><input type="radio" name="q18" value="A"> Painting</label>
<label><input type="radio" name="q18" value="B"> Buildings and Bridges</label>
<label><input type="radio" name="q18" value="C"> Roads Only</label>
<label><input type="radio" name="q18" value="D"> Furniture</label>

</div>


<div class="question">
<h3>19. Structural design ensures</h3>

<label><input type="radio" name="q19" value="A"> Decoration</label>
<label><input type="radio" name="q19" value="B"> Colour</label>
<label><input type="radio" name="q19" value="C"> Height</label>
<label><input type="radio" name="q19" value="D"> Safety and Stability</label>

</div>


<div class="question">
<h3>20. RCC design aims for</h3>

<label><input type="radio" name="q20" value="A"> Safe and Economical Structure</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Heavy Weight</label>
<label><input type="radio" name="q20" value="D"> Slow Construction</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>