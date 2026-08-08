<?php
session_start();

$_SESSION['subject'] = "Construction Project Management";
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

<title>Construction Project Management Quiz - LearnHub</title>

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
Construction Project Management Quiz
</h1>


<p class="subheading">
Test your knowledge of Construction Project Management.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Project management is mainly concerned with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Only construction work
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Planning, controlling and completing projects
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Material testing only
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Survey work only
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
2. The first stage of construction project is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Planning
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Demolition
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Painting
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Finishing
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
3. CPM stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Construction Project Method
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Cost Project Management
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Critical Path Method
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Control Planning Method
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
4. PERT is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Material testing
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Building design
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Cost calculation
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Project scheduling
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
5. The main objective of project management is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Increase delay
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Complete project within time and cost
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Waste resources
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Reduce quality
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
6. Bar chart is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Project scheduling
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Material testing
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Surveying
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Designing structure
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
7. A project is completed successfully when it satisfies
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Only quality
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Only cost
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Time, cost and quality
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Only speed
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
8. Resources in construction include
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Only materials
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Only labour
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Only machines
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Material, labour and equipment
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
9. The critical path represents
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Shortest activity path
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Longest duration path of activities
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Cost calculation method
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Quality control method
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
10. Scheduling helps in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Proper planning of activities
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Increasing wastage
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Reducing safety
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Stopping project work
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. Quality control in construction ensures
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Good quality of work
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Delay in work
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Increase in cost
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Material wastage
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
12. Estimation is done to determine
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Project cost
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Colour of building
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Soil type only
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Weather condition
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
13. Tendering process is related to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Selection of contractor
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Painting work
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Testing materials only
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Surveying land
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
14. Safety management is important to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Prevent accidents
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Increase delay
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Increase cost
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Reduce quality
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
15. Construction planning includes
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Scheduling and resource planning
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Only painting
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Only demolition
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Only inspection
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
16. Gantt chart was developed by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Henry Gantt
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Newton
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Einstein
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Darwin
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
17. Cost control helps in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Managing project expenses
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Increasing wastage
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Reducing quality
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Stopping work
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
18. A contractor is responsible for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Executing construction work
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Preparing weather report
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Designing only drawings
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Land surveying only
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
19. Risk management identifies
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Possible project risks
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Building colour
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Material shape
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Road width
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
20. The main aim of construction project management is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Complete project successfully within time and budget
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Increase project delay
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Waste resources
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Reduce safety
</label>

</div>
</div>



<input type="hidden" name="subject" value="Construction Project Management">

<input type="hidden" name="semester" value="Semester 5">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>