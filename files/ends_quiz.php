<?php
session_start();

$_SESSION['subject'] = "Entrepreneurship Development And Startups";
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

<title>Entrepreneurship Development And Startups Quiz - LearnHub</title>

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
Entrepreneurship Development And Startups Quiz
</h1>

<p class="subheading">
Test your knowledge about Entrepreneurship and Startup Concepts
</p>


<div class="card">


<form action="check_quiz.php" method="post">



<!-- Q1 -->

<div class="question-card">

<div class="question-title">
1. Entrepreneurship means
</div>

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Starting and managing a new business
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Only doing a job
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Buying products only
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Saving money only
</label>

</div>




<!-- Q2 -->

<div class="question-card">

<div class="question-title">
2. An entrepreneur is a person who
</div>

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Works under others
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Creates and manages a business
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Only invests money
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Does nothing
</label>

</div>




<!-- Q3 -->

<div class="question-card">

<div class="question-title">
3. Startup is a company that focuses on
</div>

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Traditional methods only
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Government work
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Innovation and growth
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Personal activities
</label>

</div>




<!-- Q4 -->

<div class="question-card">

<div class="question-title">
4. The main objective of entrepreneurship is
</div>

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Creating value through business
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Avoiding work
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Copying others
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Stopping innovation
</label>

</div>




<!-- Q5 -->

<div class="question-card">

<div class="question-title">
5. Business plan includes
</div>

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Only company name
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Only advertisement
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Only investment
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Goals, strategies and financial details
</label>

</div>

<!-- Q6 -->

<div class="question-card">

<div class="question-title">
6. Innovation means
</div>

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Copying existing ideas
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Introducing new ideas or methods
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Stopping development
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Reducing quality
</label>

</div>



<!-- Q7 -->

<div class="question-card">

<div class="question-title">
7. A startup requires
</div>

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Innovative idea and planning
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
No strategy
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Only advertisement
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Only employees
</label>

</div>



<!-- Q8 -->

<div class="question-card">

<div class="question-title">
8. SWOT analysis includes
</div>

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Sales and profit only
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Marketing only
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Strengths, Weaknesses, Opportunities and Threats
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Production only
</label>

</div>



<!-- Q9 -->

<div class="question-card">

<div class="question-title">
9. Entrepreneurship helps in
</div>

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Increasing unemployment
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Stopping innovation
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Reducing business activities
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Creating employment opportunities
</label>

</div>



<!-- Q10 -->

<div class="question-card">

<div class="question-title">
10. Funding for startups can be obtained from
</div>

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Only friends
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Investors and financial institutions
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Only customers
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
No source
</label>

</div>



<!-- Q11 -->

<div class="question-card">

<div class="question-title">
11. Entrepreneurial skills include
</div>

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Leadership and decision making
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Avoiding responsibility
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Ignoring customers
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
No planning
</label>

</div>



<!-- Q12 -->

<div class="question-card">

<div class="question-title">
12. Market research helps to
</div>

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Increase confusion
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Avoid customers
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Understand customer needs
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Stop business
</label>

</div>



<!-- Q13 -->

<div class="question-card">

<div class="question-title">
13. A business model describes
</div>

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Company colour
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
How a business creates and earns value
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Only employee details
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Only location
</label>

</div>



<!-- Q14 -->

<div class="question-card">

<div class="question-title">
14. Incubators provide support to
</div>

<label class="option-label">
<input type="radio" name="q14" value="A" required>
New startups
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Old products only
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Customers only
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Government offices
</label>

</div>

<!-- Q15 -->

<div class="question-card">

<div class="question-title">
15. Angel investors provide
</div>

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Training only
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Office space only
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Marketing only
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Financial support to startups
</label>

</div>



<!-- Q16 -->

<div class="question-card">

<div class="question-title">
16. Entrepreneurship development focuses on
</div>

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Reducing business activities
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Avoiding risks
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Developing entrepreneurial abilities
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Stopping innovation
</label>

</div>



<!-- Q17 -->

<div class="question-card">

<div class="question-title">
17. Digital entrepreneurship uses
</div>

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Digital technologies for business
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Only manual work
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
No technology
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Traditional methods only
</label>

</div>



<!-- Q18 -->

<div class="question-card">

<div class="question-title">
18. Business risk means
</div>

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Guaranteed success
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Possibility of loss or failure
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
No uncertainty
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Fixed profit
</label>

</div>



<!-- Q19 -->

<div class="question-card">

<div class="question-title">
19. Startup ecosystem includes
</div>

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Only entrepreneurs
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Only customers
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Only investors
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Entrepreneurs, investors and support organizations
</label>

</div>



<!-- Q20 -->

<div class="question-card">

<div class="question-title">
20. A successful entrepreneur should have
</div>

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Creativity and leadership skills
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
No planning
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Fear of change
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Avoiding decisions
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