<?php
session_start();

$_SESSION['subject'] = "Fundamentals of Electrical Engineering";
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
20=>'C'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fundamentals of Electrical Engineering Quiz - LearnHub</title>

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
Fundamentals of Electrical Engineering Quiz
</h1>

<p class="subheading">
Test your knowledge across Electrical Engineering concepts.
</p>

</div>



<div class="card">


<form action="check_quiz.php" method="post">



<div class="question-card">

<div class="question-title">
1. The SI unit of electric current is
</div>


<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
A) Volt
</label>


<label class="option-label">
<input type="radio" name="q1" value="B">
B) Ampere
</label>


<label class="option-label">
<input type="radio" name="q1" value="C">
C) Ohm
</label>


<label class="option-label">
<input type="radio" name="q1" value="D">
D) Watt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
2. Ohm's law is represented by
</div>


<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
A) V = IR
</label>


<label class="option-label">
<input type="radio" name="q2" value="B">
B) P = VI
</label>


<label class="option-label">
<input type="radio" name="q2" value="C">
C) I = PT
</label>


<label class="option-label">
<input type="radio" name="q2" value="D">
D) V = P/R
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
3. Unit of resistance is
</div>


<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
A) Volt
</label>


<label class="option-label">
<input type="radio" name="q3" value="B">
B) Ampere
</label>


<label class="option-label">
<input type="radio" name="q3" value="C">
C) Ohm
</label>


<label class="option-label">
<input type="radio" name="q3" value="D">
D) Watt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
4. Electrical power formula is
</div>


<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
A) V/I
</label>


<label class="option-label">
<input type="radio" name="q4" value="B">
B) I/R
</label>


<label class="option-label">
<input type="radio" name="q4" value="C">
C) R/I
</label>


<label class="option-label">
<input type="radio" name="q4" value="D">
D) VI
</label>

</div>

</div>
<div class="question-card">

<div class="question-title">
5. The device used to measure electric current is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
A) Ammeter
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
B) Voltmeter
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
C) Wattmeter
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
D) Galvanometer
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
6. A transformer works on the principle of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
A) Electrolysis
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
B) Mutual induction
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
C) Heating effect
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
D) Chemical effect
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
7. The frequency of AC supply in India is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
A) 25 Hz
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
B) 60 Hz
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
C) 50 Hz
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
D) 100 Hz
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
8. The unit of electrical energy is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
A) kWh
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
B) Watt
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
C) Ampere
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
D) Volt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
9. The material which allows electric current to pass is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
A) Insulator
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
B) Semiconductor
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
C) Dielectric
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
D) Conductor
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
10. The function of fuse is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
A) Increase voltage
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
B) Protect circuit from excess current
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
C) Store energy
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
D) Reduce resistance
</label>

</div>

</div>

<div class="question-card">

<div class="question-title">
11. The unit of capacitance is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
A) Farad
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
B) Henry
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
C) Ohm
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
D) Tesla
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
12. A diode allows current to flow in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
A) Both directions
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
B) One direction only
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
C) No direction
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
D) Random direction
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
13. The unit of inductance is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
A) Henry
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
B) Farad
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
C) Ohm
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
D) Volt
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
14. The device which converts electrical energy into mechanical energy is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
A) Generator
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
B) Transformer
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
C) Battery
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
D) Motor
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
15. Kirchhoff's Current Law is based on conservation of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
A) Charge
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
B) Energy
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
C) Power
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
D) Voltage
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
16. The full form of AC is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
A) Applied Current
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
B) Automatic Current
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
C) Alternating Current
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
D) Active Current
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
17. The speed of DC motor can be controlled by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
A) Changing voltage
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
B) Increasing weight
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
C) Changing colour
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
D) Changing size
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
18. The instrument used to measure voltage is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
A) Ammeter
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
B) Wattmeter
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
C) Galvanometer
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
D) Voltmeter
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
19. Electrical resistance depends on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
A) Colour only
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
B) Length and area of conductor
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
C) Temperature only
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
D) Material, length and area
</label>

</div>

</div>



<div class="question-card">

<div class="question-title">
20. Power factor is the ratio of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
A) Resistance to Reactance
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
B) Voltage to Current
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
C) True Power to Apparent Power
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
D) Current to Voltage
</label>

</div>

</div>



<input type="hidden" name="subject" value="Fundamentals of Electrical Engineering">

<input type="hidden" name="semester" value="Semester 1">



<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>


</body>

</html>