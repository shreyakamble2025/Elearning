
<?php
session_start();

$_SESSION['subject'] = "Seminar And Project Initiation Course";
$_SESSION['semester'] = "Semester 5";

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
Semester 5 - Seminar And Project Initiation Course Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. A seminar is conducted to</h3>
<label><input type="radio" name="q1" value="A"> Present and Share Knowledge</label>
<label><input type="radio" name="q1" value="B"> Play Games</label>
<label><input type="radio" name="q1" value="C"> Travel</label>
<label><input type="radio" name="q1" value="D"> Shopping</label>
</div>

<div class="question">
<h3>2. The first step in a project is</h3>
<label><input type="radio" name="q2" value="A"> Testing</label>
<label><input type="radio" name="q2" value="B"> Problem Identification</label>
<label><input type="radio" name="q2" value="C"> Marketing</label>
<label><input type="radio" name="q2" value="D"> Maintenance</label>
</div>

<div class="question">
<h3>3. Project objectives should be</h3>
<label><input type="radio" name="q3" value="A"> Unclear</label>
<label><input type="radio" name="q3" value="B"> Complex</label>
<label><input type="radio" name="q3" value="C"> Specific and Clear</label>
<label><input type="radio" name="q3" value="D"> Random</label>
</div>

<div class="question">
<h3>4. A project report should contain</h3>
<label><input type="radio" name="q4" value="A"> Only Pictures</label>
<label><input type="radio" name="q4" value="B"> Only Tables</label>
<label><input type="radio" name="q4" value="C"> Only References</label>
<label><input type="radio" name="q4" value="D"> Complete Project Details</label>
</div>

<div class="question">
<h3>5. Literature survey helps in</h3>
<label><input type="radio" name="q5" value="A"> Understanding Existing Work</label>
<label><input type="radio" name="q5" value="B"> Decoration</label>
<label><input type="radio" name="q5" value="C"> Entertainment</label>
<label><input type="radio" name="q5" value="D"> Advertising</label>
</div>

<div class="question">
<h3>6. Project planning includes</h3>
<label><input type="radio" name="q6" value="A"> Cooking</label>
<label><input type="radio" name="q6" value="B"> Scheduling Activities</label>
<label><input type="radio" name="q6" value="C"> Painting</label>
<label><input type="radio" name="q6" value="D"> Travelling</label>
</div>

<div class="question">
<h3>7. Presentation skills are important for</h3>
<label><input type="radio" name="q7" value="A"> Sleeping</label>
<label><input type="radio" name="q7" value="B"> Sports</label>
<label><input type="radio" name="q7" value="C"> Effective Communication</label>
<label><input type="radio" name="q7" value="D"> Driving</label>
</div>

<div class="question">
<h3>8. Project guide provides</h3>
<label><input type="radio" name="q8" value="A"> Money</label>
<label><input type="radio" name="q8" value="B"> Equipment Only</label>
<label><input type="radio" name="q8" value="C"> Attendance</label>
<label><input type="radio" name="q8" value="D"> Guidance and Support</label>
</div>

<div class="question">
<h3>9. Teamwork is important because</h3>
<label><input type="radio" name="q9" value="A"> It Improves Project Success</label>
<label><input type="radio" name="q9" value="B"> It Delays Work</label>
<label><input type="radio" name="q9" value="C"> It Increases Cost</label>
<label><input type="radio" name="q9" value="D"> It Stops Communication</label>
</div>

<div class="question">
<h3>10. Project scope defines</h3>
<label><input type="radio" name="q10" value="A"> Budget Only</label>
<label><input type="radio" name="q10" value="B"> Boundaries and Deliverables</label>
<label><input type="radio" name="q10" value="C"> Attendance</label>
<label><input type="radio" name="q10" value="D"> Holidays</label>
</div>

<div class="question">
<h3>11. References in a report are used for</h3>
<label><input type="radio" name="q11" value="A"> Decoration</label>
<label><input type="radio" name="q11" value="B"> Entertainment</label>
<label><input type="radio" name="q11" value="C"> Citing Information Sources</label>
<label><input type="radio" name="q11" value="D"> Advertisement</label>
</div>

<div class="question">
<h3>12. A good presentation should be</h3>
<label><input type="radio" name="q12" value="A"> Confusing</label>
<label><input type="radio" name="q12" value="B"> Long and Unclear</label>
<label><input type="radio" name="q12" value="C"> Colourful Only</label>
<label><input type="radio" name="q12" value="D"> Clear and Well Organized</label>
</div>

<div class="question">
<h3>13. Project execution means</h3>
<label><input type="radio" name="q13" value="A"> Implementing the Plan</label>
<label><input type="radio" name="q13" value="B"> Ignoring the Plan</label>
<label><input type="radio" name="q13" value="C"> Deleting the Project</label>
<label><input type="radio" name="q13" value="D"> Closing the Project</label>
</div>

<div class="question">
<h3>14. Time management helps to</h3>
<label><input type="radio" name="q14" value="A"> Waste Time</label>
<label><input type="radio" name="q14" value="B"> Complete Work Efficiently</label>
<label><input type="radio" name="q14" value="C"> Delay Projects</label>
<label><input type="radio" name="q14" value="D"> Increase Errors</label>
</div>

<div class="question">
<h3>15. Innovation in a project means</h3>
<label><input type="radio" name="q15" value="A"> Copying Existing Work</label>
<label><input type="radio" name="q15" value="B"> Repeating Old Ideas</label>
<label><input type="radio" name="q15" value="C"> New and Creative Ideas</label>
<label><input type="radio" name="q15" value="D"> Avoiding Research</label>
</div>

<div class="question">
<h3>16. Project documentation is important for</h3>
<label><input type="radio" name="q16" value="A"> Decoration</label>
<label><input type="radio" name="q16" value="B"> Entertainment</label>
<label><input type="radio" name="q16" value="C"> Attendance</label>
<label><input type="radio" name="q16" value="D"> Future Reference and Evaluation</label>
</div>

<div class="question">
<h3>17. Seminar presentation improves</h3>
<label><input type="radio" name="q17" value="A"> Confidence and Communication Skills</label>
<label><input type="radio" name="q17" value="B"> Sleep</label>
<label><input type="radio" name="q17" value="C"> Laziness</label>
<label><input type="radio" name="q17" value="D"> Absenteeism</label>
</div>

<div class="question">
<h3>18. Project cost estimation is done to</h3>
<label><input type="radio" name="q18" value="A"> Increase Cost</label>
<label><input type="radio" name="q18" value="B"> Plan Resources and Budget</label>
<label><input type="radio" name="q18" value="C"> Delay Work</label>
<label><input type="radio" name="q18" value="D"> Avoid Planning</label>
</div>

<div class="question">
<h3>19. Risk analysis helps to</h3>
<label><input type="radio" name="q19" value="A"> Create Problems</label>
<label><input type="radio" name="q19" value="B"> Ignore Issues</label>
<label><input type="radio" name="q19" value="C"> Identify Potential Problems</label>
<label><input type="radio" name="q19" value="D"> Increase Cost</label>
</div>

<div class="question">
<h3>20. Successful project completion requires</h3>
<label><input type="radio" name="q20" value="A"> No Planning</label>
<label><input type="radio" name="q20" value="B"> No Teamwork</label>
<label><input type="radio" name="q20" value="C"> No Documentation</label>
<label><input type="radio" name="q20" value="D"> Planning, Teamwork and Execution</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

