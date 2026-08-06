
<?php
session_start();

$_SESSION['subject'] = "Energy Conservation And Audit";
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

<title>Energy Conservation And Audit Quiz - LearnHub</title>

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
Semester 6 - Energy Conservation And Audit Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Energy conservation means</h3>
<label><input type="radio" name="q1" value="A"> Reducing Energy Wastage</label>
<label><input type="radio" name="q1" value="B"> Increasing Consumption</label>
<label><input type="radio" name="q1" value="C"> Energy Production Only</label>
<label><input type="radio" name="q1" value="D"> None of These</label>
</div>

<div class="question">
<h3>2. Energy audit is carried out to</h3>
<label><input type="radio" name="q2" value="A"> Increase Losses</label>
<label><input type="radio" name="q2" value="B"> Improve Energy Efficiency</label>
<label><input type="radio" name="q2" value="C"> Stop Production</label>
<label><input type="radio" name="q2" value="D"> Increase Waste</label>
</div>

<div class="question">
<h3>3. LED lamps are preferred because</h3>
<label><input type="radio" name="q3" value="A"> They Consume More Power</label>
<label><input type="radio" name="q3" value="B"> They Produce More Heat</label>
<label><input type="radio" name="q3" value="C"> They Save Energy</label>
<label><input type="radio" name="q3" value="D"> They Increase Cost</label>
</div>

<div class="question">
<h3>4. Energy audit report helps in</h3>
<label><input type="radio" name="q4" value="A"> Wasting Energy</label>
<label><input type="radio" name="q4" value="B"> Delaying Work</label>
<label><input type="radio" name="q4" value="C"> Increasing Bills</label>
<label><input type="radio" name="q4" value="D"> Identifying Energy Saving Opportunities</label>
</div>

<div class="question">
<h3>5. Star rating is related to</h3>
<label><input type="radio" name="q5" value="A"> Energy Efficient Appliances</label>
<label><input type="radio" name="q5" value="B"> Vehicle Speed</label>
<label><input type="radio" name="q5" value="C"> Road Quality</label>
<label><input type="radio" name="q5" value="D"> Building Height</label>
</div>

<div class="question">
<h3>6. BEE stands for</h3>
<label><input type="radio" name="q6" value="A"> Board of Electrical Equipment</label>
<label><input type="radio" name="q6" value="B"> Bureau of Energy Efficiency</label>
<label><input type="radio" name="q6" value="C"> Building Energy Evaluation</label>
<label><input type="radio" name="q6" value="D"> Basic Energy Examination</label>
</div>

<div class="question">
<h3>7. Energy conservation reduces</h3>
<label><input type="radio" name="q7" value="A"> Efficiency</label>
<label><input type="radio" name="q7" value="B"> Productivity</label>
<label><input type="radio" name="q7" value="C"> Electricity Bills</label>
<label><input type="radio" name="q7" value="D"> Performance</label>
</div>

<div class="question">
<h3>8. An energy auditor examines</h3>
<label><input type="radio" name="q8" value="A"> Sports Activities</label>
<label><input type="radio" name="q8" value="B"> Office Furniture</label>
<label><input type="radio" name="q8" value="C"> Employee Attendance</label>
<label><input type="radio" name="q8" value="D"> Energy Consumption Pattern</label>
</div>

<div class="question">
<h3>9. Renewable energy source is</h3>
<label><input type="radio" name="q9" value="A"> Solar Energy</label>
<label><input type="radio" name="q9" value="B"> Diesel</label>
<label><input type="radio" name="q9" value="C"> Coal</label>
<label><input type="radio" name="q9" value="D"> Petrol</label>
</div>

<div class="question">
<h3>10. Power factor improvement helps in</h3>
<label><input type="radio" name="q10" value="A"> Increasing Losses</label>
<label><input type="radio" name="q10" value="B"> Saving Energy</label>
<label><input type="radio" name="q10" value="C"> Increasing Bills</label>
<label><input type="radio" name="q10" value="D"> Reducing Efficiency</label>
</div>

