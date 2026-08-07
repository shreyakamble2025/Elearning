<?php
session_start();

$_SESSION['subject'] = "Advanced Construction Technology";
$_SESSION['semester'] = "Semester 3";

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

<title>Advanced Construction Technology Quiz - LearnHub</title>

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
Advanced Construction Technology Quiz
</h1>


<p class="subheading">
Test your knowledge of Advanced Construction Technology.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Advanced construction technology mainly focuses on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Traditional methods only
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Modern construction techniques
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Road signs
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Survey only
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
2. Prefabrication means
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Manufacturing components before site assembly
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Manual excavation
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Road maintenance
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Painting work
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
3. Ready mix concrete is known as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Hand mixed concrete
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Dry concrete
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Concrete produced in plant
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Waste material
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
4. Formwork is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Painting walls
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Testing soil
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Road construction
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Giving shape to concrete
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
5. A crane is mainly used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Mixing concrete
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Lifting heavy loads
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Testing materials
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Measuring land
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
6. Automation in construction helps to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Increase efficiency
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Reduce quality
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Stop construction
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Increase waste
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
7. BIM stands for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Basic Industrial Method
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Building Internal Model
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Building Information Modeling
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Bridge Information Method
</label>

</div>
</div>


<div class="question-card">

<div="question-title">
8. Shotcrete is applied by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Hand tools
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Roller
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Crane
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Spraying method
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
9. Green building technology aims to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Increase pollution
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Save energy and environment
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Increase waste
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Reduce safety
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
10. Construction equipment improves
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Speed and productivity
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Only cost
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Material wastage
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Labour problems
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. Pre-stressed concrete is used to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Increase strength and reduce cracks
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Reduce durability
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Increase weight only
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Replace steel completely
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
12. Tunnel construction commonly uses
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Modern excavation methods
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Painting methods
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Road marking
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Brick decoration
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
13. 3D printing in construction is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Building components
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Water treatment
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Road traffic control
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Soil testing
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
14. Modular construction means
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Assembly of prefabricated modules
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Manual excavation
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Painting buildings
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Removing structures
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
15. GPS technology is used in construction for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Survey and positioning
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Concrete mixing
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Painting work
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Brick manufacturing
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
16. Safety management in construction helps to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Prevent accidents
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Increase risk
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Reduce quality
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Delay work
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
17. Lightweight concrete is used to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Reduce structural weight
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Increase weight
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Reduce strength always
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Replace all materials
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
18. Drone technology in construction is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Site monitoring and survey
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Concrete mixing
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Brick making
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Painting walls
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
19. Sustainable construction focuses on
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Environmental protection
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Increasing pollution
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Material wastage
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Unsafe work
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
20. Advanced construction technology provides
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Faster and efficient construction
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Lower safety
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Poor quality
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
More wastage
</label>

</div>
</div>


<input type="hidden" name="subject" value="Advanced Construction Technology">

<input type="hidden" name="semester" value="Semester 3">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>