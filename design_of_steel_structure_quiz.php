<?php
session_start();

$_SESSION['subject'] = "Design of Steel Structure";
$_SESSION['semester'] = "Semester 3";

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

<title>Design of Steel Structure Quiz - LearnHub</title>

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
Design of Steel Structure Quiz
</h1>


<p class="subheading">
Test your knowledge of Design of Steel Structure.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Steel is mainly used in structures because of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Low strength
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
High strength and durability
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Low weight only
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Poor quality
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
2. IS 800 is the code for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
General construction in steel
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Concrete design
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Road design
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Bridge painting
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
3. The most common structural steel section is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Circular section
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Square section
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
I-section
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Flat section
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
4. Riveting is a method of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Painting steel
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Cutting steel
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Testing steel
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Joining steel members
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
5. The ability of steel to resist deformation is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Density
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Stiffness
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Weight
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Colour
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
6. Bolted connections are used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Joining steel members
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Painting
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Cooling steel
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Testing soil
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
7. Steel structures are designed to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Only temperature
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Only colour
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Loads and stresses
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Only moisture
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
8. Welding is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Cleaning steel
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Measuring steel
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Painting
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Joining members permanently
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
9. Yield stress is the stress at which steel
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Breaks immediately
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Starts permanent deformation
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Melts
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Changes colour
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
10. The main advantage of steel structure is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
High strength to weight ratio
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Very weak material
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Cannot be reused
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Low durability
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
11. The member which carries compressive load is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Beam
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Column
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Slab
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Plate
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
12. Beam is mainly designed to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Bending moment
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Temperature
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Colour change
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Water pressure
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
13. Gusset plate is used in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Steel truss connections
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Road construction
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Water supply
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Foundation only
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
14. Slenderness ratio is related to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Column design
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Painting
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Welding temperature
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Concrete mix
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
15. Truss members are mainly subjected to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Axial forces
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Water pressure
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Temperature only
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Soil pressure
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
16. Factor of safety is provided to consider
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Uncertainties in design
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Colour of steel
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Weight of paint
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Shape only
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
17. Corrosion of steel can be reduced by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Painting and coating
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Heating
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Cutting
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Loading
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
18. Compression member failure is commonly due to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Buckling
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Painting
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Welding
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Cooling
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
19. Steel structures are preferred because they are
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Strong and durable
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Very weak
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Temporary only
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Non-recyclable
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
20. The main purpose of steel structure design is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Safe and economical structure
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Only decoration
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Increasing weight
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Reducing strength
</label>

</div>
</div>


<input type="hidden" name="subject" value="Design of Steel Structure">

<input type="hidden" name="semester" value="Semester 3">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>