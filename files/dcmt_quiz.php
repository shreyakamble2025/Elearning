<?php
session_start();

$_SESSION['subject'] = "D.C. Machines And Transformers";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'A',
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

<title>D.C. Machines And Transformers Quiz - LearnHub</title>

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
<h1 class="heading">D.C. Machines And Transformers Quiz</h1>
<p class="subheading">
Test your knowledge across D.C. Machines And Transformers concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. A DC machine can operate as
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
Motor and Generator
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Transformer only
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Rectifier only
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Battery only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. The function of commutator in DC machine is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
Convert AC to DC
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Increase voltage
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Reduce current
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Store energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. The rotating part of a DC machine is called
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
Stator
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Pole Shoe
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Armature
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Yoke
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Transformer works on the principle of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
Electrolysis
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Heating Effect
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Capacitance
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Electromagnetic Induction
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. The stationary part of a transformer is called
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Core
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Rotor
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Commutator
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Armature
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. The unit of transformer rating is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
kW
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
kVA
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
HP
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Volt
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. The core of transformer is made of
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
Laminated Silicon Steel
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Plastic
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. Brushes in DC machine are generally made of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
Carbon
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Iron
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Steel
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Copper
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Transformer operates on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
DC Supply
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Battery Supply
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Both AC and DC
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
AC Supply
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. Back EMF is produced in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
Transformer
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
DC Motor
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Battery
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Fuse
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
11. The primary winding of a transformer receives
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q11" value="A" required>
Input Supply
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Output Supply
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Mechanical Energy
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Stored Energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
12. The speed of a DC motor depends on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q12" value="A" required>
Temperature
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Pressure
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Voltage and Flux
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Humidity
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
13. Which transformer increases voltage?
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q13" value="A" required>
Step-down Transformer
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Step-up Transformer
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Isolation Transformer
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Auto Transformer
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
14. The efficiency of transformer is generally
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q14" value="A" required>
High
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Low
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Zero
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Negative
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
15. The yoke of a DC machine is made of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q15" value="A" required>
Wood
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Plastic
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Rubber
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Cast Steel
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
16. A transformer changes
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
Frequency
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Power
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Voltage Level
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Energy
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
17. Armature winding is placed on
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
Rotor
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Pole Shoe
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Yoke
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Frame
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
18. Transformer oil is used for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Lubrication only
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Cooling and Insulation
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Painting
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Cleaning only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
19. EMF stands for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Electric Magnetic Force
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Electro Motor Field
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Electro Mechanical Flux
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Electromotive Force
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
20. The unit of magnetic flux is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Weber
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Tesla
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Henry
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Farad
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