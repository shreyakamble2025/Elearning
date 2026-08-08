<?php
session_start();

$_SESSION['subject'] = "Electronic Components and Networks";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'B',
6=>'A',
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

<title>Electronic Components and Networks Quiz - LearnHub</title>

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
Electronic Components and Networks Quiz
</h1>

<p class="subheading">
Test your knowledge across Electronic Components and Networks concepts.
</p>

</div>



<div class="card">


<form action="check_quiz.php" method="post">



<div class="question-card">

<div class="question-title">
1. A semiconductor material commonly used is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
A) Copper
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
B) Silicon
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
C) Aluminium
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
D) Iron
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
2. The unit of resistance is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
A) Ohm
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
B) Volt
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
C) Ampere
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
D) Watt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
3. A diode allows current flow in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
A) Both directions
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
B) No direction
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
C) One direction
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
D) Random direction
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
4. Full form of LED is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
A) Low Energy Device
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
B) Light Energy Display
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
C) Low Emission Diode
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
D) Light Emitting Diode
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
5. A transistor is a
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
A) Two terminal device
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
B) Three terminal device
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
C) Four terminal device
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
D) Single terminal device
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
6. The three terminals of transistor are
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
A) Emitter, Base, Collector
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
B) Anode, Cathode, Gate
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
C) Source, Drain, Gate
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
D) Input, Output, Ground
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
7. The device used for storing electrical charge is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
A) Resistor
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
B) Transistor
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
C) Capacitor
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
D) Diode
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
8. The unit of capacitance is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
A) Ohm
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
B) Henry
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
C) Volt
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
D) Farad
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
9. A resistor is used to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
A) Limit current flow
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
B) Store charge
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
C) Produce light
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
D) Increase voltage
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
10. A logic gate with output 1 only when all inputs are 1 is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
A) OR Gate
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
B) NOT Gate
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
C) AND Gate
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
D) NAND Gate
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
11. The full form of IC is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
A) Internal Circuit
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
B) Input Circuit
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
C) Integrated Circuit
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
D) Intelligent Circuit
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
12. The function of a capacitor is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
A) Store electrical charge
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
B) Increase resistance
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
C) Reduce frequency
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
D) Convert AC to DC
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
13. The output of NOT gate is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
A) Same as input
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
B) Always zero
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
C) Always one
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
D) Complement of input
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
14. A rectifier converts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
A) DC to AC
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
B) AC to DC
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
B) Mechanical energy to electrical energy
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
D) Heat to electricity
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
15. Frequency is measured in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
A) Hertz
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
B) Ohm
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
C) Volt
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
D) Ampere
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
16. The binary number system uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
A) 1 to 10
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
B) 0 to 9
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
C) 0 and 1
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
D) A to Z
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
17. A transistor can be used as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
A) Amplifier and switch
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
B) Only resistor
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
C) Only capacitor
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
D) Only battery
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
18. The device used to convert light energy into electrical energy is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
A) LED
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
B) Resistor
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
C) Capacitor
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
D) Solar cell
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
19. The combination of resistors in series has
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
A) Same current
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
B) Same voltage
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
C) Zero current
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
D) Infinite resistance
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
20. The basic element of digital electronics is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
A) Transformer
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
B) Logic Gate
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
C) Motor
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
D) Generator
</label>

</div>

</div>



<input type="hidden" name="subject" value="Electronic Components and Networks">

<input type="hidden" name="semester" value="Semester 1">



<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>


</body>
</html>