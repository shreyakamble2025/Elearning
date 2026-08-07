<?php
session_start();

$_SESSION['subject'] = "Applied Mathematics";
$_SESSION['semester'] = "Semester 1";

$_SESSION['answers'] = array(

1=>'B',
2=>'C',
3=>'A',
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

<title>Applied Mathematics Quiz - LearnHub</title>

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
<h1 class="heading">Applied Mathematics Quiz</h1>
<p class="subheading">
Test your knowledge across Applied Mathematics concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Derivative of x² is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
x
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
2x
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
x²
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
2
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. Integral of 1/x is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
x
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
x²
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
log x
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
1
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. Value of sin 90° is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
1
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
0
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
-1
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
1/2
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Value of cos 0° is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
0
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
-1
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
1/2
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
1
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. Matrix is an arrangement of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Numbers
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Words
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Images
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Symbols only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. Value of π is approximately
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
2.14
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
3.14
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
4.14
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
5.14
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. Slope of straight line is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q7" value="A" required>
x+y
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
xy
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
m
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
1/m
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. Formula of Simple Interest is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
PRT/100
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
PR+T
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
P+R+T
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
PRT
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Determinant belongs to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
Algebra
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Geometry
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Statistics
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Matrix
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. Equation of line is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
x² + y²
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
y = mx + c
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
a² + b²
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
log x
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
11. Derivative of sin x is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q11" value="A" required>
cos x
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
sin x
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
tan x
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
x
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
12. Integration is opposite of
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q12" value="A" required>
Addition
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Multiplication
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Differentiation
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Division
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
13. Value of cos 90° is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q13" value="A" required>
1
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
0
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
-1
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
1/2
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
14. Quadratic equation has degree
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q14" value="A" required>
2
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
1
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
3
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
4
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
15. log(1) value is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q15" value="A" required>
1
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
10
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
-1
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
0
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
16. Area of rectangle is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
2(l+b)
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
l+b
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
l × b
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
l²
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
17. Probability value lies between
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
0 and 1
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
1 and 2
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
-1 and 0
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
2 and 3
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
18. Average formula is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Sum × Number
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Sum / Number
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Number / Sum
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Sum - Number
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
19. A vector has
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Only magnitude
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Only direction
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
No value
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Magnitude and Direction
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
20. Formula of distance is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Speed × Time
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Speed / Time
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Time / Speed
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Distance / Time
</label>
</div>
</div>

<input type="hidden" name="subject" value="Applied Mathematics">
<input type="hidden" name="semester" value="Semester 1">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>