<?php
session_start();

$_SESSION['subject'] = "Seminar And Project Initiation Course";
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

<title>Seminar And Project Initiation Course Quiz - LearnHub</title>

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
Seminar And Project Initiation Course Quiz
</h1>

<p class="subheading">
Test your knowledge about Seminar and Project Development
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. A project is defined as
</div>

<label class="option-label">
<input type="radio" name="q1" value="A" required>
A temporary effort to create a unique product or service
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
A daily routine activity
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
A permanent operation
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
A financial transaction
</label>

</div>



<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. The first step in project planning is
</div>

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Coding
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Project identification
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Testing
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Deployment
</label>

</div>



<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. A seminar is mainly conducted to
</div>

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Sell products
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Entertain people
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Present knowledge and research
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Avoid communication
</label>

</div>



<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. Project documentation includes
</div>

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Project report
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Only source code
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Only images
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Only presentation
</label>

</div>



<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. The main objective of project initiation is
</div>

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Delete project
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Stop planning
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Avoid research
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Define project goals and scope
</label>

</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. A project proposal contains
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Only project title
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Objectives, scope and methodology
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Only budget details
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Only diagrams
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. Literature survey is used to
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Study existing research work
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Write program directly
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Purchase hardware
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Prepare only presentation
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. Project feasibility study determines
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Colour of project
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Team members only
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Project possibility and viability
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Project advertisement
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Gantt chart is used for
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Database design
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Programming
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Testing
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Project scheduling
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. A project team consists of
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Only manager
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
People working together to achieve goals
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Only customers
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Only investors
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. Research methodology defines
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Methods used for research
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Project cost only
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Project colour
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Hardware price
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. Presentation skills help in
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Ignoring audience
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Reducing knowledge
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Effective communication
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Stopping discussion
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. The final stage of project is
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Planning
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Project completion and presentation
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Requirement analysis
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Problem selection
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. Project report should contain
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Introduction, methodology and results
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Only title page
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Only diagrams
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Only references
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. Abstract of project gives
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Complete source code
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Only images
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Only budget
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Brief summary of project
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Innovation in project means
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Copying old work
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Avoiding research
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Introducing new ideas or solutions
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Removing objectives
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. Project objectives should be
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Clear and achievable
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Unclear
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Impossible
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Unrelated
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. References are included in report to
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Increase report size
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Give source information
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Remove content
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Avoid research
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. Risk analysis helps to
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Increase problems
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Stop project
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Ignore difficulties
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Identify and manage risks
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. Successful project requires
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Proper planning and execution
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
No planning
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Only money
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Only presentation
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