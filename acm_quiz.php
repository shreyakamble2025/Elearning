<?php
session_start();

$_SESSION['subject'] = "A.C. Machines";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'A',
2=>'A',
3=>'C',
4=>'A',
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

<title>A.C. Machines Quiz - LearnHub</title>

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
<h1 class="heading">A.C. Machines Quiz</h1>
<p class="subheading">
Test your knowledge across A.C. Machines concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. An AC machine operates on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
Alternating Current
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Direct Current
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Battery Current
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Static Current
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. The most commonly used AC motor is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
Induction Motor
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
DC Motor
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Stepper Motor
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Servo Motor
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. The synchronous speed depends on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
Voltage
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Current
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Frequency and Number of Poles
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Resistance
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Rotor of a squirrel cage induction motor is made of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
Copper or Aluminium Bars
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Plastic
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Wood
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Rubber
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. The stationary part of an AC machine is called
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Stator
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Rotor
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Armature
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Commutator
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. The rotor of a synchronous motor rotates at
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
Zero Speed
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Synchronous Speed
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Half Speed
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Variable Speed
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. Slip in a synchronous motor is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q7" value="A" required>
100%
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
50%
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
0%
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
25%
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. The principle of operation of induction motor is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
Electromagnetic Induction
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Electrolysis
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Heating Effect
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Chemical Reaction
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Slip of an induction motor is always
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
Zero
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Negative
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
More than 100%
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Less than 100%
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. The speed of an induction motor is measured in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
RPM
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Ohm
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
11. The rotor of a slip ring induction motor contains
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q11" value="A" required>
Slip Rings
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Commutator
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Brushless Rotor
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Permanent Magnet
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
12. The stator winding of an AC machine is generally made of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q12" value="A" required>
Aluminium Sheet
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Steel Rod
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Copper Conductor
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Plastic Wire
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
13. A synchronous motor runs at
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q13" value="A" required>
Below Synchronous Speed
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Synchronous Speed
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Half Synchronous Speed
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Variable Speed
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
14. The frequency of generated EMF depends on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q14" value="A" required>
Speed and Poles
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Voltage Only
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Current Only
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Resistance Only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
15. AC generators are also called
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q15" value="A" required>
DC Machines
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Rectifiers
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Transformers
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Alternators
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
16. The unit of frequency is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Hertz
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Ohm
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
17. The rotating magnetic field is produced in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
Stator
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Rotor
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Frame
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Shaft
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
18. The rotor of a squirrel cage motor is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Wound Rotor
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Short Circuited Rotor
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
DC Rotor
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Permanent Magnet Rotor
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
19. The efficiency of AC machines is generally
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Low
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Zero
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Negative
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
High
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
20. AC machines are widely used in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Industrial Applications
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Only Laboratories
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Only Schools
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Only Houses
</label>
</div>
</div>

<input type="hidden" name="subject" value="A.C. Machines">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>