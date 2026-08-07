<?php
session_start();

$_SESSION['subject'] = "Engineering Mechanics";
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
9=>'B',
10=>'A',
11=>'C',
12=>'B',
13=>'D',
14=>'A',
15=>'C',
16=>'B',
17=>'A',
18=>'D',
19=>'C',
20=>'B'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Engineering Mechanics Quiz - LearnHub</title>

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
}

.container{
max-width:900px;
margin:auto;
}

.heading{
text-align:center;
font-size:42px;
color:#38bdf8;
margin-bottom:10px;
}

.subheading{
text-align:center;
color:#cbd5e1;
margin-bottom:30px;
}

.card{
background:rgba(255,255,255,0.06);
backdrop-filter:blur(15px);
padding:30px;
border-radius:20px;
}

.question-card{
background:rgba(255,255,255,0.05);
padding:20px;
margin-bottom:20px;
border-radius:15px;
}

.question-title{
color:#38bdf8;
margin-bottom:15px;
font-size:18px;
}

.options-grid{
display:flex;
flex-direction:column;
gap:10px;
}

.option-label{
display:block;
padding:10px;
background:rgba(255,255,255,0.05);
border-radius:10px;
cursor:pointer;
}

.option-label input{
margin-right:10px;
}

.btn-submit{
width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#0d6efd;
color:white;
font-size:18px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h1 class="heading">
Engineering Mechanics Quiz
</h1>

<p class="subheading">
Test your knowledge of Engineering Mechanics.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Mechanics is the branch of science which deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Heat
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Forces and Motion
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Electricity
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Sound
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. SI unit of Force is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Joule
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Watt
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Pascal
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. SI unit of Work is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Pascal
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. SI unit of Power is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Joule
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Pascal
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. Work done is equal to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Force / Distance
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Force × Distance
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Mass × Velocity
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Force + Distance
</label>

</div>
</div>



<div class="question-card">
<div class="question-title">
6. Moment of a force is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Force × Perpendicular Distance
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Force + Distance
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Mass × Velocity
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Work / Time
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. SI unit of Velocity is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
m²/s
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
kg/m
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
m/s
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
N/m
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. Centre of gravity is the point where
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Mass is zero
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Force is zero
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Velocity is maximum
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Whole weight acts
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. SI unit of Pressure is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Newton
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Pascal
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Joule
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Watt
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. Power is defined as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Work done per unit time
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Force × Distance
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Mass × Acceleration
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Distance / Time
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. SI unit of Mass is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Meter
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Second
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Kilogram
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Newton
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Friction acts
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
In direction of motion
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Opposite to motion
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Vertically upward
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Vertically downward
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. SI unit of Density is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
kg
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
m³
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
N/m²
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
kg/m³
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. Acceleration due to gravity is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
9.81 m/s²
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
8.91 m/s²
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
10.81 m/s²
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
7.81 m/s²
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Momentum is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Force × Distance
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Mass / Velocity
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Mass × Velocity
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Work × Time
</label>

</div>
</div>


<div class="question-card">
<div class="question-title">
16. Newton's Second Law states that
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Force = Mass / Acceleration
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Force = Mass × Acceleration
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Force = Work × Time
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Force = Distance / Time
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. Unit of Acceleration is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
m/s²
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
m/s
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
kg/m³
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
N/m²
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. A body is said to be in equilibrium when
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
It is moving fast
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Its velocity is maximum
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
It has acceleration
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Net force acting on it is zero
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. SI unit of Time is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Minute
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Hour
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Second
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Day
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. Velocity is defined as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Distance travelled
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Displacement per unit time
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Mass × Acceleration
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Work done per second
</label>

</div>
</div>

<input type="hidden" name="subject" value="Engineering Mechanics">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>