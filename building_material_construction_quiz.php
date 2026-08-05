<?php
session_start();

$_SESSION['subject'] = "Building Material & Construction";
$_SESSION['semester'] = "Semester 3";


$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'A',
4=>'A',
5=>'D',
6=>'A',
7=>'B',
8=>'B',
9=>'A',
10=>'D',
11=>'B',
12=>'A',
13=>'A',
14=>'B',
15=>'A',
16=>'A',
17=>'B',
18=>'A',
19=>'A',
20=>'A'

);

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Building Material & Construction Quiz - LearnHub</title>


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
Semester 3 - Building Material & Construction Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Which material is mainly used for construction of walls?</h3>

<label>
<input type="radio" name="q1" value="A">
Steel
</label>

<label>
<input type="radio" name="q1" value="B">
Brick
</label>

<label>
<input type="radio" name="q1" value="C">
Plastic
</label>

<label>
<input type="radio" name="q1" value="D">
Glass
</label>

</div>



<div class="question">

<h3>2. Main ingredients of cement are</h3>

<label>
<input type="radio" name="q2" value="A">
Lime and Clay
</label>

<label>
<input type="radio" name="q2" value="B">
Sand and Stone
</label>

<label>
<input type="radio" name="q2" value="C">
Wood and Water
</label>

<label>
<input type="radio" name="q2" value="D">
Steel and Cement
</label>

</div>



<div class="question">

<h3>3. The process of removing moisture from timber is called</h3>

<label>
<input type="radio" name="q3" value="A">
Seasoning
</label>

<label>
<input type="radio" name="q3" value="B">
Painting
</label>

<label>
<input type="radio" name="q3" value="C">
Mixing
</label>

<label>
<input type="radio" name="q3" value="D">
Burning
</label>

</div>



<div class="question">

<h3>4. Concrete is a mixture of</h3>

<label>
<input type="radio" name="q4" value="A">
Cement, Sand and Aggregate
</label>

<label>
<input type="radio" name="q4" value="B">
Wood and Steel
</label>

<label>
<input type="radio" name="q4" value="C">
Glass and Cement
</label>

<label>
<input type="radio" name="q4" value="D">
Brick and Plastic
</label>

</div>



<div class="question">

<h3>5. Which stones are commonly used for flooring?</h3>

<label>
<input type="radio" name="q5" value="A">
Coal
</label>

<label>
<input type="radio" name="q5" value="B">
Sandstone
</label>

<label>
<input type="radio" name="q5" value="C">
Limestone
</label>

<label>
<input type="radio" name="q5" value="D">
Marble and Granite
</label>

</div>



<div class="question">

<h3>6. Strength of concrete mainly depends on</h3>

<label>
<input type="radio" name="q6" value="A">
Water Cement Ratio
</label>

<label>
<input type="radio" name="q6" value="B">
Colour
</label>

<label>
<input type="radio" name="q6" value="C">
Shape
</label>

<label>
<input type="radio" name="q6" value="D">
Size
</label>

</div>



<div class="question">

<h3>7. Reinforcement in RCC is provided by</h3>

<label>
<input type="radio" name="q7" value="A">
Wood
</label>

<label>
<input type="radio" name="q7" value="B">
Steel
</label>

<label>
<input type="radio" name="q7" value="C">
Plastic
</label>

<label>
<input type="radio" name="q7" value="D">
Glass
</label>

</div>



<div class="question">

<h3>8. Minimum curing period of concrete is</h3>

<label>
<input type="radio" name="q8" value="A">
3 Days
</label>

<label>
<input type="radio" name="q8" value="B">
7 Days
</label>

<label>
<input type="radio" name="q8" value="C">
14 Days
</label>

<label>
<input type="radio" name="q8" value="D">
30 Days
</label>

</div>



<div class="question">

<h3>9. Bricks are mainly made from</h3>

<label>
<input type="radio" name="q9" value="A">
Clay
</label>

<label>
<input type="radio" name="q9" value="B">
Steel
</label>

<label>
<input type="radio" name="q9" value="C">
Aluminium
</label>

<label>
<input type="radio" name="q9" value="D">
Plastic
</label>

</div>



<div class="question">

