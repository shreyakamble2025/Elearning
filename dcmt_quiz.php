
<?php
session_start();

$_SESSION['subject'] = "D.C. Machines And Transformers";
$_SESSION['semester'] = "Semester 4";

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

<title>D.C. Machines And Transformers Quiz - LearnHub</title>

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
Semester 4 - D.C. Machines And Transformers Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. A DC machine can operate as</h3>
<label><input type="radio" name="q1" value="A"> Motor and Generator</label>
<label><input type="radio" name="q1" value="B"> Transformer only</label>
<label><input type="radio" name="q1" value="C"> Rectifier only</label>
<label><input type="radio" name="q1" value="D"> Battery only</label>
</div>

<div class="question">
<h3>2. The unit of magnetic flux is</h3>
<label><input type="radio" name="q2" value="A"> Tesla</label>
<label><input type="radio" name="q2" value="B"> Weber</label>
<label><input type="radio" name="q2" value="C"> Henry</label>
<label><input type="radio" name="q2" value="D"> Volt</label>
</div>

<div class="question">
<h3>3. The armature winding is placed on</h3>
<label><input type="radio" name="q3" value="A"> Pole</label>
<label><input type="radio" name="q3" value="B"> Yoke</label>
<label><input type="radio" name="q3" value="C"> Rotor</label>
<label><input type="radio" name="q3" value="D"> Brush</label>
</div>

<div class="question">
<h3>4. Transformer works on the principle of</h3>
<label><input type="radio" name="q4" value="A"> Electrolysis</label>
<label><input type="radio" name="q4" value="B"> Heating Effect</label>
<label><input type="radio" name="q4" value="C"> Photoelectric Effect</label>
<label><input type="radio" name="q4" value="D"> Electromagnetic Induction</label>
</div>

<div class="question">
<h3>5. The commutator is used in</h3>
<label><input type="radio" name="q5" value="A"> DC Machines</label>
<label><input type="radio" name="q5" value="B"> Transformers</label>
<label><input type="radio" name="q5" value="C"> Capacitors</label>
<label><input type="radio" name="q5" value="D"> Inductors</label>
</div>

<div class="question">
<h3>6. Transformer transfers energy through</h3>
<label><input type="radio" name="q6" value="A"> Direct Contact</label>
<label><input type="radio" name="q6" value="B"> Magnetic Flux</label>
<label><input type="radio" name="q6" value="C"> Heat Transfer</label>
<label><input type="radio" name="q6" value="D"> Chemical Action</label>
</div>

<div class="question">
<h3>7. The yoke in DC machine provides</h3>
<label><input type="radio" name="q7" value="A"> Cooling</label>
<label><input type="radio" name="q7" value="B"> Rotation</label>
<label><input type="radio" name="q7" value="C"> Mechanical Support and Flux Path</label>
<label><input type="radio" name="q7" value="D"> Insulation</label>
</div>

<div class="question">
<h3>8. A step-up transformer increases</h3>
<label><input type="radio" name="q8" value="A"> Current</label>
<label><input type="radio" name="q8" value="B"> Power</label>
<label><input type="radio" name="q8" value="C"> Frequency</label>
<label><input type="radio" name="q8" value="D"> Voltage</label>
</div>

<div class="question">
<h3>9. Brushes are made of</h3>
<label><input type="radio" name="q9" value="A"> Carbon</label>
<label><input type="radio" name="q9" value="B"> Plastic</label>
<label><input type="radio" name="q9" value="C"> Rubber</label>
<label><input type="radio" name="q9" value="D"> Wood</label>
</div>

<div class="question">
<h3>10. Transformer frequency remains</h3>
<label><input type="radio" name="q10" value="A"> Increased</label>
<label><input type="radio" name="q10" value="B"> Constant</label>
<label><input type="radio" name="q10" value="C"> Decreased</label>
<label><input type="radio" name="q10" value="D"> Zero</label>
</div>

<div class="question">
<h3>11. Back EMF is developed in</h3>
<label><input type="radio" name="q11" value="A"> Transformer</label>
<label><input type="radio" name="q11" value="B"> Capacitor</label>
<label><input type="radio" name="q11" value="C"> DC Motor</label>
<label><input type="radio" name="q11" value="D"> Resistor</label>
</div>

<div class="question">
<h3>12. Core losses in transformer include</h3>
<label><input type="radio" name="q12" value="A"> Copper Loss</label>
<label><input type="radio" name="q12" value="B"> Mechanical Loss</label>
<label><input type="radio" name="q12" value="C"> Friction Loss</label>
<label><input type="radio" name="q12" value="D"> Hysteresis and Eddy Current Loss</label>
</div>

<div class="question">
<h3>13. DC generator converts</h3>
<label><input type="radio" name="q13" value="A"> Mechanical Energy into Electrical Energy</label>
<label><input type="radio" name="q13" value="B"> Electrical into Mechanical</label>
<label><input type="radio" name="q13" value="C"> AC into DC</label>
<label><input type="radio" name="q13" value="D"> DC into AC</label>
</div>

<div class="question">
<h3>14. Transformer rating is expressed in</h3>
<label><input type="radio" name="q14" value="A"> kW</label>
<label><input type="radio" name="q14" value="B"> kVA</label>
<label><input type="radio" name="q14" value="C"> HP</label>
<label><input type="radio" name="q14" value="D"> kVAR</label>
</div>

<div class="question">
<h3>15. Field winding is responsible for</h3>
<label><input type="radio" name="q15" value="A"> Cooling</label>
<label><input type="radio" name="q15" value="B"> Rotation</label>
<label><input type="radio" name="q15" value="C"> Producing Magnetic Field</label>
<label><input type="radio" name="q15" value="D"> Insulation</label>
</div>

<div class="question">
<h3>16. Transformer oil is used for</h3>
<label><input type="radio" name="q16" value="A"> Lubrication</label>
<label><input type="radio" name="q16" value="B"> Painting</label>
<label><input type="radio" name="q16" value="C"> Cleaning</label>
<label><input type="radio" name="q16" value="D"> Cooling and Insulation</label>
</div>

<div class="question">
<h3>17. The speed of DC motor depends on</h3>
<label><input type="radio" name="q17" value="A"> Voltage and Flux</label>
<label><input type="radio" name="q17" value="B"> Colour</label>
<label><input type="radio" name="q17" value="C"> Temperature only</label>
<label><input type="radio" name="q17" value="D"> Shape</label>
</div>

<div class="question">
<h3>18. Laminated core is used to reduce</h3>
<label><input type="radio" name="q18" value="A"> Hysteresis Loss</label>
<label><input type="radio" name="q18" value="B"> Eddy Current Loss</label>
<label><input type="radio" name="q18" value="C"> Copper Loss</label>
<label><input type="radio" name="q18" value="D"> Mechanical Loss</label>
</div>

<div class="question">
<h3>19. Efficiency of transformer is generally</h3>
<label><input type="radio" name="q19" value="A"> 20%</label>
<label><input type="radio" name="q19" value="B"> 40%</label>
<label><input type="radio" name="q19" value="C"> High (Above 90%)</label>
<label><input type="radio" name="q19" value="D"> 10%</label>
</div>

<div class="question">
<h3>20. Transformer is a</h3>
<label><input type="radio" name="q20" value="A"> Rotating Machine</label>
<label><input type="radio" name="q20" value="B"> Dynamic Machine</label>
<label><input type="radio" name="q20" value="C"> Mechanical Device</label>
<label><input type="radio" name="q20" value="D"> Static Device</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

