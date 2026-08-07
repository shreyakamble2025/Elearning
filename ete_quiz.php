<?php
session_start();

$_SESSION['subject'] = "Emerging Trends in Electrical Engineering";
$_SESSION['semester'] = "Semester 7";

$_SESSION['answers'] = array(

1=>'A',
2=>'B',
3=>'C',
4=>'A',
5=>'D',
6=>'B',
7=>'A',
8=>'C',
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

<title>Emerging Trends in Electrical Engineering Quiz - LearnHub</title>

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
display:flex;
justify-content:center;

}

.container{

width:750px;
max-width:100%;

}

.heading{

text-align:center;
font-size:35px;
font-weight:800;
color:#38bdf8;
margin-bottom:10px;

}

.subheading{

text-align:center;
color:#cbd5e1;
margin-bottom:30px;

}

.card{

background:rgba(255,255,255,0.05);
padding:30px;
border-radius:25px;

}

.question-card{

background:rgba(255,255,255,0.04);
padding:20px;
border-radius:15px;
margin-bottom:25px;

}

.question-title{

color:#38bdf8;
font-size:18px;
font-weight:bold;
margin-bottom:15px;

}

.option-label{

display:block;
background:rgba(255,255,255,0.07);
padding:12px;
border-radius:10px;
margin-bottom:10px;
cursor:pointer;

}

.option-label:hover{

background:rgba(255,255,255,0.15);

}

.option-label input{

margin-right:10px;

}

.btn-submit{

width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#0284c7;
color:white;
font-size:18px;
font-weight:bold;

}

</style>

</head>


<body>


<div class="container">


<h1 class="heading">
Emerging Trends in Electrical Engineering Quiz
</h1>

<p class="subheading">
Test your knowledge about Modern Electrical Engineering Technologies
</p>


<div class="card">


<form action="check_quiz.php" method="post">



<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. Renewable energy sources include
</div>

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Solar and wind energy
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Coal energy
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Diesel only
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Petroleum only
</label>

</div>



<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. Smart grid technology uses
</div>

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Manual control only
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Advanced monitoring and communication systems
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Old electrical systems only
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
No automation
</label>

</div>



<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. Electric vehicles use
</div>

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Steam engines
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Fuel engines only
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Electric motors and batteries
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Hydraulic systems only
</label>

</div>



<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. IoT in electrical engineering helps in
</div>

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Remote monitoring and control
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Reducing communication
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Stopping automation
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Manual operation only
</label>

</div>



<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. Energy storage systems are used for
</div>

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Increasing pollution
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Stopping power supply
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Reducing efficiency
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Storing electrical energy for later use
</label>

</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. Solar photovoltaic system converts
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Heat energy into mechanical energy
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Solar energy into electrical energy
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Electrical energy into fuel
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Mechanical energy into heat
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. Artificial Intelligence in electrical systems helps in
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Prediction and automation
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Reducing accuracy
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Stopping communication
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Manual operation only
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. Smart meters are used for
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Generating power
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Reducing voltage
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Automatic measurement and monitoring of energy usage
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Stopping electricity supply
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Wind energy is generated using
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Transformers
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Batteries
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Capacitors
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Wind turbines
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. Battery management system is used in
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Only transformers
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Electric vehicles and energy storage systems
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Only motors
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Only generators
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. Automation in electrical systems improves
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Efficiency and reliability
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Power loss
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Manual errors
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
System failure
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. SCADA system is used for
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Entertainment
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Data deletion
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Supervisory monitoring and control
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Manual operation only
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. Microgrid is a small-scale
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Mechanical system
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Localized power generation and distribution system
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Communication device
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Cooling system
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. LED lighting technology provides
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Higher energy efficiency
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
More power loss
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Low brightness
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
No energy saving
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. Renewable energy helps to reduce
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Energy production
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Electricity usage
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Power generation
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Environmental pollution
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Power electronics is mainly used for
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Controlling and converting electrical power
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Producing mechanical parts
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Only measuring temperature
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Building structures
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. Electric vehicle charging station is used for
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Charging EV batteries
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Generating fuel
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Cooling motors
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Storing petrol
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. Smart grid provides
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Less control
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Efficient power management
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
More power wastage
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Manual operation only
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. Energy conservation means
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Increasing energy wastage
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Stopping electricity usage
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Using more energy unnecessarily
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Efficient use of available energy
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. Future electrical engineering focuses on
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Smart, sustainable and efficient technologies
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Only traditional systems
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Reducing innovation
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Stopping automation
</label>

</div>



<button type="submit" class="btn-submit">
Submit Quiz
</button>



</form>


</div>


</div>


</body>

</html>