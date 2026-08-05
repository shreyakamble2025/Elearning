
<?php
session_start();

$_SESSION['subject'] = "Management";
$_SESSION['semester'] = "Semester 6";

$_SESSION['answers']=array(

1=>'A',
2=>'B',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'D',
9=>'A',
10=>'B',
11=>'C',
12=>'D',
13=>'A',
14=>'B',
15=>'C',
16=>'D',
17=>'A',
18=>'B',
19=>'C',
20=>'D'

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
}

.container{
max-width:900px;
margin:auto;
}

.heading{
text-align:center;
font-size:42px;
color:#38bdf8;
margin-bottom:30px;
}

.card{
background:rgba(255,255,255,0.06);
backdrop-filter:blur(15px);
padding:30px;
border-radius:20px;
}

.question{
background:rgba(255,255,255,0.05);
padding:20px;
margin-bottom:20px;
border-radius:15px;
}

.question h3{
color:#38bdf8;
margin-bottom:15px;
}

label{
display:block;
padding:8px;
}

.submit{
width:100%;
padding:15px;
background:#0d6efd;
color:white;
border:none;
border-radius:30px;
font-size:18px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h1 class="heading">
Semester 6 - Management Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Management is the process of</h3>
<label><input type="radio" name="q1" value="A"> Planning, Organizing, Directing and Controlling</label>
<label><input type="radio" name="q1" value="B"> Sleeping</label>
<label><input type="radio" name="q1" value="C"> Travelling</label>
<label><input type="radio" name="q1" value="D"> Entertainment</label>
</div>

<div class="question">
<h3>2. Planning is</h3>
<label><input type="radio" name="q2" value="A"> Execution</label>
<label><input type="radio" name="q2" value="B"> Deciding Future Course of Action</label>
<label><input type="radio" name="q2" value="C"> Controlling</label>
<label><input type="radio" name="q2" value="D"> Staffing</label>
</div>

<div class="question">
<h3>3. Organizing means</h3>
<label><input type="radio" name="q3" value="A"> Selling</label>
<label><input type="radio" name="q3" value="B"> Purchasing</label>
<label><input type="radio" name="q3" value="C"> Arranging Resources Efficiently</label>
<label><input type="radio" name="q3" value="D"> Advertising</label>
</div>

<div class="question">
<h3>4. Controlling ensures</h3>
<label><input type="radio" name="q4" value="A"> Delay</label>
<label><input type="radio" name="q4" value="B"> Confusion</label>
<label><input type="radio" name="q4" value="C"> Wastage</label>
<label><input type="radio" name="q4" value="D"> Achievement of Goals</label>
</div>

<div class="question">
<h3>5. Leadership is the ability to</h3>
<label><input type="radio" name="q5" value="A"> Influence People</label>
<label><input type="radio" name="q5" value="B"> Avoid Work</label>
<label><input type="radio" name="q5" value="C"> Increase Conflicts</label>
<label><input type="radio" name="q5" value="D"> Waste Resources</label>
</div>

<div class="question">
<h3>6. Staffing refers to</h3>
<label><input type="radio" name="q6" value="A"> Marketing</label>
<label><input type="radio" name="q6" value="B"> Recruitment and Selection</label>
<label><input type="radio" name="q6" value="C"> Sales</label>
<label><input type="radio" name="q6" value="D"> Production</label>
</div>

<div class="question">
<h3>7. Communication is important for</h3>
<label><input type="radio" name="q7" value="A"> Misunderstanding</label>
<label><input type="radio" name="q7" value="B"> Conflict Only</label>
<label><input type="radio" name="q7" value="C"> Effective Coordination</label>
<label><input type="radio" name="q7" value="D"> Delay</label>
</div>

<div class="question">
<h3>8. Decision making is</h3>
<label><input type="radio" name="q8" value="A"> Ignoring Problems</label>
<label><input type="radio" name="q8" value="B"> Avoiding Work</label>
<label><input type="radio" name="q8" value="C"> Delaying Actions</label>
<label><input type="radio" name="q8" value="D"> Choosing the Best Alternative</label>
</div>

<div class="question">
<h3>9. Motivation helps to</h3>
<label><input type="radio" name="q9" value="A"> Improve Employee Performance</label>
<label><input type="radio" name="q9" value="B"> Reduce Productivity</label>
<label><input type="radio" name="q9" value="C"> Increase Absenteeism</label>
<label><input type="radio" name="q9" value="D"> Create Problems</label>
</div>

<div class="question">
<h3>10. Coordination means</h3>
<label><input type="radio" name="q10" value="A"> Conflict</label>
<label><input type="radio" name="q10" value="B"> Harmonizing Activities</label>
<label><input type="radio" name="q10" value="C"> Delay</label>
<label><input type="radio" name="q10" value="D"> Competition</label>
</div>

<div class="question">
<h3>11. Management aims at</h3>
<label><input type="radio" name="q11" value="A"> Losses</label>
<label><input type="radio" name="q11" value="B"> Confusion</label>
<label><input type="radio" name="q11" value="C"> Achieving Organizational Objectives</label>
<label><input type="radio" name="q11" value="D"> Wastage</label>
</div>

<div class="question">
<h3>12. Budget is a</h3>
<label><input type="radio" name="q12" value="A"> Sales Tool</label>
<label><input type="radio" name="q12" value="B"> Communication Tool</label>
<label><input type="radio" name="q12" value="C"> Marketing Tool</label>
<label><input type="radio" name="q12" value="D"> Financial Plan</label>
</div>

<div class="question">
<h3>13. Time management helps in</h3>
<label><input type="radio" name="q13" value="A"> Completing Work Efficiently</label>
<label><input type="radio" name="q13" value="B"> Wasting Time</label>
<label><input type="radio" name="q13" value="C"> Delaying Work</label>
<label><input type="radio" name="q13" value="D"> Increasing Cost</label>
</div>

<div class="question">
<h3>14. Teamwork improves</h3>
<label><input type="radio" name="q14" value="A"> Conflict</label>
<label><input type="radio" name="q14" value="B"> Productivity</label>
<label><input type="radio" name="q14" value="C"> Absenteeism</label>
<label><input type="radio" name="q14" value="D"> Delay</label>
</div>

<div class="question">
<h3>15. Quality management focuses on</h3>
<label><input type="radio" name="q15" value="A"> Defects</label>
<label><input type="radio" name="q15" value="B"> Complaints</label>
<label><input type="radio" name="q15" value="C"> Customer Satisfaction</label>
<label><input type="radio" name="q15" value="D"> Waste</label>
</div>

<div class="question">
<h3>16. Performance appraisal is used for</h3>
<label><input type="radio" name="q16" value="A"> Punishment Only</label>
<label><input type="radio" name="q16" value="B"> Entertainment</label>
<label><input type="radio" name="q16" value="C"> Holidays</label>
<label><input type="radio" name="q16" value="D"> Evaluating Employee Performance</label>
</div>

<div class="question">
<h3>17. A good manager should have</h3>
<label><input type="radio" name="q17" value="A"> Leadership Skills</label>
<label><input type="radio" name="q17" value="B"> Laziness</label>
<label><input type="radio" name="q17" value="C"> Negligence</label>
<label><input type="radio" name="q17" value="D"> Poor Communication</label>
</div>

<div class="question">
<h3>18. Conflict management helps in</h3>
<label><input type="radio" name="q18" value="A"> Increasing Disputes</label>
<label><input type="radio" name="q18" value="B"> Resolving Workplace Issues</label>
<label><input type="radio" name="q18" value="C"> Delaying Work</label>
<label><input type="radio" name="q18" value="D"> Reducing Productivity</label>
</div>

<div class="question">
<h3>19. Organizational structure defines</h3>
<label><input type="radio" name="q19" value="A"> Marketing Plan</label>
<label><input type="radio" name="q19" value="B"> Sales Target</label>
<label><input type="radio" name="q19" value="C"> Roles and Responsibilities</label>
<label><input type="radio" name="q19" value="D"> Budget Only</label>
</div>

<div class="question">
<h3>20. Effective management leads to</h3>
<label><input type="radio" name="q20" value="A"> Failure</label>
<label><input type="radio" name="q20" value="B"> Confusion</label>
<label><input type="radio" name="q20" value="C"> Losses</label>
<label><input type="radio" name="q20" value="D"> Organizational Success</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

