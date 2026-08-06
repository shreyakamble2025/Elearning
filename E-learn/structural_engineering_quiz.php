<?php
session_start();

$_SESSION['subject'] = "Structural Engineering";
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

<title>Structural Engineering Quiz - LearnHub</title>


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
Semester 3 - Structural Engineering Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Structural Engineering deals with</h3>

<label><input type="radio" name="q1" value="A"> Electrical Systems</label>
<label><input type="radio" name="q1" value="B"> Design and Analysis of Structures</label>
<label><input type="radio" name="q1" value="C"> Water Supply</label>
<label><input type="radio" name="q1" value="D"> Road Construction</label>

</div>



<div class="question">

<h3>2. The main purpose of a structure is to</h3>

<label><input type="radio" name="q2" value="A"> Transfer Loads Safely</label>
<label><input type="radio" name="q2" value="B"> Increase Colour</label>
<label><input type="radio" name="q2" value="C"> Reduce Height</label>
<label><input type="radio" name="q2" value="D"> Provide Decoration</label>

</div>



<div class="question">

<h3>3. The vertical load carrying member is</h3>

<label><input type="radio" name="q3" value="A"> Beam</label>
<label><input type="radio" name="q3" value="B"> Slab</label>
<label><input type="radio" name="q3" value="C"> Column</label>
<label><input type="radio" name="q3" value="D"> Roof</label>

</div>



<div class="question">

<h3>4. Beam mainly carries</h3>

<label><input type="radio" name="q4" value="A"> Heat Load</label>
<label><input type="radio" name="q4" value="B"> Water Load</label>
<label><input type="radio" name="q4" value="C"> Soil Load</label>
<label><input type="radio" name="q4" value="D"> Transverse Loads</label>

</div>



<div class="question">

<h3>5. Column is mainly subjected to</h3>

<label><input type="radio" name="q5" value="A"> Compression</label>
<label><input type="radio" name="q5" value="B"> Tension</label>
<label><input type="radio" name="q5" value="C"> Bending Only</label>
<label><input type="radio" name="q5" value="D"> Painting</label>

</div>



<div class="question">

<h3>6. RCC stands for</h3>

<label><input type="radio" name="q6" value="A"> Rapid Cement Concrete</label>
<label><input type="radio" name="q6" value="B"> Reinforced Cement Concrete</label>
<label><input type="radio" name="q6" value="C"> Ready Cement Construction</label>
<label><input type="radio" name="q6" value="D"> Reinforced Construction Cement</label>

</div>



<div class="question">

<h3>7. Foundation transfers load to</h3>

<label><input type="radio" name="q7" value="A"> Roof</label>
<label><input type="radio" name="q7" value="B"> Wall</label>
<label><input type="radio" name="q7" value="C"> Soil</label>
<label><input type="radio" name="q7" value="D"> Beam</label>

</div>



<div class="question">

<h3>8. Slab is a</h3>

<label><input type="radio" name="q8" value="A"> Horizontal Structural Member</label>
<label><input type="radio" name="q8" value="B"> Vertical Member</label>
<label><input type="radio" name="q8" value="C"> Foundation</label>
<label><input type="radio" name="q8" value="D"> Wall</label>

</div>



<div class="question">

<h3>9. Steel is used in RCC for</h3>

<label><input type="radio" name="q9" value="A"> Decoration</label>
<label><input type="radio" name="q9" value="B"> Flooring</label>
<label><input type="radio" name="q9" value="C"> Painting</label>
<label><input type="radio" name="q9" value="D"> Taking Tensile Stress</label>

</div>



<div class="question">

<h3>10. Dead load means</h3>

<label><input type="radio" name="q10" value="A"> Moving Load</label>
<label><input type="radio" name="q10" value="B"> Permanent Load</label>
<label><input type="radio" name="q10" value="C"> Wind Load</label>
<label><input type="radio" name="q10" value="D"> Temporary Load</label>

</div>



<div class="question">

<h3>11. Live load includes</h3>

<label><input type="radio" name="q11" value="A"> Movable Loads</label>
<label><input type="radio" name="q11" value="B"> Self Weight</label>
<label><input type="radio" name="q11" value="C"> Foundation Weight</label>
<label><input type="radio" name="q11" value="D"> Column Weight</label>

</div>



<div class="question">

<h3>12. Stress is defined as</h3>

<label><input type="radio" name="q12" value="A"> Area / Load</label>
<label><input type="radio" name="q12" value="B"> Length</label>
<label><input type="radio" name="q12" value="C"> Load / Area</label>
<label><input type="radio" name="q12" value="D"> Volume</label>

</div>



<div class="question">

<h3>13. Strain is the ratio of</h3>

<label><input type="radio" name="q13" value="A"> Load</label>
<label><input type="radio" name="q13" value="B"> Change in Length / Original Length</label>
<label><input type="radio" name="q13" value="C"> Area</label>
<label><input type="radio" name="q13" value="D"> Weight</label>

</div>



<div class="question">

<h3>14. Unit of stress is</h3>

<label><input type="radio" name="q14" value="A"> N/mm²</label>
<label><input type="radio" name="q14" value="B"> Meter</label>
<label><input type="radio" name="q14" value="C"> Kg</label>
<label><input type="radio" name="q14" value="D"> Second</label>

</div>



<div class="question">

<h3>15. Elasticity means</h3>

<label><input type="radio" name="q15" value="A"> Breaking</label>
<label><input type="radio" name="q15" value="B"> Heating</label>
<label><input type="radio" name="q15" value="C"> Weakness</label>
<label><input type="radio" name="q15" value="D"> Regaining Original Shape</label>

</div>



<div class="question">

<h3>16. Tensile stress is produced by</h3>

<label><input type="radio" name="q16" value="A"> Compression</label>
<label><input type="radio" name="q16" value="B"> Bending</label>
<label><input type="radio" name="q16" value="C"> Pulling Force</label>
<label><input type="radio" name="q16" value="D"> Heating</label>

</div>



<div class="question">

<h3>17. Concrete is strong in</h3>

<label><input type="radio" name="q17" value="A"> Compression</label>
<label><input type="radio" name="q17" value="B"> Tension</label>
<label><input type="radio" name="q17" value="C"> Bending</label>
<label><input type="radio" name="q17" value="D"> Twisting</label>

</div>



<div class="question">

<h3>18. Truss consists of</h3>

<label><input type="radio" name="q18" value="A"> Bricks</label>
<label><input type="radio" name="q18" value="B"> Members and Joints</label>
<label><input type="radio" name="q18" value="C"> Windows</label>
<label><input type="radio" name="q18" value="D"> Pipes</label>

</div>



<div class="question">

<h3>19. Factor of safety is used for</h3>

<label><input type="radio" name="q19" value="A"> Decoration</label>
<label><input type="radio" name="q19" value="B"> Colour Selection</label>
<label><input type="radio" name="q19" value="C"> Cost Reduction</label>
<label><input type="radio" name="q19" value="D"> Safety of Structure</label>

</div>



<div class="question">

<h3>20. Structural analysis determines</h3>

<label><input type="radio" name="q20" value="A"> Forces and Reactions</label>
<label><input type="radio" name="q20" value="B"> Paint Quality</label>
<label><input type="radio" name="q20" value="C"> Building Colour</label>
<label><input type="radio" name="q20" value="D"> Decoration</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>