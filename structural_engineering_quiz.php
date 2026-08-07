<?php
session_start();

$_SESSION['subject'] = "Structural Engineering";
$_SESSION['semester'] = "Semester 3";

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
Structural Engineering Quiz
</h1>

<p class="subheading">
Test your knowledge of Structural Engineering.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Structural Engineering deals with the design of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Roads only
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Structures
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Machines
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Vehicles
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. A beam is primarily subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Bending
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Torsion
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Compression
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Tension
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. A column is mainly subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Tension
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Shear
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Bending
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Compression
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. The horizontal structural member is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Column
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Footing
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Beam
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Wall
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. Load transferred from slab to beam is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Wind Load
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Dead Load
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Seismic Load
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Impact Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
6. The vertical structural member is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Column
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Beam
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Slab
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Lintel
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. RCC stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Rapid Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Ready Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Reinforced Clay Concrete
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Reinforced Cement Concrete
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. Which load is permanent in nature?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Live Load
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Wind Load
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Dead Load
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Earthquake Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. Which load varies with occupancy?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Dead Load
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Live Load
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Wind Load
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Seismic Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. Footing is provided below
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Column
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Beam
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Slab
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Roof
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. Unit of load is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Pascal
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Joule
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Watt
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Newton
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Slab is generally subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Torsion
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Compression
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Bending
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Tension
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Steel is used in RCC to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Compression only
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Tension
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Heat
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Water
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. Which structure supports a bridge deck?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Girder
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Brick
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Tile
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Plaster
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Structural analysis helps determine
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Color of building
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Cost only
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Architectural style
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Forces and reactions
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
16. Which load acts due to earthquake?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Dead Load
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Live Load
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Seismic Load
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Impact Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. Which load acts due to moving air?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Water Load
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Wind Load
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Dead Load
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Live Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Truss members are generally subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Tension and Compression
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Bending only
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Torsion only
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Shear only
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. A cantilever beam is fixed at
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Both ends
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Neither end
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Center only
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
One end only
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. Safety factor is used to ensure
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Attractive design
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Structural safety
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Low cost only
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Fast construction
</label>

</div>
</div>

<input type="hidden" name="subject" value="Structural Engineering">
<input type="hidden" name="semester" value="Semester 3">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>