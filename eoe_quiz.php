<?php
session_start();

$_SESSION['subject'] = "Elements of Engineering (EOE)";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'B',
2=>'C',
3=>'A',
4=>'D',
5=>'B',
6=>'A',
7=>'B',
8=>'C',
9=>'A',
10=>'A',
11=>'A',
12=>'A',
13=>'B',
14=>'A',
15=>'A',
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

<title>Elements of Engineering Quiz - LearnHub</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',-apple-system,BlinkMacSystemFont,Roboto,sans-serif;
}

body{
background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 35%,#311042 70%,#0f172a 100%);
background-attachment:fixed;
color:#f8fafc;
min-height:100vh;
padding:40px 20px;
display:flex;
justify-content:center;
}

.container{
width:min(100%,750px);
}

.header-group{
text-align:center;
margin-bottom:35px;
}

.heading{
font-size:2.2rem;
font-weight:800;
background:linear-gradient(135deg,#38bdf8,#818cf8);
-webkit-background-clip:text;
-webkit-text-fill-color:transparent;
margin-bottom:8px;
}

.subheading{
color:#94a3b8;
font-size:0.95rem;
}

.card{
background:rgba(255,255,255,0.03);
backdrop-filter:blur(16px);
border:1px solid rgba(255,255,255,0.1);
border-radius:24px;
padding:36px 30px;
box-shadow:0 12px 40px rgba(0,0,0,0.45);
}

.question-card{
background:rgba(255,255,255,0.02);
border:1px solid rgba(255,255,255,0.07);
border-radius:16px;
padding:22px 20px;
margin-bottom:24px;
}

.question-title{
font-size:1.05rem;
font-weight:600;
color:#38bdf8;
margin-bottom:16px;
}

.options-grid{
display:flex;
flex-direction:column;
gap:10px;
}

.option-label{
display:flex;
align-items:center;
padding:12px 16px;
background:rgba(255,255,255,0.04);
border:1px solid rgba(255,255,255,0.08);
border-radius:12px;
cursor:pointer;
transition:0.3s;
}

.option-label:hover{
background:rgba(255,255,255,0.08);
}

.option-label input{
margin-right:12px;
}

.btn-submit{
width:100%;
padding:16px;
border:none;
border-radius:30px;
background:linear-gradient(135deg,#0d6efd,#0284c7);
color:white;
font-size:1.05rem;
font-weight:700;
cursor:pointer;
margin-top:10px;
}

</style>

</head>


<body>


<div class="container">


<div class="header-group">

<h1 class="heading">
Elements of Engineering (EOE) Quiz
</h1>

<p class="subheading">
Test your knowledge across Engineering concepts.
</p>

</div>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Engineering drawing is mainly used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
A) Calculation
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
B) Communication of ideas
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
C) Programming
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
D) Manufacturing only
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
2. SI unit of force is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
A) Joule
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
B) Watt
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
C) Newton
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
D) Pascal
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
3. Which material is used in construction?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
A) Cement
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
B) Plastic
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
C) Rubber
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
D) Glass
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
4. Full form of CAD is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
A) Computer Applied Design
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
B) Computer Automatic Drawing
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
C) Common Auto Design
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
D) Computer Aided Design
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
5. Strength of material is measured by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
A) Density
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
B) Stress
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
C) Volume
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
D) Length
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
6. Unit of pressure is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
A) Pascal
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
B) Newton
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
C) Joule
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
D) Watt
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
7. Concrete is a mixture of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
A) Steel and wood
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
B) Cement, sand and aggregate
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
C) Plastic and rubber
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
D) Iron only
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
8. Instrument used to measure temperature is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
A) Barometer
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
B) Ammeter
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
C) Thermometer
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
D) Voltmeter
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
9. Welding is a process of joining
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
A) Two metals
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
B) Two plastics
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
C) Two glasses
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
D) Two papers
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
10. Basic unit of length in SI system is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
A) Meter
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
B) Kilogram
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
C) Second
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
D) Ampere
</label>

</div>
</div>

<!-- Question 11 -->

<div class="question-card">

<div class="question-title">
11. Which material has high tensile strength?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
A) Steel
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
B) Wood
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
C) Plastic
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
D) Rubber
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
12. Surveying is related to measurement of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
A) Land
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
B) Temperature
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
C) Electricity
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
D) Pressure
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
13. Machine converts mechanical energy into electrical energy
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
A) Motor
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
B) Generator
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
C) Transformer
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
D) Battery
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
14. Protection of steel from corrosion is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
A) Galvanizing
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
B) Cutting
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
C) Welding
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
D) Casting
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
15. Front view of an object is represented by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
A) Orthographic projection
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
B) Graph
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
C) Flow chart
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
D) Map
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
16. Cement is mainly used in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
A) Cooking
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
B) Painting
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
C) Construction
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
D) Electrical work
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
17. A beam is mainly used to resist
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
A) Bending
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
B) Heating
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
C) Lighting
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
D) Cooling
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
18. SI unit of work is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
A) Newton
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
B) Joule
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
C) Watt
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
D) Pascal
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
19. A force has
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
A) Only magnitude
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
B) Only direction
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
C) Only length
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
D) Magnitude and Direction
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
20. Study of motion is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
A) Kinematics
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
B) Chemistry
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
C) Biology
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
D) Drawing
</label>

</div>
</div>



<input type="hidden" name="subject" value="Elements of Engineering (EOE)">

<input type="hidden" name="semester" value="Semester 1">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>


</body>

</html>