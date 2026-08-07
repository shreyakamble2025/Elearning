<?php
session_start();

$_SESSION['subject'] = "Building Material And Construction";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

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
12=>'B',
13=>'C',
14=>'A',
15=>'D',
16=>'B',
17=>'A',
18=>'C',
19=>'D',
20=>'B'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Building Material And Construction Quiz - LearnHub</title>

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
Building Material And Construction Quiz
</h1>

<p class="subheading">
Test your knowledge of Building Material And Construction.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Which material is most commonly used in building construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Plastic
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Brick
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
2. Cement is mainly used as
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
Floor Finish
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Insulation
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. Standard size of a modular brick is
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
4. Which of the following is a natural building material?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Cement
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Concrete
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Stone
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Steel
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
Roofing
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Mortar and Concrete
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Painting
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
7. Which material is used for reinforcement in RCC?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Aluminium
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Copper
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
8. Which test is conducted on bricks?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Tensile Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Impact Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Compressive Strength Test
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Shear Test
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. Foundation transfers load to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Roof
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Soil
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Wall
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Beam
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. The lower part of a wall below ground level is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Foundation
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Lintel
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Plinth
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
Brick
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Stone
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Bitumen
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Which aggregate size is commonly used in RCC?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
5 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
20 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
50 mm
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
80 mm
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Which wood is commonly used in construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Bamboo
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Rubber
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Teak
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Plastic
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. Lintel is provided over
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
Roof
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Floor
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Which material is used for flooring?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Tiles
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Steel
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Cement Pipe
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
Increase weight
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
Increase moisture
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
Ready Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Rapid Concrete Construction
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Reinforced Clay Concrete
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Which material is used for roof covering?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Sand
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Brick
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Tiles
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Lime
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
Plinth
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Wall
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

<input type="hidden" name="subject" value="Building Material And Construction">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>