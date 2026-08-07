<?php
session_start();

$_SESSION['subject'] = "Utilization Of Electrical Energy";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'A',
2=>'B',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'D',
9=>'A',
10=>'B',
11=>'C',
12=>'D',
13=>'A',
14=>'B',
15=>'C',
16=>'D',
17=>'A',
18=>'B',
19=>'C',
20=>'D'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Utilization Of Electrical Energy Quiz - LearnHub</title>

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
<h1 class="heading">Utilization Of Electrical Energy Quiz</h1>
<p class="subheading">
Test your knowledge across Utilization Of Electrical Energy concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Electrical energy is mainly converted into
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
Mechanical Energy Only
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Heat, Light and Mechanical Energy
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Nuclear Energy
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Solar Energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. Electric iron works on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
Heating Effect of Current
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Chemical Effect
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Magnetic Effect
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Electrostatic Effect
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. The device used for room cooling is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
Heater
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Geyser
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Oven
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Air Conditioner
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Electric lamp converts electrical energy into
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
Sound Energy
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Chemical Energy
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Light Energy
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Nuclear Energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. Induction furnace is used for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Cooling
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Melting Metals
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Lighting
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Ventilation
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. Electric heating is based on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
Faraday's Law
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Joule's Law
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Ohm's Law
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Lenz's Law
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. An electric iron converts electrical energy into
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q7" value="A" required>
Mechanical Energy
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Chemical Energy
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Heat Energy
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Sound Energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. Electric welding is mainly used for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
Cutting Wood
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Joining Metals
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Measuring Current
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Generating Power
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Domestic electric supply in India is generally
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
110 V
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
150 V
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
400 V
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
230 V
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. Electric traction is used in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
Fan
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Electric Train
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Transformer
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Generator
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
16. Electric traction system is widely used in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
Railways
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Water Pumps
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Transformers
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Generators
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
17. CFL stands for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
Compact Fluorescent Lamp
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Current Flow Lamp
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Compact Flow Light
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Current Fluorescent Light
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
18. Electric heating element is generally made of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Copper
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Nichrome
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Aluminium
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Silver
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
19. Which appliance is used for room cooling?
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Heater
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Iron
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Refrigerator
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Toaster
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
20. Induction heating works on the principle of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Electromagnetic Induction
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Electrolysis
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Capacitance
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Resistance Only
</label>
</div>
</div>

<input type="hidden" name="subject" value="D.C. Machines And Transformers">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>