<h3>10. Test performed on bricks is</h3>

<label>
<input type="radio" name="q10" value="A">
Tensile Test
</label>

<label>
<input type="radio" name="q10" value="B">
Compression Test
</label>

<label>
<input type="radio" name="q10" value="C">
Impact Test
</label>

<label>
<input type="radio" name="q10" value="D">
All of these
</label>

</div>

<div class="question">

<h3>11. Foundation transfers load to</h3>

<label>
<input type="radio" name="q11" value="A">
Roof
</label>

<label>
<input type="radio" name="q11" value="B">
Ground
</label>

<label>
<input type="radio" name="q11" value="C">
Beam
</label>

<label>
<input type="radio" name="q11" value="D">
Column
</label>

</div>



<div class="question">

<h3>12. Mortar is a mixture of</h3>

<label>
<input type="radio" name="q12" value="A">
Cement and Sand
</label>

<label>
<input type="radio" name="q12" value="B">
Steel and Water
</label>

<label>
<input type="radio" name="q12" value="C">
Brick and Stone
</label>

<label>
<input type="radio" name="q12" value="D">
Wood and Cement
</label>

</div>



<div class="question">

<h3>13. Plastering is done to</h3>

<label>
<input type="radio" name="q13" value="A">
Protect Surface
</label>

<label>
<input type="radio" name="q13" value="B">
Increase Weight
</label>

<label>
<input type="radio" name="q13" value="C">
Reduce Height
</label>

<label>
<input type="radio" name="q13" value="D">
Remove Walls
</label>

</div>



<div class="question">

<h3>14. Horizontal member supporting slab is called</h3>

<label>
<input type="radio" name="q14" value="A">
Column
</label>

<label>
<input type="radio" name="q14" value="B">
Beam
</label>

<label>
<input type="radio" name="q14" value="C">
Foundation
</label>

<label>
<input type="radio" name="q14" value="D">
Footing
</label>

</div>



<div class="question">

<h3>15. Which material is fire resistant?</h3>

<label>
<input type="radio" name="q15" value="A">
Concrete
</label>

<label>
<input type="radio" name="q15" value="B">
Wood
</label>

<label>
<input type="radio" name="q15" value="C">
Paper
</label>

<label>
<input type="radio" name="q15" value="D">
Plastic
</label>

</div>



<div class="question">

<h3>16. RCC stands for</h3>

<label>
<input type="radio" name="q16" value="A">
Reinforced Cement Concrete
</label>

<label>
<input type="radio" name="q16" value="B">
Rapid Cement Concrete
</label>

<label>
<input type="radio" name="q16" value="C">
Ready Concrete Cement
</label>

<label>
<input type="radio" name="q16" value="D">
None
</label>

</div>



<div class="question">

<h3>17. Vertical load carrying member is</h3>

<label>
<input type="radio" name="q17" value="A">
Beam
</label>

<label>
<input type="radio" name="q17" value="B">
Column
</label>

<label>
<input type="radio" name="q17" value="C">
Slab
</label>

<label>
<input type="radio" name="q17" value="D">
Lintel
</label>

</div>



<div class="question">

<h3>18. Which is a natural building material?</h3>

<label>
<input type="radio" name="q18" value="A">
Stone
</label>

<label>
<input type="radio" name="q18" value="B">
Plastic
</label>

<label>
<input type="radio" name="q18" value="C">
PVC
</label>

<label>
<input type="radio" name="q18" value="D">
Steel
</label>

</div>



<div class="question">

<h3>19. Lintel is provided above</h3>

<label>
<input type="radio" name="q19" value="A">
Door and Window Opening
</label>

<label>
<input type="radio" name="q19" value="B">
Foundation
</label>

<label>
<input type="radio" name="q19" value="C">
Roof
</label>

<label>
<input type="radio" name="q19" value="D">
Floor
</label>

</div>



<div class="question">

<h3>20. Durability of building depends on</h3>

<label>
<input type="radio" name="q20" value="A">
Quality of Material
</label>

<label>
<input type="radio" name="q20" value="B">
Colour
</label>

<label>
<input type="radio" name="q20" value="C">
Design Only
</label>

<label>
<input type="radio" name="q20" value="D">
Size
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>