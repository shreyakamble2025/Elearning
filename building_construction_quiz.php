<?php
session_start();

$_SESSION['subject'] = "Building Construction";
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

<title>Building Construction Quiz - LearnHub</title>


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
Semester 3 - Building Construction Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">



<div class="question">

<h3>1. Building construction deals with</h3>

<label>
<input type="radio" name="q1" value="A">
Electrical Work
</label>

<label>
<input type="radio" name="q1" value="B">
Planning and Construction of Buildings
</label>

<label>
<input type="radio" name="q1" value="C">
Chemical Process
</label>

<label>
<input type="radio" name="q1" value="D">
Computer Design
</label>

</div>



<div class="question">

<h3>2. Foundation is provided to</h3>

<label>
<input type="radio" name="q2" value="A">
Transfer Load to Ground
</label>

<label>
<input type="radio" name="q2" value="B">
Decorate Building
</label>

<label>
<input type="radio" name="q2" value="C">
Increase Height
</label>

<label>
<input type="radio" name="q2" value="D">
Reduce Cost
</label>

</div>



<div class="question">

<h3>3. The lowest part of building is called</h3>

<label>
<input type="radio" name="q3" value="A">
Roof
</label>

<label>
<input type="radio" name="q3" value="B">
Wall
</label>

<label>
<input type="radio" name="q3" value="C">
Foundation
</label>

<label>
<input type="radio" name="q3" value="D">
Floor
</label>

</div>



<div class="question">

<h3>4. Lintel is provided above</h3>

<label>
<input type="radio" name="q4" value="A">
Foundation
</label>

<label>
<input type="radio" name="q4" value="B">
Column
</label>

<label>
<input type="radio" name="q4" value="C">
Roof
</label>

<label>
<input type="radio" name="q4" value="D">
Door and Window Opening
</label>

</div>



<div class="question">

<h3>5. A column is a</h3>

<label>
<input type="radio" name="q5" value="A">
Vertical Load Carrying Member
</label>

<label>
<input type="radio" name="q5" value="B">
Horizontal Member
</label>

<label>
<input type="radio" name="q5" value="C">
Floor Material
</label>

<label>
<input type="radio" name="q5" value="D">
Roof Covering
</label>

</div>



<div class="question">

<h3>6. Beam is a</h3>

<label>
<input type="radio" name="q6" value="A">
Vertical Member
</label>

<label>
<input type="radio" name="q6" value="B">
Horizontal Member
</label>

<label>
<input type="radio" name="q6" value="C">
Foundation
</label>

<label>
<input type="radio" name="q6" value="D">
Wall
</label>

</div>



<div class="question">

<h3>7. Staircase is used for</h3>

<label>
<input type="radio" name="q7" value="A">
Decoration
</label>

<label>
<input type="radio" name="q7" value="B">
Lighting
</label>

<label>
<input type="radio" name="q7" value="C">
Vertical Movement
</label>

<label>
<input type="radio" name="q7" value="D">
Water Supply
</label>

</div>



<div class="question">

<h3>8. Roof protects building from</h3>

<label>
<input type="radio" name="q8" value="A">
Weather Effects
</label>

<label>
<input type="radio" name="q8" value="B">
Load
</label>

<label>
<input type="radio" name="q8" value="C">
Foundation
</label>

<label>
<input type="radio" name="q8" value="D">
Paint
</label>

</div>



<div class="question">

<h3>9. Brick masonry is constructed using</h3>

<label>
<input type="radio" name="q9" value="A">
Steel
</label>

<label>
<input type="radio" name="q9" value="B">
Glass
</label>

<label>
<input type="radio" name="q9" value="C">
Wood
</label>

<label>
<input type="radio" name="q9" value="D">
Mortar
</label>

</div>



<div class="question">

<h3>10. Plinth is provided above</h3>

<label>
<input type="radio" name="q10" value="A">
Roof
</label>

<label>
<input type="radio" name="q10" value="B">
Foundation
</label>

<label>
<input type="radio" name="q10" value="C">
Beam
</label>

