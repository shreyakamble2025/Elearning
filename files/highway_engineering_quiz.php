<?php
session_start();

$_SESSION['subject'] = "Highway Engineering";
$_SESSION['semester'] = "Semester 4";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'D',
4=>'C',
5=>'B',
6=>'A',
7=>'D',
8=>'C',
9=>'B',
10=>'A',
11=>'D',
12=>'C',
13=>'B',
14=>'A',
15=>'D',
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

<title>Highway Engineering Quiz - LearnHub</title>

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
Highway Engineering Quiz
</h1>

<p class="subheading">
Test your knowledge of Highway Engineering.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Highway Engineering deals with the planning, design and construction of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Railways
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Roads
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Airports
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Dams
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. The top surface of a road is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Pavement
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Shoulder
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Median
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Kerb
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. Flexible pavement is generally made of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Steel
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Stone Blocks
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Bitumen
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. Rigid pavement is generally made of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Gravel
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Cement Concrete
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Sand
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. The side strip provided along the road is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Median
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Shoulder
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Kerb
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Footpath
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. Camber is provided on road surface for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Increasing speed
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Reducing traffic
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Drainage of water
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Decoration
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
12. The topmost layer of flexible pavement is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Subgrade
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Surface Course
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Sub Base
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Base Course
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
13. The material commonly used for road construction is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Wood
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Plastic
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Glass
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
14. WBM stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Water Bound Macadam
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Water Base Material
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Wide Bitumen Method
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Water Bridge Method
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
15. Highway alignment depends on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Traffic and terrain
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Building height
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Colour of road
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Weather only
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
16. The width of road depends on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Traffic volume
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Tree height
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Building design
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Soil colour
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
17. The study of road traffic is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Traffic Engineering
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Water Engineering
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Bridge Engineering
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Railway Engineering
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
18. A bridge is provided to cross
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
River or valley
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Building
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Road surface
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Parking area
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
19. Road markings are used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Traffic guidance
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Decoration
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Increasing pollution
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Reducing road width
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
20. The main objective of highway engineering is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Safe and efficient transportation
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Only building houses
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Water storage
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Railway construction only
</label>

</div>
</div>


<input type="hidden" name="subject" value="Highway Engineering">

<input type="hidden" name="semester" value="Semester 3">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>