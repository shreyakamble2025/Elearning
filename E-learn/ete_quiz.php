
<?php
session_start();

$_SESSION['subject'] = "Emerging Trends in Electrical Engineering";
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

<title>Emerging Trends in Electrical Engineering Quiz - LearnHub</title>

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
Semester 6 - Emerging Trends in Electrical Engineering Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Smart Grid is an example of</h3>
<label><input type="radio" name="q1" value="A"> Modern Power System</label>
<label><input type="radio" name="q1" value="B"> Mechanical System</label>
<label><input type="radio" name="q1" value="C"> Hydraulic System</label>
<label><input type="radio" name="q1" value="D"> Pneumatic System</label>
</div>

<div class="question">
<h3>2. Solar energy is a</h3>
<label><input type="radio" name="q2" value="A"> Non-renewable Source</label>
<label><input type="radio" name="q2" value="B"> Renewable Source</label>
<label><input type="radio" name="q2" value="C"> Fossil Fuel</label>
<label><input type="radio" name="q2" value="D"> Nuclear Fuel</label>
</div>

<div class="question">
<h3>3. Electric vehicles help in</h3>
<label><input type="radio" name="q3" value="A"> Increasing Pollution</label>
<label><input type="radio" name="q3" value="B"> Fuel Wastage</label>
<label><input type="radio" name="q3" value="C"> Reducing Carbon Emissions</label>
<label><input type="radio" name="q3" value="D"> Noise Production</label>
</div>

<div class="question">
<h3>4. IoT stands for</h3>
<label><input type="radio" name="q4" value="A"> Internet of Technology</label>
<label><input type="radio" name="q4" value="B"> Internal Online Technology</label>
<label><input type="radio" name="q4" value="C"> Integrated Operating Tool</label>
<label><input type="radio" name="q4" value="D"> Internet of Things</label>
</div>

<div class="question">
<h3>5. Wind energy is generated using</h3>
<label><input type="radio" name="q5" value="A"> Wind Turbines</label>
<label><input type="radio" name="q5" value="B"> Boilers</label>
<label><input type="radio" name="q5" value="C"> Transformers</label>
<label><input type="radio" name="q5" value="D"> Batteries</label>
</div>

<div class="question">
<h3>6. Energy storage systems commonly use</h3>
<label><input type="radio" name="q6" value="A"> Motors</label>
<label><input type="radio" name="q6" value="B"> Batteries</label>
<label><input type="radio" name="q6" value="C"> Generators</label>
<label><input type="radio" name="q6" value="D"> Relays</label>
</div>

<div class="question">
<h3>7. Artificial Intelligence is used for</h3>
<label><input type="radio" name="q7" value="A"> Manual Operations</label>
<label><input type="radio" name="q7" value="B"> Wiring Only</label>
<label><input type="radio" name="q7" value="C"> Smart Decision Making</label>
<label><input type="radio" name="q7" value="D"> Lighting</label>
</div>

<div class="question">
<h3>8. Smart meters are used for</h3>
<label><input type="radio" name="q8" value="A"> Decoration</label>
<label><input type="radio" name="q8" value="B"> Heating</label>
<label><input type="radio" name="q8" value="C"> Cooling</label>
<label><input type="radio" name="q8" value="D"> Energy Monitoring</label>
</div>

<div class="question">
<h3>9. Renewable energy sources are</h3>
<label><input type="radio" name="q9" value="A"> Environment Friendly</label>
<label><input type="radio" name="q9" value="B"> Highly Polluting</label>
<label><input type="radio" name="q9" value="C"> Exhaustible</label>
<label><input type="radio" name="q9" value="D"> Costly Fuels</label>
</div>

<div class="question">
<h3>10. Automation improves</h3>
<label><input type="radio" name="q10" value="A"> Errors</label>
<label><input type="radio" name="q10" value="B"> Efficiency and Productivity</label>
<label><input type="radio" name="q10" value="C"> Downtime</label>
<label><input type="radio" name="q10" value="D"> Wastage</label>
</div>

