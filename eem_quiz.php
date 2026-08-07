<?php
session_start();

$_SESSION['subject'] = "Electrical And Electronic Measurement";
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

<title>Electrical And Electronic Measurement Quiz - LearnHub</title>

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
<h1 class="heading">Electrical And Electronic Measurement Quiz</h1>
<p class="subheading">
Test your knowledge across Electrical And Electronic Measurement concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. An instrument used to measure electric current is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Ammeter
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Wattmeter
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Ohmmeter
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. A voltmeter is used to measure
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Voltage
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Current
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Resistance
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Power
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. The unit of resistance is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. The SI unit of power is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Volt
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. A multimeter can measure
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Voltage, Current and Resistance
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Only Voltage
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Only Current
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Only Resistance
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
6. The instrument used to measure electrical power is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Wattmeter
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Ammeter
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Galvanometer
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. The unit of voltage is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Ampere
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Volt
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. A galvanometer is used to detect
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Small Electric Current
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Voltage
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Power
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Frequency
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. The instrument used to measure frequency is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Ammeter
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Ohmmeter
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Frequency Meter
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. An ohmmeter is used to measure
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Current
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Resistance
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Voltage
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Power
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. The SI unit of current is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Ampere
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Volt
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Ohm
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. CRO stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Cathode Ray Oscillator
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Current Reading Oscillator
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Cathode Ray Oscilloscope
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Current Range Oscilloscope
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Energy meter is used to measure
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Current
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Electrical Energy Consumption
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Resistance
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Frequency
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. The unit of electrical energy is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
kWh
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Volt
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Ohm
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Which instrument measures insulation resistance?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Ammeter
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Wattmeter
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Megger
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
Ohm
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Hertz
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Ampere
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. A digital multimeter displays readings in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Digital Form
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Analog Form
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Graph Form
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Wave Form
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Instrument transformer includes
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Power Transformer
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
CT and PT
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Motor Transformer
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Distribution Transformer
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. CT stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Control Transformer
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Current Terminal
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Circuit Tester
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Current Transformer
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. PT stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Potential Transformer
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Power Tester
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Phase Terminal
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Power Transformer
</label>

</div>
</div>

<input type="hidden" name="subject" value="Electrical And Electronic Measurement">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>