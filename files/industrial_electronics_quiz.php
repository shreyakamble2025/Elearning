<?php
session_start();

$_SESSION['subject'] = "Industrial Electronics";
$_SESSION['semester'] = "Semester 5";

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

<title>Industrial Electronics Quiz - LearnHub</title>

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
Semester 5 - Industrial Electronics Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Industrial electronics deals with</h3>
<label><input type="radio" name="q1" value="A"> Agriculture</label>
<label><input type="radio" name="q1" value="B"> Electronic control in industries</label>
<label><input type="radio" name="q1" value="C"> Medical science</label>
<label><input type="radio" name="q1" value="D"> Civil engineering</label>
</div>

<div class="question">
<h3>2. SCR stands for</h3>
<label><input type="radio" name="q2" value="A"> Silicon Controlled Rectifier</label>
<label><input type="radio" name="q2" value="B"> Static Current Regulator</label>
<label><input type="radio" name="q2" value="C"> Signal Control Relay</label>
<label><input type="radio" name="q2" value="D"> Silicon Current Relay</label>
</div>

<div class="question">
<h3>3. TRIAC is used for</h3>
<label><input type="radio" name="q3" value="A"> DC control only</label>
<label><input type="radio" name="q3" value="B"> Amplification</label>
<label><input type="radio" name="q3" value="C"> AC power control</label>
<label><input type="radio" name="q3" value="D"> Data storage</label>
</div>

<div class="question">
<h3>4. DIAC is mainly used with</h3>
<label><input type="radio" name="q4" value="A"> BJT</label>
<label><input type="radio" name="q4" value="B"> FET</label>
<label><input type="radio" name="q4" value="C"> SCR</label>
<label><input type="radio" name="q4" value="D"> TRIAC</label>
</div>

<div class="question">
<h3>5. Thyristor is used as</h3>
<label><input type="radio" name="q5" value="A"> Switch</label>
<label><input type="radio" name="q5" value="B"> Capacitor</label>
<label><input type="radio" name="q5" value="C"> Resistor</label>
<label><input type="radio" name="q5" value="D"> Transformer</label>
</div>

<div class="question">
<h3>6. Industrial electronics improves</h3>
<label><input type="radio" name="q6" value="A"> Errors</label>
<label><input type="radio" name="q6" value="B"> Efficiency</label>
<label><input type="radio" name="q6" value="C"> Waste</label>
<label><input type="radio" name="q6" value="D"> Downtime</label>
</div>

<div class="question">
<h3>7. SMPS stands for</h3>
<label><input type="radio" name="q7" value="A"> Static Mode Power Supply</label>
<label><input type="radio" name="q7" value="B"> Signal Mode Power Source</label>
<label><input type="radio" name="q7" value="C"> Switched Mode Power Supply</label>
<label><input type="radio" name="q7" value="D"> System Main Power Supply</label>
</div>

<div class="question">
<h3>8. UPS provides</h3>
<label><input type="radio" name="q8" value="A"> Cooling</label>
<label><input type="radio" name="q8" value="B"> Lighting</label>
<label><input type="radio" name="q8" value="C"> Data Storage</label>
<label><input type="radio" name="q8" value="D"> Backup Power</label>
</div>

<div class="question">
<h3>9. Inverter converts</h3>
<label><input type="radio" name="q9" value="A"> DC to AC</label>
<label><input type="radio" name="q9" value="B"> AC to DC</label>
<label><input type="radio" name="q9" value="C"> AC to AC</label>
<label><input type="radio" name="q9" value="D"> DC to DC</label>
</div>

<div class="question">
<h3>10. Rectifier converts</h3>
<label><input type="radio" name="q10" value="A"> DC to AC</label>
<label><input type="radio" name="q10" value="B"> AC to DC</label>
<label><input type="radio" name="q10" value="C"> AC to AC</label>
<label><input type="radio" name="q10" value="D"> DC to DC</label>
</div>

<div class="question">
<h3>11. Power electronics devices operate as</h3>
<label><input type="radio" name="q11" value="A"> Sensors</label>
<label><input type="radio" name="q11" value="B"> Indicators</label>
<label><input type="radio" name="q11" value="C"> Switches</label>
<label><input type="radio" name="q11" value="D"> Batteries</label>
</div>

<div class="question">
<h3>12. Chopper converts</h3>
<label><input type="radio" name="q12" value="A"> AC to AC</label>
<label><input type="radio" name="q12" value="B"> AC to DC</label>
<label><input type="radio" name="q12" value="C"> DC to AC</label>
<label><input type="radio" name="q12" value="D"> Fixed DC to Variable DC</label>
</div>

<div class="question">
<h3>13. Servo motor is used for</h3>
<label><input type="radio" name="q13" value="A"> Precise Control</label>
<label><input type="radio" name="q13" value="B"> Heating</label>
<label><input type="radio" name="q13" value="C"> Lighting</label>
<label><input type="radio" name="q13" value="D"> Cooling</label>
</div>

<div class="question">
<h3>14. PLC is used in</h3>
<label><input type="radio" name="q14" value="A"> Industrial Automation</label>
<label><input type="radio" name="q14" value="B"> Farming</label>
<label><input type="radio" name="q14" value="C"> Cooking</label>
<label><input type="radio" name="q14" value="D"> Banking</label>
</div>

<div class="question">
<h3>15. Industrial drives control</h3>
<label><input type="radio" name="q15" value="A"> Motors</label>
<label><input type="radio" name="q15" value="B"> Lamps</label>
<label><input type="radio" name="q15" value="C"> Fans Only</label>
<label><input type="radio" name="q15" value="D"> Sensors</label>
</div>

<div class="question">
<h3>16. VFD stands for</h3>
<label><input type="radio" name="q16" value="A"> Voltage Frequency Device</label>
<label><input type="radio" name="q16" value="B"> Variable Frequency Drive</label>
<label><input type="radio" name="q16" value="C"> Voltage Flow Drive</label>
<label><input type="radio" name="q16" value="D"> Variable Flow Device</label>
</div>

<div class="question">
<h3>17. Industrial electronics reduces</h3>
<label><input type="radio" name="q17" value="A"> Human Effort</label>
<label><input type="radio" name="q17" value="B"> Automation</label>
<label><input type="radio" name="q17" value="C"> Efficiency</label>
<label><input type="radio" name="q17" value="D"> Productivity</label>
</div>

<div class="question">
<h3>18. Automation increases</h3>
<label><input type="radio" name="q18" value="A"> Downtime</label>
<label><input type="radio" name="q18" value="B"> Productivity</label>
<label><input type="radio" name="q18" value="C"> Errors</label>
<label><input type="radio" name="q18" value="D"> Waste</label>
</div>

<div class="question">
<h3>19. SCADA is used for</h3>
<label><input type="radio" name="q19" value="A"> Accounting</label>
<label><input type="radio" name="q19" value="B"> Gaming</label>
<label><input type="radio" name="q19" value="C"> Monitoring and Control</label>
<label><input type="radio" name="q19" value="D"> Design</label>
</div>

<div class="question">
<h3>20. Main objective of industrial electronics is</h3>
<label><input type="radio" name="q20" value="A"> Increase Cost</label>
<label><input type="radio" name="q20" value="B"> Reduce Efficiency</label>
<label><input type="radio" name="q20" value="C"> Increase Waste</label>
<label><input type="radio" name="q20" value="D"> Improve Control and Productivity</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>