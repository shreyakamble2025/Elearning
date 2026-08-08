<?php
session_start();

$_SESSION['subject'] = "Energy Conservation And Audit";
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

<title>Energy Conservation And Audit Quiz - LearnHub</title>

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
Energy Conservation And Audit Quiz
</h1>


<p class="subheading">
Test your knowledge about Energy Conservation and Energy Audit Concepts
</p>



<div class="card">


<form action="check_quiz.php" method="post">



<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. Energy conservation means
</div>


<label class="option-label">
<input type="radio" name="q1" value="A" required>
Efficient use of energy and reducing wastage
</label>


<label class="option-label">
<input type="radio" name="q1" value="B">
Increasing energy consumption
</label>


<label class="option-label">
<input type="radio" name="q1" value="C">
Stopping all energy usage
</label>


<label class="option-label">
<input type="radio" name="q1" value="D">
Producing more pollution
</label>


</div>




<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. Energy audit is performed to
</div>


<label class="option-label">
<input type="radio" name="q2" value="A" required>
Increase energy losses
</label>


<label class="option-label">
<input type="radio" name="q2" value="B">
Identify energy saving opportunities
</label>


<label class="option-label">
<input type="radio" name="q2" value="C">
Stop industries
</label>


<label class="option-label">
<input type="radio" name="q2" value="D">
Reduce production
</label>


</div>




<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. Energy efficiency means
</div>


<label class="option-label">
<input type="radio" name="q3" value="A" required>
Using more energy
</label>


<label class="option-label">
<input type="radio" name="q3" value="B">
Wasting energy
</label>


<label class="option-label">
<input type="radio" name="q3" value="C">
Getting maximum output with minimum energy
</label>


<label class="option-label">
<input type="radio" name="q3" value="D">
Avoiding technology
</label>


</div>




<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. Energy management helps in
</div>


<label class="option-label">
<input type="radio" name="q4" value="A" required>
Reducing energy consumption and cost
</label>


<label class="option-label">
<input type="radio" name="q4" value="B">
Increasing losses
</label>


<label class="option-label">
<input type="radio" name="q4" value="C">
Stopping machines
</label>


<label class="option-label">
<input type="radio" name="q4" value="D">
Increasing pollution
</label>


</div>




<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. Energy audit report contains
</div>


<label class="option-label">
<input type="radio" name="q5" value="A" required>
Only equipment names
</label>


<label class="option-label">
<input type="radio" name="q5" value="B">
Only electricity bills
</label>


<label class="option-label">
<input type="radio" name="q5" value="C">
Only measurements
</label>


<label class="option-label">
<input type="radio" name="q5" value="D">
Energy analysis and improvement suggestions
</label>


</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. Bureau of Energy Efficiency (BEE) was established for
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Increasing energy wastage
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Promoting energy efficiency and conservation
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Stopping energy production
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Increasing pollution
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. Energy saving can be achieved by using
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Energy efficient equipment
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Old inefficient machines
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
More energy wastage
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Poor maintenance
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. Energy consumption is measured in
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Ampere
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Kilowatt-hour (kWh)
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Ohm
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Power factor improvement helps to
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Increase losses
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Reduce voltage
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Decrease efficiency
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Improve electrical system efficiency
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. Energy conservation in industries reduces
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Production quality
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Operating cost
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Machine life
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Efficiency
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. Energy efficient motors help in
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Reducing energy consumption
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Increasing power losses
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Reducing output
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Increasing wastage
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. LED lamps are preferred because they
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Consume more energy
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Have low efficiency
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Save electrical energy
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Increase losses
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. Energy conservation is important because
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
It increases wastage
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
It saves resources and reduces environmental impact
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
It stops development
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
It increases pollution
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. Energy audit is classified into
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Preliminary and detailed audit
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Only electrical audit
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Only mechanical audit
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
No classification
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. Energy management system helps in
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Increasing energy wastage
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Reducing production
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Increasing energy losses
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Monitoring and controlling energy usage
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Energy conservation helps in reducing
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Energy bills and environmental impact
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Efficiency
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
System performance
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Equipment life
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. Energy meter is used to measure
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Electrical energy consumption
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Temperature
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Pressure
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Speed
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. Capacitor banks are used for
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Increasing power losses
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Power factor improvement
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Reducing voltage
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Increasing current wastage
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. Energy conservation in buildings can be achieved by
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Using inefficient appliances
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Increasing energy consumption
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Ignoring maintenance
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Using energy efficient systems
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. The main objective of energy audit is
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Identify opportunities for energy saving
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Increase energy wastage
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Reduce system efficiency
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Stop energy usage
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