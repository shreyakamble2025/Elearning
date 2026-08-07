<?php
session_start();

$_SESSION['subject'] = "Electrical Power Generation, Transmission and Distribution";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'D',
9=>'A',
10=>'B',
11=>'C',
12=>'A',
13=>'D',
14=>'B',
15=>'A',
16=>'C',
17=>'B',
18=>'D',
19=>'A',
20=>'C'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Electrical Power Generation, Transmission and Distribution Quiz - LearnHub</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',Arial,sans-serif;
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

font-size:2rem;

font-weight:800;

background:linear-gradient(135deg,#38bdf8,#818cf8);

-webkit-background-clip:text;

-webkit-text-fill-color:transparent;

margin-bottom:10px;

}


.subheading{

color:#94a3b8;

}


.card{

background:rgba(255,255,255,0.03);

backdrop-filter:blur(16px);

border:1px solid rgba(255,255,255,0.1);

border-radius:24px;

padding:35px 30px;

box-shadow:0 12px 40px rgba(0,0,0,0.45);

}


.question-card{

background:rgba(255,255,255,0.02);

border:1px solid rgba(255,255,255,0.08);

border-radius:16px;

padding:22px;

margin-bottom:24px;

}


.question-title{

font-size:1.05rem;

font-weight:600;

color:#38bdf8;

margin-bottom:15px;

}


.options-grid{

display:flex;

flex-direction:column;

gap:10px;

}


.option-label{

display:flex;

align-items:center;

padding:12px 15px;

background:rgba(255,255,255,0.04);

border-radius:12px;

cursor:pointer;

}


.option-label:hover{

background:rgba(255,255,255,0.1);

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

font-size:1rem;

font-weight:bold;

cursor:pointer;

}


</style>

</head>


<body>


<div class="container">


<div class="header-group">

<h1 class="heading">
Electrical Power Generation, Transmission and Distribution Quiz
</h1>

<p class="subheading">
Test your knowledge about Electrical Power Systems.
</p>

</div>



<div class="card">


<form action="check_quiz.php" method="post">



<div class="question-card">

<div class="question-title">
1. Electrical power is generated in a
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
A) Transformer
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
B) Power Station
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
C) Motor
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
D) Battery
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
2. The generation of electricity is done by converting
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
A) Mechanical energy into electrical energy
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
B) Electrical energy into heat energy
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
C) Chemical energy into light energy
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
D) Sound energy into electrical energy
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
3. A device used to increase or decrease voltage is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
A) Generator
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
B) Motor
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
C) Transformer
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
D) Capacitor
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
4. The frequency of AC supply in India is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
A) 25 Hz
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
B) 60 Hz
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
C) 100 Hz
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
D) 50 Hz
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
5. The main purpose of transmission system is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
A) Transfer power over long distance
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
B) Store electrical energy
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
C) Generate electricity
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
D) Measure voltage
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
6. Transmission lines generally operate at
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
A) Low Voltage
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
B) High Voltage
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
C) Zero Voltage
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
D) Medium Voltage Only
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
7. Distribution system delivers power to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
A) Power Station
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
B) Transformer Manufacturer
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
C) Consumers
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
D) Turbines
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
8. Hydroelectric power plant uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
A) Coal
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
B) Natural Gas
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
C) Nuclear Fuel
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
D) Water
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
9. Thermal power plant mainly uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
A) Coal
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
B) Water
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
C) Wind
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
D) Solar Energy
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
10. A substation is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
A) Cooking Food
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
B) Voltage Transformation and Control
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
C) Water Storage
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
D) Fuel Storage
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
11. Solar power plant converts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
A) Solar energy into electrical energy
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
B) Heat into sound
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
C) Electrical energy into mechanical energy
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
D) Water into steam
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
12. Wind power plant uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
A) Coal
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
B) Water
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
C) Wind Energy
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
D) Diesel
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
13. The device used for protection in power systems is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
A) Capacitor
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
B) Relay
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
C) Motor
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
D) Generator
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
14. The standard domestic supply voltage in India is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
A) 110 V
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
B) 230 V
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
C) 500 V
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
D) 1000 V
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
15. Distribution transformer is generally installed
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
A) Near Consumers
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
B) Inside Generator
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
C) Inside Turbine
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
D) Inside Battery
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
16. Nuclear power plant uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
A) Coal
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
B) Diesel
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
C) Uranium
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
D) Wind
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
17. Transmission efficiency is improved by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
A) Low Voltage
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
B) High Voltage
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
C) Low Frequency
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
D) Low Current Only
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
18. The unit of electrical power is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
A) Volt
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
B) Ampere
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
C) Ohm
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
D) Watt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
19. The function of circuit breaker is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
A) Protect circuit during faults
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
B) Increase voltage
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
C) Generate power
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
D) Store energy
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
20. The final stage of power system is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
A) Generation
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
B) Transmission
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
C) Distribution
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
D) Protection
</label>

</div>

</div>



<input type="hidden" name="subject" value="Electrical Power Generation, Transmission and Distribution">

<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>