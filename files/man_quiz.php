<?php
session_start();

$_SESSION['subject'] = "Management";
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

<title>Management Quiz - LearnHub</title>

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
Management Quiz
</h1>

<p class="subheading">
Test your knowledge about Management Concepts
</p>


<div class="card">


<form action="check_quiz.php" method="post">



<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. Management is the process of
</div>

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Planning, organizing, directing and controlling resources
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Only planning
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Only controlling
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Only production
</label>

</div>



<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. The father of scientific management is
</div>

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Henry Fayol
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
F.W. Taylor
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Elton Mayo
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Peter Drucker
</label>

</div>



<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. Planning means
</div>

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Checking performance only
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Controlling employees
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Deciding objectives and actions in advance
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Recruiting employees only
</label>

</div>



<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. Organizing involves
</div>

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Arranging resources and activities
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Ignoring work
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Avoiding decisions
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Stopping communication
</label>

</div>



<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. Leadership is the ability to
</div>

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Avoid people
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Only give orders
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Ignore goals
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Influence and motivate people
</label>

</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. Controlling function of management involves
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Hiring employees
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Monitoring and correcting performance
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Preparing advertisements
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Buying materials
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. Motivation helps employees to
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Improve performance
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Stop working
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Avoid responsibility
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Reduce productivity
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. Human Resource Management deals with
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Machines only
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Finance only
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Managing people in an organization
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Production only
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Decision making means
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Avoiding problems
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Ignoring information
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Delaying work
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Selecting the best alternative
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. Communication is important for
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Creating confusion
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Effective exchange of information
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Stopping teamwork
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Avoiding coordination
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. Organization structure defines
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Authority and responsibility relationships
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Only salary
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Only products
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Only customers
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. Teamwork helps in
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Reducing cooperation
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Increasing conflicts
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Achieving common goals
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Avoiding communication
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. Manager is responsible for
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Ignoring employees
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Achieving organizational objectives
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Stopping work
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Avoiding planning
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. Coordination means
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Integrating activities of different departments
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Stopping teamwork
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Creating conflicts
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Ignoring objectives
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. Management principles were given by
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
F.W. Taylor
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Elton Mayo
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Abraham Maslow
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Henri Fayol
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Staffing involves
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Controlling machines
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Managing money
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Recruiting and selecting employees
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Marketing products
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. A good manager should have
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Leadership and communication skills
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
No decision ability
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Poor planning
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Lack of responsibility
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. Organizational goals are achieved through
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Conflicts
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Effective management
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Poor planning
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Ignoring employees
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. Maslow's theory is related to
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Production
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Finance
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Marketing
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Human needs and motivation
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. Effective management leads to
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Higher productivity and success
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Business failure
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
No growth
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Poor performance
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