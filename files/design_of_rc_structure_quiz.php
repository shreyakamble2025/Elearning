<?php
session_start();

$_SESSION['subject'] = "Design of RC Structure";
$_SESSION['semester'] = "Semester 5";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'B',
6=>'A',
7=>'C',
8=>'D',
9=>'B',
10=>'A'

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
margin-bottom:10px;
}

.subheading{
text-align:center;
color:#cbd5e1;
margin-bottom:30px;
}

.card{
background:rgba(255,255,255,0.06);
backdrop-filter:blur(15px);
padding:30px;
border-radius:20px;
}

.question-card{
background:rgba(255,255,255,0.05);
padding:20px;
margin-bottom:20px;
border-radius:15px;
}

.question-title{
color:#38bdf8;
margin-bottom:15px;
font-size:18px;
}

.options-grid{
display:flex;
flex-direction:column;
gap:10px;
}

.option-label{
display:block;
padding:10px;
background:rgba(255,255,255,0.05);
border-radius:10px;
cursor:pointer;
}

.option-label input{
margin-right:10px;
}

.btn-submit{
width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#0d6efd;
color:white;
font-size:18px;
cursor:pointer;
}

</style>

</head>

<body>


<div class="container">


<h1 class="heading">
Design of RC Structure Quiz
</h1>


<p class="subheading">
Test your knowledge of Reinforced Concrete Structure Design.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. RCC stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Plain Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Reinforced Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Ready Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Road Cement Concrete
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
2. Concrete is strong in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Compression
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Tension
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Bending
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Torsion
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
3. Steel reinforcement is provided in RCC to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Compression
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Shear
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Tension
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Temperature
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
4. RCC design code in India is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
IS 800
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
IS 875
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
IS 1200
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
IS 456
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
5. Beam mainly resists
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Compression
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Bending Moment
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Temperature
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Shrinkage
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
6. Column is mainly subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Compression
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Tension
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Bending
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Torsion
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
7. Slab is a structural member which transfers load to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Column only
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Foundation
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Beam
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Roof
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
8. Clear cover is provided in RCC to protect steel from
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Loading
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Bending
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Cracking
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Corrosion
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
9. Development length depends on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Height
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Bond stress
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Colour
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Weight
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
10. Limit state design method considers
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Safety and serviceability
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Only cost
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Only appearance
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Only speed
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. Minimum grade of concrete used for RCC work is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
M10
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
M15
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
M20
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
M5
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
12. Main reinforcement in slab is provided for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Bending
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Decoration
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Painting
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Cooling
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
13. Stirrups in beam are provided to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Compression
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Shear
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Tension
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Temperature
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
14. Doubly reinforced beam contains
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Only tension steel
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
No steel
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Only stirrups
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Tension and compression steel
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
15. Characteristic strength of concrete is measured at
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
7 days
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
14 days
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
28 days
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
1 day
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
16. Unit of stress is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
N/mm²
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Meter
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Kg
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Second
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
17. Footing transfers load to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Water
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Soil
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Air
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Roof
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
18. Concrete is made from
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Steel only
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Water only
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Bricks
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Cement, sand and aggregate
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
19. RCC structures are designed for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Strength and durability
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Colour
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Decoration
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Weight only
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
20. IS 456 relates to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Steel Structure
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Road Design
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Plain and Reinforced Concrete
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Surveying
</label>

</div>
</div>



<input type="hidden" name="subject" value="Design of RC Structure">

<input type="hidden" name="semester" value="Semester 5">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>