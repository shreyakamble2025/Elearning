<?php
session_start();

$_SESSION['subject'] = "Applied Science";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'B',
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
14=>'D',
15=>'A',
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

<title>Applied Science Quiz - LearnHub</title>

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
<h1 class="heading">Applied Science Quiz</h1>
<p class="subheading">
Test your knowledge across Applied Science concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. SI Unit of Length is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
Kilogram
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Meter
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Second
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Ampere
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. Chemical formula of Water is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
H₂O
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
CO₂
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
O₂
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
NaCl
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. Unit of Voltage is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
Ampere
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Volt
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Watt
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Electron carries
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
Positive Charge
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Neutral Charge
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Both
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Negative Charge
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. SI Unit of Mass is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Kilogram
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Meter
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Second
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Newton
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. SI Unit of Force is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
Joule
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Watt
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Pascal
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. Unit of Electric Current is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q7" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Watt
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. Speed of Light is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
3 × 10⁸ m/s
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
3 × 10⁶ m/s
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
3 × 10⁴ m/s
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
3 × 10² m/s
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Instrument used to measure Temperature is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
Barometer
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Ammeter
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Thermometer
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. Unit of Power is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
Joule
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Watt
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Newton
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Pascal
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
11. pH value of Pure Water is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q11" value="A" required>
7
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
5
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
9
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
1
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
12. Chemical Symbol of Sodium is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q12" value="A" required>
S
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
So
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Na
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
N
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
13. Unit of Resistance is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q13" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Watt
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
14. Gas Essential for Respiration is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q14" value="A" required>
Nitrogen
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Hydrogen
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Carbon Dioxide
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Oxygen
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
15. SI Unit of Energy is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q15" value="A" required>
Watt
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Pascal
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
16. Which vitamin is produced by sunlight?
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
Vitamin A
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Vitamin B
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Vitamin D
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Vitamin K
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
17. Metal used in electric wires is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
Iron
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Copper
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Aluminium
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Silver
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
18. Which planet is known as the Red Planet?
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Mars
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Venus
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Earth
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Jupiter
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
19. Instrument used to measure Electric Current is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Ohmmeter
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Thermometer
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Ammeter
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
20. Centre of an Atom is called
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Nucleus
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Electron
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Proton
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Neutron
</label>
</div>
</div>

<input type="hidden" name="subject" value="Applied Science">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>