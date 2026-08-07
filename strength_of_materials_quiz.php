<?php
session_start();

$_SESSION['subject'] = "Strength Of Materials";
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

<title>Strength Of Materials Quiz - LearnHub</title>

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
Strength Of Materials Quiz
</h1>

<p class="subheading">
Test your knowledge of Strength Of Materials.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Stress is defined as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Force × Area
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Force / Area
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Area / Force
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Force + Area
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. SI unit of Stress is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Pascal
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. Strain is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Force / Area
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Stress × Area
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Load / Volume
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Change in Length / Original Length
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. SI unit of Strain is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Pascal
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
No Unit
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Joule
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. Hooke's Law states that stress is directly proportional to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Load
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Strain
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Area
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Volume
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
6. Modulus of Elasticity is the ratio of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Stress / Strain
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Strain / Stress
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Load / Area
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Area / Load
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. SI unit of Modulus of Elasticity is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Joule
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Watt
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Pascal
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. Tensile stress acts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
In compression
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
In bending
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
In tension
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
In shear
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. Compressive stress acts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
In tension
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
In compression
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
In torsion
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
In bending
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. Shear stress acts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Tangentially
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Perpendicular
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Vertically
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Horizontally only
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. Factor of Safety is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Working Stress / Ultimate Stress
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Load / Area
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Stress / Strain
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Ultimate Stress / Working Stress
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Poisson's Ratio is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Longitudinal Strain / Lateral Strain
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Stress / Strain
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Lateral Strain / Longitudinal Strain
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Load / Area
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Unit of Load is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Pascal
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. A ductile material undergoes large
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Deformation before failure
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Cracking immediately
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
No deformation
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Shrinkage only
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Mild steel is a
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Brittle material
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Elastic material
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Plastic material
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Ductile material
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
16. Brittle materials fail with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Large deformation
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Plastic flow
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Gradual elongation
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Little or no deformation
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. Resilience is the ability of a material to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Absorb energy within elastic limit
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Resist corrosion
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Increase weight
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Reduce stress
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Hardness is the resistance to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Indentation
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Expansion
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Compression
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Bending
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. Toughness is the ability to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Conduct heat
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Resist corrosion
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Absorb energy before fracture
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Increase elasticity
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. Unit of Young's Modulus is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Pascal
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Watt
</label>

</div>
</div>

<input type="hidden" name="subject" value="Strength Of Materials">
<input type="hidden" name="semester" value="Semester 2">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>