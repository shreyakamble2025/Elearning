
<?php
session_start();

$_SESSION['subject'] = "Utilization Of Electrical Energy";
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

<title>Utilization Of Electrical Energy Quiz - LearnHub</title>

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
Semester 5 - Utilization Of Electrical Energy Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Electrical energy is mainly utilized for</h3>
<label><input type="radio" name="q1" value="A"> Lighting, Heating and Power</label>
<label><input type="radio" name="q1" value="B"> Painting</label>
<label><input type="radio" name="q1" value="C"> Decoration</label>
<label><input type="radio" name="q1" value="D"> Plumbing</label>
</div>

<div class="question">
<h3>2. Electric heating works on</h3>
<label><input type="radio" name="q2" value="A"> Magnetic Effect</label>
<label><input type="radio" name="q2" value="B"> Heating Effect of Current</label>
<label><input type="radio" name="q2" value="C"> Chemical Effect</label>
<label><input type="radio" name="q2" value="D"> Electrolysis</label>
</div>

<div class="question">
<h3>3. Incandescent lamp uses</h3>
<label><input type="radio" name="q3" value="A"> LED</label>
<label><input type="radio" name="q3" value="B"> Gas Discharge</label>
<label><input type="radio" name="q3" value="C"> Tungsten Filament</label>
<label><input type="radio" name="q3" value="D"> Laser</label>
</div>

<div class="question">
<h3>4. Electric traction is used in</h3>
<label><input type="radio" name="q4" value="A"> Houses</label>
<label><input type="radio" name="q4" value="B"> Factories</label>
<label><input type="radio" name="q4" value="C"> Street Lights</label>
<label><input type="radio" name="q4" value="D"> Electric Trains</label>
</div>

<div class="question">
<h3>5. LED lamps are preferred because they are</h3>
<label><input type="radio" name="q5" value="A"> Energy Efficient</label>
<label><input type="radio" name="q5" value="B"> Expensive</label>
<label><input type="radio" name="q5" value="C"> Heavy</label>
<label><input type="radio" name="q5" value="D"> Fragile</label>
</div>

<div class="question">
<h3>6. Electric furnace is used for</h3>
<label><input type="radio" name="q6" value="A"> Cooling</label>
<label><input type="radio" name="q6" value="B"> Heating and Melting</label>
<label><input type="radio" name="q6" value="C"> Lighting</label>
<label><input type="radio" name="q6" value="D"> Measuring</label>
</div>

<div class="question">
<h3>7. Unit of electrical energy is</h3>
<label><input type="radio" name="q7" value="A"> Volt</label>
<label><input type="radio" name="q7" value="B"> Ampere</label>
<label><input type="radio" name="q7" value="C"> kWh</label>
<label><input type="radio" name="q7" value="D"> Ohm</label>
</div>

<div class="question">
<h3>8. Electric welding uses</h3>
<label><input type="radio" name="q8" value="A"> Cooling Effect</label>
<label><input type="radio" name="q8" value="B"> Magnetic Effect</label>
<label><input type="radio" name="q8" value="C"> Chemical Effect</label>
<label><input type="radio" name="q8" value="D"> Heat Produced by Arc</label>
</div>

<div class="question">
<h3>9. Domestic energy meter records</h3>
<label><input type="radio" name="q9" value="A"> Energy Consumption</label>
<label><input type="radio" name="q9" value="B"> Voltage Only</label>
<label><input type="radio" name="q9" value="C"> Current Only</label>
<label><input type="radio" name="q9" value="D"> Frequency</label>
</div>

<div class="question">
<h3>10. Electric iron converts electrical energy into</h3>
<label><input type="radio" name="q10" value="A"> Light</label>
<label><input type="radio" name="q10" value="B"> Heat</label>
<label><input type="radio" name="q10" value="C"> Sound</label>
<label><input type="radio" name="q10" value="D"> Chemical Energy</label>
</div>

<div class="question">
<h3>11. Fluorescent lamp operates using</h3>
<label><input type="radio" name="q11" value="A"> Filament Only</label>
<label><input type="radio" name="q11" value="B"> Resistance Heating</label>
<label><input type="radio" name="q11" value="C"> Gas Discharge</label>
<label><input type="radio" name="q11" value="D"> Solar Cell</label>
</div>

<div class="question">
<h3>12. Electric traction provides</h3>
<label><input type="radio" name="q12" value="A"> Water Supply</label>
<label><input type="radio" name="q12" value="B"> Communication</label>
<label><input type="radio" name="q12" value="C"> Lighting</label>
<label><input type="radio" name="q12" value="D"> Transportation</label>
</div>

<div class="question">
<h3>13. Induction heating works on</h3>
<label><input type="radio" name="q13" value="A"> Electromagnetic Induction</label>
<label><input type="radio" name="q13" value="B"> Chemical Action</label>
<label><input type="radio" name="q13" value="C"> Radiation Only</label>
<label><input type="radio" name="q13" value="D"> Electrolysis</label>
</div>

<div class="question">
<h3>14. Microwave oven uses</h3>
<label><input type="radio" name="q14" value="A"> Infrared Rays</label>
<label><input type="radio" name="q14" value="B"> Microwaves</label>
<label><input type="radio" name="q14" value="C"> Laser Rays</label>
<label><input type="radio" name="q14" value="D"> UV Rays</label>
</div>

<div class="question">
<h3>15. Electric lamp efficiency is measured in</h3>
<label><input type="radio" name="q15" value="A"> Watt</label>
<label><input type="radio" name="q15" value="B"> Volt</label>
<label><input type="radio" name="q15" value="C"> Lumens per Watt</label>
<label><input type="radio" name="q15" value="D"> Ampere</label>
</div>

<div class="question">
<h3>16. Electric cooking appliances mainly use</h3>
<label><input type="radio" name="q16" value="A"> Magnetic Effect</label>
<label><input type="radio" name="q16" value="B"> Chemical Effect</label>
<label><input type="radio" name="q16" value="C"> Light Effect</label>
<label><input type="radio" name="q16" value="D"> Heating Effect</label>
</div>

<div class="question">
<h3>17. Street lighting improves</h3>
<label><input type="radio" name="q17" value="A"> Safety and Visibility</label>
<label><input type="radio" name="q17" value="B"> Temperature</label>
<label><input type="radio" name="q17" value="C"> Rainfall</label>
<label><input type="radio" name="q17" value="D"> Frequency</label>
</div>

<div class="question">
<h3>18. Electric motors convert</h3>
<label><input type="radio" name="q18" value="A"> Mechanical to Electrical</label>
<label><input type="radio" name="q18" value="B"> Electrical to Mechanical</label>
<label><input type="radio" name="q18" value="C"> Heat to Electrical</label>
<label><input type="radio" name="q18" value="D"> Chemical to Electrical</label>
</div>

<div class="question">
<h3>19. Energy conservation helps in</h3>
<label><input type="radio" name="q19" value="A"> Increasing Losses</label>
<label><input type="radio" name="q19" value="B"> Higher Consumption</label>
<label><input type="radio" name="q19" value="C"> Saving Electrical Energy</label>
<label><input type="radio" name="q19" value="D"> Voltage Drop</label>
</div>

<div class="question">
<h3>20. Utilization of electrical energy improves</h3>
<label><input type="radio" name="q20" value="A"> Pollution</label>
<label><input type="radio" name="q20" value="B"> Efficiency and Comfort</label>
<label><input type="radio" name="q20" value="C"> Power Loss</label>
<label><input type="radio" name="q20" value="D"> Cost Only</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

