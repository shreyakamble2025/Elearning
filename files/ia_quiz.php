<?php
session_start();

$_SESSION['subject'] = "Industrial Automation";
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

<title>Industrial Automation Quiz - LearnHub</title>

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
Industrial Automation Quiz
</h1>

<p class="subheading">
Test your knowledge about Industrial Automation Concepts
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. Industrial automation means
</div>

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Using control systems to automate industrial processes
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Only manual operation
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Stopping production
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Removing machines
</label>

</div>



<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. PLC stands for
</div>

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Power Line Circuit
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Programmable Logic Controller
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Program Load Control
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Power Level Controller
</label>

</div>



<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. PLC is mainly used for
</div>

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Entertainment systems
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Lighting decoration
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Industrial process control
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Communication only
</label>

</div>



<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. SCADA system is used for
</div>

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Supervisory monitoring and control
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Mechanical design
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Manual operation
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Energy generation only
</label>

</div>



<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. Sensors are used to
</div>

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Increase manual work
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Stop machines
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Reduce automation
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Detect and measure physical parameters
</label>

</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. Automation improves
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Manual errors
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Productivity and efficiency
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Production cost only
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Machine failure
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. HMI stands for
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Human Machine Interface
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
High Machine Input
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Human Motor Interface
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
High Manual Interface
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. Actuator converts
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Mechanical energy into signal
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Data into information
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Control signal into physical action
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Heat into electricity
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Industrial robots are used for
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Entertainment
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Manual paperwork
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Human replacement only
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Automated manufacturing tasks
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. DCS is commonly used in
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Small home systems
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Large industrial process control
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Mobile applications
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Gaming systems
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. A sensor converts
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Physical quantity into electrical signal
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Electricity into fuel
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Heat into mechanical work
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Data into machine
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. Industrial automation uses
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Only manual tools
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Traditional methods only
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
PLC, sensors and control systems
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
No technology
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. Automation reduces
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Production accuracy
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Human errors
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
System efficiency
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Machine performance
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. CNC machines are controlled by
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Computer programs
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Manual force
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Mechanical switches only
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
No control system
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. IoT in industrial automation helps in
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Increasing manual work
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Stopping communication
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Reducing automation
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Remote monitoring and smart control
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Feedback control system is used to
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Improve accuracy and control performance
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Increase errors
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Stop automation
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Remove sensors
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. Pneumatic systems use
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Compressed air
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Electrical energy only
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Fuel
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Solar radiation
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. Industrial automation provides
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Low productivity
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Higher production efficiency
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
More manual errors
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Poor quality
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. PLC programming is commonly done using
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Drawing software only
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Audio software
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Gaming software
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Ladder logic programming
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. The future of industrial automation includes
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
AI, IoT and smart manufacturing
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Only manual systems
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
No technology development
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Removing automation
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