<div class="question">
<h3>11. Electric vehicles mainly use</h3>
<label><input type="radio" name="q11" value="A"> Petrol Engine</label>
<label><input type="radio" name="q11" value="B"> Diesel Engine</label>
<label><input type="radio" name="q11" value="C"> Electric Motor</label>
<label><input type="radio" name="q11" value="D"> Steam Engine</label>
</div>

<div class="question">
<h3>12. Industry 4.0 focuses on</h3>
<label><input type="radio" name="q12" value="A"> Manual Production</label>
<label><input type="radio" name="q12" value="B"> Traditional Methods</label>
<label><input type="radio" name="q12" value="C"> Mechanical Systems Only</label>
<label><input type="radio" name="q12" value="D"> Smart Manufacturing</label>
</div>

<div class="question">
<h3>13. Robotics is widely used in</h3>
<label><input type="radio" name="q13" value="A"> Industrial Automation</label>
<label><input type="radio" name="q13" value="B"> Cooking Only</label>
<label><input type="radio" name="q13" value="C"> Farming Only</label>
<label><input type="radio" name="q13" value="D"> Banking Only</label>
</div>

<div class="question">
<h3>14. Electric energy can be stored using</h3>
<label><input type="radio" name="q14" value="A"> Transformer</label>
<label><input type="radio" name="q14" value="B"> Battery System</label>
<label><input type="radio" name="q14" value="C"> Fuse</label>
<label><input type="radio" name="q14" value="D"> Relay</label>
</div>

<div class="question">
<h3>15. Solar PV system converts</h3>
<label><input type="radio" name="q15" value="A"> Heat into Sound</label>
<label><input type="radio" name="q15" value="B"> Sound into Light</label>
<label><input type="radio" name="q15" value="C"> Sunlight into Electricity</label>
<label><input type="radio" name="q15" value="D"> Electricity into Heat</label>
</div>

<div class="question">
<h3>16. Green energy helps to</h3>
<label><input type="radio" name="q16" value="A"> Increase Pollution</label>
<label><input type="radio" name="q16" value="B"> Increase Carbon Emission</label>
<label><input type="radio" name="q16" value="C"> Increase Fuel Usage</label>
<label><input type="radio" name="q16" value="D"> Protect Environment</label>
</div>

<div class="question">
<h3>17. Cyber security in smart grids is important for</h3>
<label><input type="radio" name="q17" value="A"> System Protection</label>
<label><input type="radio" name="q17" value="B"> Decoration</label>
<label><input type="radio" name="q17" value="C"> Painting</label>
<label><input type="radio" name="q17" value="D"> Advertising</label>
</div>

<div class="question">
<h3>18. Smart homes use</h3>
<label><input type="radio" name="q18" value="A"> Manual Systems Only</label>
<label><input type="radio" name="q18" value="B"> IoT Based Automation</label>
<label><input type="radio" name="q18" value="C"> Mechanical Switches Only</label>
<label><input type="radio" name="q18" value="D"> Hydraulic Systems</label>
</div>

<div class="question">
<h3>19. Emerging technologies help in</h3>
<label><input type="radio" name="q19" value="A"> Reducing Efficiency</label>
<label><input type="radio" name="q19" value="B"> Increasing Downtime</label>
<label><input type="radio" name="q19" value="C"> Improving System Performance</label>
<label><input type="radio" name="q19" value="D"> Increasing Waste</label>
</div>

<div class="question">
<h3>20. Future electrical engineering focuses on</h3>
<label><input type="radio" name="q20" value="A"> Sustainable and Smart Technologies</label>
<label><input type="radio" name="q20" value="B"> Obsolete Systems</label>
<label><input type="radio" name="q20" value="C"> Manual Control Only</label>
<label><input type="radio" name="q20" value="D"> Conventional Methods Only</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