<label>
<input type="radio" name="q10" value="D">
Column
</label>

</div>

<div class="question">

<h3>11. Damp proof course is provided to prevent</h3>

<label>
<input type="radio" name="q11" value="A">
Moisture Entry
</label>

<label>
<input type="radio" name="q11" value="B">
Heat Transfer
</label>

<label>
<input type="radio" name="q11" value="C">
Sound
</label>

<label>
<input type="radio" name="q11" value="D">
Load
</label>

</div>



<div class="question">

<h3>12. Plastering is done on</h3>

<label>
<input type="radio" name="q12" value="A">
Foundation
</label>

<label>
<input type="radio" name="q12" value="B">
Roof
</label>

<label>
<input type="radio" name="q12" value="C">
Wall Surface
</label>

<label>
<input type="radio" name="q12" value="D">
Column Only
</label>

</div>



<div class="question">

<h3>13. The topmost part of a building is</h3>

<label>
<input type="radio" name="q13" value="A">
Foundation
</label>

<label>
<input type="radio" name="q13" value="B">
Roof
</label>

<label>
<input type="radio" name="q13" value="C">
Plinth
</label>

<label>
<input type="radio" name="q13" value="D">
Floor
</label>

</div>



<div class="question">

<h3>14. A wall mainly provides</h3>

<label>
<input type="radio" name="q14" value="A">
Support and Enclosure
</label>

<label>
<input type="radio" name="q14" value="B">
Water Supply
</label>

<label>
<input type="radio" name="q14" value="C">
Lighting
</label>

<label>
<input type="radio" name="q14" value="D">
Ventilation Only
</label>

</div>



<div class="question">

<h3>15. RCC stands for</h3>

<label>
<input type="radio" name="q15" value="A">
Rapid Cement Concrete
</label>

<label>
<input type="radio" name="q15" value="B">
Ready Cement Construction
</label>

<label>
<input type="radio" name="q15" value="C">
Reinforced Construction Cement
</label>

<label>
<input type="radio" name="q15" value="D">
Reinforced Cement Concrete
</label>

</div>



<div class="question">

<h3>16. Foundation depth depends on</h3>

<label>
<input type="radio" name="q16" value="A">
Colour of Building
</label>

<label>
<input type="radio" name="q16" value="B">
Number of Windows
</label>

<label>
<input type="radio" name="q16" value="C">
Soil Condition and Load
</label>

<label>
<input type="radio" name="q16" value="D">
Paint Quality
</label>

</div>



<div class="question">

<h3>17. A slab is used as</h3>

<label>
<input type="radio" name="q17" value="A">
Floor and Roof Covering
</label>

<label>
<input type="radio" name="q17" value="B">
Foundation
</label>

<label>
<input type="radio" name="q17" value="C">
Column
</label>

<label>
<input type="radio" name="q17" value="D">
Wall
</label>

</div>



<div class="question">

<h3>18. Ventilation is provided for</h3>

<label>
<input type="radio" name="q18" value="A">
Fresh Air Circulation
</label>

<label>
<input type="radio" name="q18" value="B">
Increasing Weight
</label>

<label>
<input type="radio" name="q18" value="C">
Foundation Strength
</label>

<label>
<input type="radio" name="q18" value="D">
Reducing Height
</label>

</div>



<div class="question">

<h3>19. The opening provided in wall for entry is called</h3>

<label>
<input type="radio" name="q19" value="A">
Window
</label>

<label>
<input type="radio" name="q19" value="B">
Roof
</label>

<label>
<input type="radio" name="q19" value="C">
Floor
</label>

<label>
<input type="radio" name="q19" value="D">
Door
</label>

</div>



<div class="question">

<h3>20. Good building construction requires</h3>

<label>
<input type="radio" name="q20" value="A">
Quality Materials and Proper Planning
</label>

<label>
<input type="radio" name="q20" value="B">
Only Decoration
</label>

<label>
<input type="radio" name="q20" value="C">
Low Strength Material
</label>

<label>
<input type="radio" name="q20" value="D">
No Design
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>