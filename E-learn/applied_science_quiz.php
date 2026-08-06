<?php
session_start();

$_SESSION['subject'] = "Applied Science";
$_SESSION['semester'] = "Semester 1";


$_SESSION['answers']=array(

1=>'B',
2=>'C',
3=>'A',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'A',
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

<title>Applied Science Quiz - LearnHub</title>


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
Semester 1 - Applied Science Quiz
</h1>



<div class="card">


<form action="quiz1.php" method="post">



<div class="question">

<h3>1. Chemistry is the study of</h3>

<label>
<input type="radio" name="q1" value="A">
Plants
</label>

<label>
<input type="radio" name="q1" value="B">
Matter and its properties
</label>

<label>
<input type="radio" name="q1" value="C">
Animals
</label>

<label>
<input type="radio" name="q1" value="D">
Machines
</label>

</div>




<div class="question">

<h3>2. SI unit of Temperature is</h3>

<label>
<input type="radio" name="q2" value="A">
Celsius
</label>

<label>
<input type="radio" name="q2" value="B">
Fahrenheit
</label>

<label>
<input type="radio" name="q2" value="C">
Kelvin
</label>

<label>
<input type="radio" name="q2" value="D">
Joule
</label>

</div>




<div class="question">

<h3>3. Atomic number represents</h3>

<label>
<input type="radio" name="q3" value="A">
Number of Protons
</label>

<label>
<input type="radio" name="q3" value="B">
Number of Neutrons
</label>

<label>
<input type="radio" name="q3" value="C">
Number of Molecules
</label>

<label>
<input type="radio" name="q3" value="D">
Mass
</label>

</div>




<div class="question">

<h3>4. Chemical formula of Water is</h3>

<label>
<input type="radio" name="q4" value="A">
CO2
</label>

<label>
<input type="radio" name="q4" value="B">
O2
</label>

<label>
<input type="radio" name="q4" value="C">
NaCl
</label>

<label>
<input type="radio" name="q4" value="D">
H2O
</label>

</div>




<div class="question">

<h3>5. pH value of neutral solution is</h3>

<label>
<input type="radio" name="q5" value="A">
7
</label>

<label>
<input type="radio" name="q5" value="B">
5
</label>

<label>
<input type="radio" name="q5" value="C">
10
</label>

<label>
<input type="radio" name="q5" value="D">
14
</label>

</div>




<div class="question">

<h3>6. Newton is unit of</h3>

<label>
<input type="radio" name="q6" value="A">
Energy
</label>

<label>
<input type="radio" name="q6" value="B">
Force
</label>

<label>
<input type="radio" name="q6" value="C">
Power
</label>

<label>
<input type="radio" name="q6" value="D">
Pressure
</label>

</div>




<div class="question">

<h3>7. Photosynthesis requires</h3>

<label>
<input type="radio" name="q7" value="A">
Oxygen
</label>

<label>
<input type="radio" name="q7" value="B">
Nitrogen
</label>

<label>
<input type="radio" name="q7" value="C">
Sunlight
</label>

<label>
<input type="radio" name="q7" value="D">
Hydrogen
</label>

</div>




<div class="question">

<h3>8. Density formula is</h3>

<label>
<input type="radio" name="q8" value="A">
Mass / Volume
</label>

<label>
<input type="radio" name="q8" value="B">
Volume / Mass
</label>

<label>
<input type="radio" name="q8" value="C">
Mass × Volume
</label>

<label>
<input type="radio" name="q8" value="D">
Mass + Volume
</label>

</div>




<div class="question">

<h3>9. Unit of Electrical Resistance is</h3>

<label>
<input type="radio" name="q9" value="A">
Volt
</label>

<label>
<input type="radio" name="q9" value="B">
Ampere
</label>

<label>
<input type="radio" name="q9" value="C">
Watt
</label>

<label>
<input type="radio" name="q9" value="D">
Ohm
</label>

</div>




<div class="question">

<h3>10. Speed formula is</h3>

<label>
<input type="radio" name="q10" value="A">
Time/Distance
</label>

<label>
<input type="radio" name="q10" value="B">
Distance/Time
</label>

<label>
<input type="radio" name="q10" value="C">
Distance×Time
</label>

<label>
<input type="radio" name="q10" value="D">
Mass/Time
</label>

</div>

<div class="question">

<h3>11. Unit of Work is</h3>

<label>
<input type="radio" name="q11" value="A">
Joule
</label>

<label>
<input type="radio" name="q11" value="B">
Newton
</label>

<label>
<input type="radio" name="q11" value="C">
Watt
</label>

<label>
<input type="radio" name="q11" value="D">
Pascal
</label>

</div>



<div class="question">

<h3>12. Light travels fastest in</h3>

<label>
<input type="radio" name="q12" value="A">
Water
</label>

<label>
<input type="radio" name="q12" value="B">
Glass
</label>

<label>
<input type="radio" name="q12" value="C">
Vacuum
</label>

<label>
<input type="radio" name="q12" value="D">
Air
</label>

</div>



<div class="question">

<h3>13. Formula of Force is</h3>

<label>
<input type="radio" name="q13" value="A">
Mass/Acceleration
</label>

<label>
<input type="radio" name="q13" value="B">
Mass × Acceleration
</label>

<label>
<input type="radio" name="q13" value="C">
Distance/Time
</label>

<label>
<input type="radio" name="q13" value="D">
Work/Time
</label>

</div>



<div class="question">

<h3>14. SI unit of Pressure is</h3>

<label>
<input type="radio" name="q14" value="A">
Pascal
</label>

<label>
<input type="radio" name="q14" value="B">
Newton
</label>

<label>
<input type="radio" name="q14" value="C">
Joule
</label>

<label>
<input type="radio" name="q14" value="D">
Watt
</label>

</div>



<div class="question">

<h3>15. Vitamin C deficiency causes</h3>

<label>
<input type="radio" name="q15" value="A">
Rickets
</label>

<label>
<input type="radio" name="q15" value="B">
Night Blindness
</label>

<label>
<input type="radio" name="q15" value="C">
Beriberi
</label>

<label>
<input type="radio" name="q15" value="D">
Scurvy
</label>

</div>



<div class="question">

<h3>16. Metal used in electrical wires is</h3>

<label>
<input type="radio" name="q16" value="A">
Iron
</label>

<label>
<input type="radio" name="q16" value="B">
Gold
</label>

<label>
<input type="radio" name="q16" value="C">
Copper
</label>

<label>
<input type="radio" name="q16" value="D">
Silver
</label>

</div>



<div class="question">

<h3>17. Energy stored in a battery is</h3>

<label>
<input type="radio" name="q17" value="A">
Chemical Energy
</label>

<label>
<input type="radio" name="q17" value="B">
Heat Energy
</label>

<label>
<input type="radio" name="q17" value="C">
Sound Energy
</label>

<label>
<input type="radio" name="q17" value="D">
Light Energy
</label>

</div>



<div class="question">

<h3>18. Human blood contains</h3>

<label>
<input type="radio" name="q18" value="A">
Neurons
</label>

<label>
<input type="radio" name="q18" value="B">
Red Blood Cells
</label>

<label>
<input type="radio" name="q18" value="C">
Bones
</label>

<label>
<input type="radio" name="q18" value="D">
Muscles
</label>

</div>



<div class="question">

<h3>19. The hardest natural substance is</h3>

<label>
<input type="radio" name="q19" value="A">
Iron
</label>

<label>
<input type="radio" name="q19" value="B">
Gold
</label>

<label>
<input type="radio" name="q19" value="C">
Silver
</label>

<label>
<input type="radio" name="q19" value="D">
Diamond
</label>

</div>



<div class="question">

<h3>20. Study of living organisms is called</h3>

<label>
<input type="radio" name="q20" value="A">
Biology
</label>

<label>
<input type="radio" name="q20" value="B">
Physics
</label>

<label>
<input type="radio" name="q20" value="C">
Chemistry
</label>

<label>
<input type="radio" name="q20" value="D">
Mathematics
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>