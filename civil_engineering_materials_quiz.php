<?php
session_start();

$_SESSION['subject'] = "Civil Engineering Materials";
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

<title>Civil Engineering Materials Quiz - LearnHub</title>


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
Semester 3 - Civil Engineering Materials Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Cement is mainly used as</h3>

<label><input type="radio" name="q1" value="A"> Construction Tool</label>
<label><input type="radio" name="q1" value="B"> Binding Material</label>
<label><input type="radio" name="q1" value="C"> Decoration Material</label>
<label><input type="radio" name="q1" value="D"> Insulating Material</label>

</div>


<div class="question">

<h3>2. The main raw material of cement is</h3>

<label><input type="radio" name="q2" value="A"> Limestone</label>
<label><input type="radio" name="q2" value="B"> Steel</label>
<label><input type="radio" name="q2" value="C"> Wood</label>
<label><input type="radio" name="q2" value="D"> Glass</label>

</div>


<div class="question">

<h3>3. Bricks are generally made from</h3>

<label><input type="radio" name="q3" value="A"> Cement</label>
<label><input type="radio" name="q3" value="B"> Steel</label>
<label><input type="radio" name="q3" value="C"> Clay</label>
<label><input type="radio" name="q3" value="D"> Plastic</label>

</div>


<div class="question">

<h3>4. Concrete is a mixture of</h3>

<label><input type="radio" name="q4" value="A"> Steel only</label>
<label><input type="radio" name="q4" value="B"> Wood and Water</label>
<label><input type="radio" name="q4" value="C"> Brick and Stone</label>
<label><input type="radio" name="q4" value="D"> Cement, Sand, Aggregate and Water</label>

</div>


<div class="question">

<h3>5. Steel is used in construction for</h3>

<label><input type="radio" name="q5" value="A"> Reinforcement</label>
<label><input type="radio" name="q5" value="B"> Painting</label>
<label><input type="radio" name="q5" value="C"> Flooring</label>
<label><input type="radio" name="q5" value="D"> Decoration</label>

</div>


<div class="question">

<h3>6. Aggregate is used in</h3>

<label><input type="radio" name="q6" value="A"> Paint</label>
<label><input type="radio" name="q6" value="B"> Concrete</label>
<label><input type="radio" name="q6" value="C"> Glass</label>
<label><input type="radio" name="q6" value="D"> Timber</label>

</div>


<div class="question">

<h3>7. Timber is obtained from</h3>

<label><input type="radio" name="q7" value="A"> Rocks</label>
<label><input type="radio" name="q7" value="B"> Soil</label>
<label><input type="radio" name="q7" value="C"> Trees</label>
<label><input type="radio" name="q7" value="D"> Metals</label>

</div>


<div class="question">

<h3>8. Glass is mainly made from</h3>

<label><input type="radio" name="q8" value="A"> Silica</label>
<label><input type="radio" name="q8" value="B"> Cement</label>
<label><input type="radio" name="q8" value="C"> Steel</label>
<label><input type="radio" name="q8" value="D"> Clay</label>

</div>


<div class="question">

<h3>9. Bitumen is used in</h3>

<label><input type="radio" name="q9" value="A"> Building Painting</label>
<label><input type="radio" name="q9" value="B"> Furniture</label>
<label><input type="radio" name="q9" value="C"> Windows</label>
<label><input type="radio" name="q9" value="D"> Road Construction</label>

</div>


<div class="question">

<h3>10. Mortar is a mixture of</h3>

<label><input type="radio" name="q10" value="A"> Steel and Water</label>
<label><input type="radio" name="q10" value="B"> Cement and Sand</label>
<label><input type="radio" name="q10" value="C"> Wood and Cement</label>
<label><input type="radio" name="q10" value="D"> Stone and Glass</label>

</div>


<div class="question">

<h3>11. The strongest building stone is</h3>

<label><input type="radio" name="q11" value="A"> Granite</label>
<label><input type="radio" name="q11" value="B"> Brick</label>
<label><input type="radio" name="q11" value="C"> Wood</label>
<label><input type="radio" name="q11" value="D"> Sand</label>

</div>


<div class="question">

<h3>12. Lime is used as</h3>

<label><input type="radio" name="q12" value="A"> Metal</label>
<label><input type="radio" name="q12" value="B"> Plastic</label>
<label><input type="radio" name="q12" value="C"> Binding Material</label>
<label><input type="radio" name="q12" value="D"> Glass</label>

</div>


<div class="question">

<h3>13. Plywood is made from</h3>

<label><input type="radio" name="q13" value="A"> Cement</label>
<label><input type="radio" name="q13" value="B"> Wood Layers</label>
<label><input type="radio" name="q13" value="C"> Steel</label>
<label><input type="radio" name="q13" value="D"> Stone</label>

</div>


<div class="question">

<h3>14. Paint provides</h3>

<label><input type="radio" name="q14" value="A"> Protection and Decoration</label>
<label><input type="radio" name="q14" value="B"> Strength</label>
<label><input type="radio" name="q14" value="C"> Weight</label>
<label><input type="radio" name="q14" value="D"> Load</label>

</div>


<div class="question">

<h3>15. RCC stands for</h3>

<label><input type="radio" name="q15" value="A"> Rapid Cement Concrete</label>
<label><input type="radio" name="q15" value="B"> Ready Concrete Cement</label>
<label><input type="radio" name="q15" value="C"> Reinforced Construction Cement</label>
<label><input type="radio" name="q15" value="D"> Reinforced Cement Concrete</label>

</div>


<div class="question">

<h3>16. Sand is classified as</h3>

<label><input type="radio" name="q16" value="A"> Metal</label>
<label><input type="radio" name="q16" value="B"> Timber</label>
<label><input type="radio" name="q16" value="C"> Fine Aggregate</label>
<label><input type="radio" name="q16" value="D"> Plastic</label>

</div>


<div class="question">

<h3>17. Ceramic tiles are used for</h3>

<label><input type="radio" name="q17" value="A"> Floor Finishing</label>
<label><input type="radio" name="q17" value="B"> Foundation</label>
<label><input type="radio" name="q17" value="C"> Column</label>
<label><input type="radio" name="q17" value="D"> Beam</label>

</div>


<div class="question">

<h3>18. Gypsum is used for</h3>

<label><input type="radio" name="q18" value="A"> Road Work</label>
<label><input type="radio" name="q18" value="B"> Plaster Work</label>
<label><input type="radio" name="q18" value="C"> Steel Work</label>
<label><input type="radio" name="q18" value="D"> Glass Work</label>

</div>


<div class="question">

<h3>19. Quality of construction depends on</h3>

<label><input type="radio" name="q19" value="A"> Colour</label>
<label><input type="radio" name="q19" value="B"> Height</label>
<label><input type="radio" name="q19" value="C"> Design Only</label>
<label><input type="radio" name="q19" value="D"> Quality Materials</label>

</div>


<div class="question">

<h3>20. Cement hardening process is called</h3>

<label><input type="radio" name="q20" value="A"> Hydration</label>
<label><input type="radio" name="q20" value="B"> Cooling</label>
<label><input type="radio" name="q20" value="C"> Drying</label>
<label><input type="radio" name="q20" value="D"> Heating</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>