<div class="question">
<h3>11. Energy efficient motors consume</h3>
<label><input type="radio" name="q11" value="A"> More Power</label>
<label><input type="radio" name="q11" value="B"> More Fuel</label>
<label><input type="radio" name="q11" value="C"> Less Energy</label>
<label><input type="radio" name="q11" value="D"> More Heat</label>
</div>

<div class="question">
<h3>12. Walk-through audit is</h3>
<label><input type="radio" name="q12" value="A"> Detailed Audit</label>
<label><input type="radio" name="q12" value="B"> Investment Audit</label>
<label><input type="radio" name="q12" value="C"> Financial Audit</label>
<label><input type="radio" name="q12" value="D"> Preliminary Energy Audit</label>
</div>

<div class="question">
<h3>13. Energy management aims at</h3>
<label><input type="radio" name="q13" value="A"> Optimum Use of Energy</label>
<label><input type="radio" name="q13" value="B"> Energy Waste</label>
<label><input type="radio" name="q13" value="C"> High Consumption</label>
<label><input type="radio" name="q13" value="D"> Equipment Failure</label>
</div>

<div class="question">
<h3>14. Energy saving can be achieved by</h3>
<label><input type="radio" name="q14" value="A"> Leaving Lights ON</label>
<label><input type="radio" name="q14" value="B"> Using Efficient Equipment</label>
<label><input type="radio" name="q14" value="C"> Overloading Machines</label>
<label><input type="radio" name="q14" value="D"> Ignoring Maintenance</label>
</div>

<div class="question">
<h3>15. Demand side management focuses on</h3>
<label><input type="radio" name="q15" value="A"> Power Generation Only</label>
<label><input type="radio" name="q15" value="B"> Fuel Extraction</label>
<label><input type="radio" name="q15" value="C"> Efficient Energy Usage</label>
<label><input type="radio" name="q15" value="D"> Mining</label>
</div>

<div class="question">
<h3>16. Energy audit helps industries to</h3>
<label><input type="radio" name="q16" value="A"> Increase Waste</label>
<label><input type="radio" name="q16" value="B"> Increase Downtime</label>
<label><input type="radio" name="q16" value="C"> Increase Cost</label>
<label><input type="radio" name="q16" value="D"> Improve Efficiency</label>
</div>

<div class="question">
<h3>17. CFL stands for</h3>
<label><input type="radio" name="q17" value="A"> Compact Fluorescent Lamp</label>
<label><input type="radio" name="q17" value="B"> Current Flow Lamp</label>
<label><input type="radio" name="q17" value="C"> Central Fluorescent Light</label>
<label><input type="radio" name="q17" value="D"> Compact Flow Light</label>
</div>

<div class="question">
<h3>18. Energy conservation benefits</h3>
<label><input type="radio" name="q18" value="A"> Pollution</label>
<label><input type="radio" name="q18" value="B"> Environment and Economy</label>
<label><input type="radio" name="q18" value="C"> Wastage</label>
<label><input type="radio" name="q18" value="D"> Losses</label>
</div>

<div class="question">
<h3>19. Load management helps in</h3>
<label><input type="radio" name="q19" value="A"> Increasing Peak Demand</label>
<label><input type="radio" name="q19" value="B"> Equipment Damage</label>
<label><input type="radio" name="q19" value="C"> Reducing Energy Cost</label>
<label><input type="radio" name="q19" value="D"> Increasing Consumption</label>
</div>

<div class="question">
<h3>20. Main objective of energy audit is</h3>
<label><input type="radio" name="q20" value="A"> Increase Energy Use</label>
<label><input type="radio" name="q20" value="B"> Increase Expenses</label>
<label><input type="radio" name="q20" value="C"> Reduce Efficiency</label>
<label><input type="radio" name="q20" value="D"> Energy Conservation and Cost Saving</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

