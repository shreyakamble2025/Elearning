<?php
session_start();

$_SESSION['subject'] = "Seminar And Project Initiation Course";
$_SESSION['semester'] = "Semester 1";

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

<title>Seminar And Project Initiation Course Quiz - LearnHub</title>

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
<h1 class="heading">Seminar And Project Initiation Course Quiz</h1>
<p class="subheading">
Test your knowledge across Seminar And Project Initiation Course concepts.
</p>
</div>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. A seminar is conducted to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q1" value="A" required>
Present and discuss ideas
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Play games
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Conduct examinations
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Prepare food
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
2. The first step in a project is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q2" value="A" required>
Project execution
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Problem identification
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Project closure
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Testing
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
3. A project report should contain
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q3" value="A" required>
Only conclusion
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Only title
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Systematic project details
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Only references
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
4. Project planning helps in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q4" value="A" required>
Proper execution of work
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Increasing errors
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Avoiding documentation
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Reducing communication
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
5. Presentation skills are important for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q5" value="A" required>
Writing code only
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Playing sports
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Cooking
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Effective communication
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
6. A project guide helps students in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q6" value="A" required>
Entertainment
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Project development
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Sports activities
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Marketing only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
7. The objective of a seminar is to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q7" value="A" required>
Share knowledge
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Waste time
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Conduct interviews
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Collect fees
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
8. Project synopsis is a
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q8" value="A" required>
Detailed final report
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
User manual
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Brief project summary
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Project certificate
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
9. Time management is important because
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q9" value="A" required>
It increases delays
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
It avoids planning
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
It reduces communication
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
It helps complete tasks on schedule
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
10. Teamwork in a project improves
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q10" value="A" required>
Conflicts only
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Productivity and coordination
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Project cost only
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Documentation only
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
11. Feasibility study is carried out to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q11" value="A" required>
Check project viability
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Increase project cost
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Delay project work
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Avoid planning
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
12. Gantt chart is used for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q12" value="A" required>
Programming
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Testing
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Project scheduling
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Documentation
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
13. A project proposal contains
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q13" value="A" required>
Only title
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Objectives and project details
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Only references
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Only conclusion
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
14. Effective communication is essential for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q14" value="A" required>
Successful project completion
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Increasing confusion
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Reducing teamwork
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Avoiding meetings
</label>
</div>
</div>

<div class="question-card">
<div class="question-title">
15. Project documentation helps in
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q15" value="A" required>
Entertainment
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Playing games
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Sports activities
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Maintaining project records
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
16. Risk management is used to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q16" value="A" required>
Create problems
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Increase delays
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Identify and control risks
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Avoid planning
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
17. Seminar presentation should be
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q17" value="A" required>
Clear and organized
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Confusing
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Very lengthy
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Without preparation
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
18. Project evaluation is done to
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q18" value="A" required>
Increase project size
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Assess project performance
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Avoid reporting
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Increase errors
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
19. A project team leader is responsible for
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q19" value="A" required>
Ignoring team members
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Avoiding decisions
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Working alone
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Leading and coordinating the team
</label>
</div>
</div>


<div class="question-card">
<div class="question-title">
20. The final stage of a project is
</div>

<div class="options-grid">
<label class="option-label">
<input type="radio" name="q20" value="A" required>
Project closure
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Planning
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Problem identification
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Proposal writing
</label>
</div>
</div>


<input type="hidden" name="subject" value="Seminar And Project Initiation Course">

<input type="hidden" name="semester" value="Semester 1">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>
</html>