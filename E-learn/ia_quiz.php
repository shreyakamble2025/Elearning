
<?php
session_start();

$_SESSION['subject'] = "Industrial Automation";
$_SESSION['semester'] = "Semester 6";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
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

<title>Industrial Automation Quiz - LearnHub</title>

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
Semester 6 - Industrial Automation Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Industrial automation means</h3>
<label><input type="radio" name="q1" value="A"> Manual operation</label>
<label><input type="radio" name="q1" value="B"> Automatic control of industrial processes</label>
<label><input type="radio" name="q1" value="C"> Office management</label>
<label><input type="radio" name="q1" value="D"> Accounting</label>
</div>

<div class="question">
<h3>2. PLC stands for</h3>
<label><input type="radio" name="q2" value="A"> Programmable Logic Controller</label>
<label><input type="radio" name="q2" value="B"> Power Line Circuit</label>
<label><input type="radio" name="q2" value="C"> Process Logic Control</label>
<label><input type="radio" name="q2" value="D"> Programmable Load Center</label>
</div>

<div class="question">
<h3>3. Sensors are used to</h3>
<label><input type="radio" name="q3" value="A"> Store data</label>
<label><input type="radio" name="q3" value="B"> Generate power</label>
<label><input type="radio" name="q3" value="C"> Detect physical quantities</label>
<label><input type="radio" name="q3" value="D"> Increase voltage</label>
</div>

<div class="question">
<h3>4. SCADA stands for</h3>
<label><input type="radio" name="q4" value="A"> System Control And Data Access</label>
<label><input type="radio" name="q4" value="B"> Smart Control And Device Access</label>
<label><input type="radio" name="q4" value="C"> Supervisory Circuit And Data Analysis</label>
<label><input type="radio" name="q4" value="D"> Supervisory Control And Data Acquisition</label>
</div>

<div class="question">
<h3>5. Automation improves</h3>
<label><input type="radio" name="q5" value="A"> Productivity</label>
<label><input type="radio" name="q5" value="B"> Downtime</label>
<label><input type="radio" name="q5" value="C"> Errors</label>
<label><input type="radio" name="q5" value="D"> Waste</label>
</div>

<div class="question">
<h3>6. Actuators convert</h3>
<label><input type="radio" name="q6" value="A"> Mechanical energy to electrical</label>
<label><input type="radio" name="q6" value="B"> Control signals into physical action</label>
<label><input type="radio" name="q6" value="C"> Heat into sound</label>
<label><input type="radio" name="q6" value="D"> Light into energy</label>
</div>

<div class="question">
<h3>7. HMI stands for</h3>
<label><input type="radio" name="q7" value="A"> Human Machine Input</label>
<label><input type="radio" name="q7" value="B"> High Motor Interface</label>
<label><input type="radio" name="q7" value="C"> Human Machine Interface</label>
<label><input type="radio" name="q7" value="D"> Human Management Indicator</label>
</div>

<div class="question">
<h3>8. Robotics is used for</h3>
<label><input type="radio" name="q8" value="A"> Manual work only</label>
<label><input type="radio" name="q8" value="B"> Accounting</label>
<label><input type="radio" name="q8" value="C"> Office automation</label>
<label><input type="radio" name="q8" value="D"> Automated industrial operations</label>
</div>

<div class="question">
<h3>9. Industrial automation helps in</h3>
<label><input type="radio" name="q9" value="A"> Reducing human error</label>
<label><input type="radio" name="q9" value="B"> Increasing wastage</label>
<label><input type="radio" name="q9" value="C"> Increasing downtime</label>
<label><input type="radio" name="q9" value="D"> Reducing efficiency</label>
</div>

<div class="question">
<h3>10. PLC programming commonly uses</h3>
<label><input type="radio" name="q10" value="A"> C Language Only</label>
<label><input type="radio" name="q10" value="B"> Ladder Logic</label>
<label><input type="radio" name="q10" value="C"> HTML</label>
<label><input type="radio" name="q10" value="D"> SQL</label>
</div>

<div class="question">
<h3>11. Automation systems require</h3>
<label><input type="radio" name="q11" value="A"> Fuel only</label>
<label><input type="radio" name="q11" value="B"> Water only</label>
<label><input type="radio" name="q11" value="C"> Sensors and Controllers</label>
<label><input type="radio" name="q11" value="D"> Paint</label>
</div>

<div class="question">
<h3>12. Industrial networks are used for</h3>
<label><input type="radio" name="q12" value="A"> Entertainment</label>
<label><input type="radio" name="q12" value="B"> Advertising</label>
<label><input type="radio" name="q12" value="C"> Gaming</label>
<label><input type="radio" name="q12" value="D"> Communication between devices</label>
</div>

<div class="question">
<h3>13. Automation increases</h3>
<label><input type="radio" name="q13" value="A"> Efficiency</label>
<label><input type="radio" name="q13" value="B"> Waste</label>
<label><input type="radio" name="q13" value="C"> Breakdowns</label>
<label><input type="radio" name="q13" value="D"> Delays</label>
</div>

<div class="question">
<h3>14. A proximity sensor detects</h3>
<label><input type="radio" name="q14" value="A"> Temperature</label>
<label><input type="radio" name="q14" value="B"> Nearby Objects</label>
<label><input type="radio" name="q14" value="C"> Voltage Only</label>
<label><input type="radio" name="q14" value="D"> Current Only</label>
</div>

<div class="question">
<h3>15. Automation reduces</h3>
<label><input type="radio" name="q15" value="A"> Productivity</label>
<label><input type="radio" name="q15" value="B"> Quality</label>
<label><input type="radio" name="q15" value="C"> Human Intervention</label>
<label><input type="radio" name="q15" value="D"> Accuracy</label>
</div>

<div class="question">
<h3>16. SCADA systems provide</h3>
<label><input type="radio" name="q16" value="A"> Manual reports only</label>
<label><input type="radio" name="q16" value="B"> Accounting functions</label>
<label><input type="radio" name="q16" value="C"> Marketing tools</label>
<label><input type="radio" name="q16" value="D"> Monitoring and Control</label>
</div>

<div class="question">
<h3>17. Robotics is an example of</h3>
<label><input type="radio" name="q17" value="A"> Industrial Automation</label>
<label><input type="radio" name="q17" value="B"> Manual Control</label>
<label><input type="radio" name="q17" value="C"> Accounting System</label>
<label><input type="radio" name="q17" value="D"> Inventory System</label>
</div>

<div class="question">
<h3>18. Automation improves product</h3>
<label><input type="radio" name="q18" value="A"> Cost Only</label>
<label><input type="radio" name="q18" value="B"> Quality</label>
<label><input type="radio" name="q18" value="C"> Waste</label>
<label><input type="radio" name="q18" value="D"> Defects</label>
</div>

<div class="question">
<h3>19. Industry 4.0 includes</h3>
<label><input type="radio" name="q19" value="A"> Manual Systems</label>
<label><input type="radio" name="q19" value="B"> Paper Records Only</label>
<label><input type="radio" name="q19" value="C"> Smart Manufacturing Technologies</label>
<label><input type="radio" name="q19" value="D"> Mechanical Accounting</label>
</div>

<div class="question">
<h3>20. Main goal of industrial automation is</h3>
<label><input type="radio" name="q20" value="A"> Increase Errors</label>
<label><input type="radio" name="q20" value="B"> Increase Downtime</label>
<label><input type="radio" name="q20" value="C"> Increase Waste</label>
<label><input type="radio" name="q20" value="D"> Improve Productivity and Efficiency</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

