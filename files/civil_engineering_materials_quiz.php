<?php
session_start();

$_SESSION['subject'] = "Civil Engineering Materials";
$_SESSION['semester'] = "Semester 2";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'D',
4=>'C',
5=>'B',
6=>'A',
7=>'D',
8=>'C',
9=>'B',
10=>'A',
11=>'D',
12=>'C',
13=>'B',
14=>'A',
15=>'D',
16=>'C',
17=>'B',
18=>'A',
19=>'D',
20=>'B'

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
Civil Engineering Materials Quiz
</h1>

<p class="subheading">
Test your knowledge of Civil Engineering Materials.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Which material is most commonly used in construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Plastic
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Concrete
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Rubber
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Glass
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. Cement acts as a
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Binding Material
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Reinforcement
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Waterproofing Agent
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Insulation Material
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. Standard size of modular brick is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
200 × 100 × 100 mm
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
180 × 80 × 80 mm
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
230 × 115 × 115 mm
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
190 × 90 × 90 mm
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. Which of the following is a natural material?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Steel
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Cement
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Stone
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Concrete
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. Sand is mainly used in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Painting
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Mortar and Concrete
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Roofing
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Plumbing
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
6. Which cement is commonly used for general construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Ordinary Portland Cement
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
White Cement
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Rapid Hardening Cement
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Low Heat Cement
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. Reinforcement in RCC is generally made of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Copper
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Aluminium
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Plastic
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Steel
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. Which test is commonly conducted on bricks?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Impact Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Tensile Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Compressive Strength Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Fatigue Test
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. Foundation transfers building load to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Wall
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Soil
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Roof
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Beam
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. The lower part of a wall above foundation is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Plinth
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Lintel
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Roof
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Sill
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. Which material is used for damp proofing?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Sand
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Stone
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Brick
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Bitumen
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Aggregate commonly used in RCC is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
80 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
50 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
20 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
100 mm
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Which timber is widely used in construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Rubber
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Teak
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Plastic
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Glass
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. Lintel is provided above
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Doors and Windows
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Foundation
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Floor
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Roof
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Which material is commonly used for flooring?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Steel
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Wood
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Tiles
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Bitumen
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
16. Plastering is done to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Increase wall thickness
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Provide smooth surface
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Reduce strength
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Increase weight
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. RCC stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Reinforced Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Rapid Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Ready Concrete Construction
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Reinforced Clay Concrete
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Which material is commonly used for roof covering?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Sand
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Lime
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Tiles
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Brick Dust
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. The topmost part of a building is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Foundation
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Wall
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Plinth
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Roof
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. Concrete is a mixture of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Cement and Water
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Cement, Sand, Aggregate and Water
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Sand and Water
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Aggregate and Water
</label>

</div>
</div>

<input type="hidden" name="subject" value="Civil Engineering Materials">
<input type="hidden" name="semester" value="Semester 2">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>