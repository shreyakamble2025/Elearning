<?php
session_start();

$_SESSION['subject'] = "Transportation Engineering";
$_SESSION['semester'] = "Semester 5";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'B',
6=>'A',
7=>'C',
8=>'D',
9=>'B',
10=>'A'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Transportation Engineering Quiz - LearnHub</title>

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
Transportation Engineering Quiz
</h1>


<p class="subheading">
Test your knowledge of Transportation Engineering.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Transportation Engineering deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Building Construction
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Planning, design and operation of transport systems
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Water Treatment
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Power Generation
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
2. Highway engineering is related to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Roads and highways
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Buildings
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Dams
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Bridges only
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
3. The main purpose of transportation is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Storage
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Construction
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Movement of people and goods
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Water supply
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
4. The surface course of a road is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Subgrade
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Base course
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Sub-base
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Wearing course
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
5. IRC stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Indian Railway Council
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Indian Roads Congress
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Indian Road Company
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
International Road Code
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
6. The width of road depends on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Traffic volume
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Building height
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Rainfall only
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Soil colour
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
7. Flexible pavement is made of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Concrete slab
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Steel
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Bricks
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
8. Rigid pavement is generally constructed using
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Gravel
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Soil
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Cement concrete
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
9. Camber is provided on road surface for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Increasing traffic
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Drainage of rainwater
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Decoration
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Reducing road width
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
10. Traffic engineering deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Traffic movement and control
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Water storage
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Building design
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Railway construction only
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. The material commonly used in flexible pavement is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Cement
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Steel
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Bitumen
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Wood
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
12. The study of traffic flow is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Traffic Engineering
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Hydrology
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Geology
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Surveying
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
13. Superelevation is provided on road curves to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Increase speed
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Reduce pavement thickness
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Provide drainage
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Counteract centrifugal force
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
14. A bridge is constructed over
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Road only
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Building
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Ground only
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
River or obstacle
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
15. Railway engineering deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Water supply
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Road pavement
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Railway tracks and systems
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Building construction
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
16. The lowest layer of pavement is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Subgrade
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Wearing course
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Surface course
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Shoulder
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
17. Road signs are used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Decoration
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Traffic information and safety
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Increasing cost
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Reducing road width
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
18. Airport engineering deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Railway tracks
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Water channels
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Buildings
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Airports and runways
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
19. The main function of pavement is to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Provide smooth and safe travel surface
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Store water
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Support buildings
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Produce electricity
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
20. Transportation planning aims to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Increase pollution
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Destroy roads
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Efficient movement of people and goods
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Reduce safety
</label>

</div>
</div>



<input type="hidden" name="subject" value="Transportation Engineering">

<input type="hidden" name="semester" value="Semester 5">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>