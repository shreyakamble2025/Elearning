<?php
session_start();

$_SESSION['subject'] = "Water Resources Engineering";
$_SESSION['semester'] = "Semester 3";


$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
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

<title>Water Resources Engineering Quiz - LearnHub</title>

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
Semester 3 - Water Resources Engineering Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Water Resources Engineering deals with</h3>

<label><input type="radio" name="q1" value="A"> Building Construction</label>
<label><input type="radio" name="q1" value="B"> Management of Water Resources</label>
<label><input type="radio" name="q1" value="C"> Highway Design</label>
<label><input type="radio" name="q1" value="D"> Steel Design</label>

</div>


<div class="question">
<h3>2. Hydrology is the study of</h3>

<label><input type="radio" name="q2" value="A"> Water Occurrence and Movement</label>
<label><input type="radio" name="q2" value="B"> Soil Testing</label>
<label><input type="radio" name="q2" value="C"> Building Materials</label>
<label><input type="radio" name="q2" value="D"> Road Traffic</label>

</div>


<div class="question">
<h3>3. Rainfall is measured by</h3>

<label><input type="radio" name="q3" value="A"> Thermometer</label>
<label><input type="radio" name="q3" value="B"> Barometer</label>
<label><input type="radio" name="q3" value="C"> Rain Gauge</label>
<label><input type="radio" name="q3" value="D"> Speedometer</label>

</div>


<div class="question">
<h3>4. Dam is constructed for</h3>

<label><input type="radio" name="q4" value="A"> Decoration</label>
<label><input type="radio" name="q4" value="B"> Transportation</label>
<label><input type="radio" name="q4" value="C"> Building Houses</label>
<label><input type="radio" name="q4" value="D"> Storage of Water</label>

</div>


<div class="question">
<h3>5. Irrigation means</h3>

<label><input type="radio" name="q5" value="A"> Artificial Supply of Water to Crops</label>
<label><input type="radio" name="q5" value="B"> Road Construction</label>
<label><input type="radio" name="q5" value="C"> Soil Removal</label>
<label><input type="radio" name="q5" value="D"> Building Work</label>

</div>


<div class="question">
<h3>6. Canal is used for</h3>

<label><input type="radio" name="q6" value="A"> Transportation</label>
<label><input type="radio" name="q6" value="B"> Water Distribution</label>
<label><input type="radio" name="q6" value="C"> Construction</label>
<label><input type="radio" name="q6" value="D"> Drainage Only</label>

</div>


<div class="question">
<h3>7. Groundwater is stored in</h3>

<label><input type="radio" name="q7" value="A"> Roof</label>
<label><input type="radio" name="q7" value="B"> Dam</label>
<label><input type="radio" name="q7" value="C"> Aquifers</label>
<label><input type="radio" name="q7" value="D"> Roads</label>

</div>


<div class="question">
<h3>8. Watershed management helps in</h3>

<label><input type="radio" name="q8" value="A"> Water Conservation</label>
<label><input type="radio" name="q8" value="B"> Painting</label>
<label><input type="radio" name="q8" value="C"> Building Design</label>
<label><input type="radio" name="q8" value="D"> Steel Work</label>

</div>


<div class="question">
<h3>9. Spillway is provided in</h3>

<label><input type="radio" name="q9" value="A"> Roads</label>
<label><input type="radio" name="q9" value="B"> Buildings</label>
<label><input type="radio" name="q9" value="C"> Bridges</label>
<label><input type="radio" name="q9" value="D"> Dams</label>

</div>


<div class="question">
<h3>10. Flood control is related to</h3>

<label><input type="radio" name="q10" value="A"> Buildings</label>
<label><input type="radio" name="q10" value="B"> Water Management</label>
<label><input type="radio" name="q10" value="C"> Steel Design</label>
<label><input type="radio" name="q10" value="D"> Road Design</label>

</div>


<div class="question">
<h3>11. Evaporation is conversion of</h3>

<label><input type="radio" name="q11" value="A"> Water into Vapour</label>
<label><input type="radio" name="q11" value="B"> Soil into Water</label>
<label><input type="radio" name="q11" value="C"> Ice into Soil</label>
<label><input type="radio" name="q11" value="D"> Air into Water</label>

</div>


<div class="question">
<h3>12. Reservoir stores</h3>

<label><input type="radio" name="q12" value="A"> Sand</label>
<label><input type="radio" name="q12" value="B"> Soil</label>
<label><input type="radio" name="q12" value="C"> Water</label>
<label><input type="radio" name="q12" value="D"> Cement</label>

</div>


<div class="question">
<h3>13. Hydropower generation uses</h3>

<label><input type="radio" name="q13" value="A"> Coal</label>
<label><input type="radio" name="q13" value="B"> Water Energy</label>
<label><input type="radio" name="q13" value="C"> Petrol</label>
<label><input type="radio" name="q13" value="D"> Gas</label>

</div>


<div class="question">
<h3>14. Check dam is used for</h3>

<label><input type="radio" name="q14" value="A"> Water Conservation</label>
<label><input type="radio" name="q14" value="B"> Decoration</label>
<label><input type="radio" name="q14" value="C"> Transport</label>
<label><input type="radio" name="q14" value="D"> Building</label>

</div>


<div class="question">
<h3>15. Dam failure may cause</h3>

<label><input type="radio" name="q15" value="A"> Dry Soil</label>
<label><input type="radio" name="q15" value="B"> Less Rainfall</label>
<label><input type="radio" name="q15" value="C"> Road Damage</label>
<label><input type="radio" name="q15" value="D"> Flood Disaster</label>

</div>


<div class="question">
<h3>16. Rainwater harvesting is used for</h3>

<label><input type="radio" name="q16" value="A"> Waste Generation</label>
<label><input type="radio" name="q16" value="B"> Pollution</label>
<label><input type="radio" name="q16" value="C"> Water Conservation</label>
<label><input type="radio" name="q16" value="D"> Road Design</label>

</div>


<div class="question">
<h3>17. Hydraulics deals with</h3>

<label><input type="radio" name="q17" value="A"> Flow of Water</label>
<label><input type="radio" name="q17" value="B"> Steel Work</label>
<label><input type="radio" name="q17" value="C"> Building Materials</label>
<label><input type="radio" name="q17" value="D"> Traffic</label>

</div>


<div class="question">
<h3>18. Dam provides</h3>

<label><input type="radio" name="q18" value="A"> Road Safety</label>
<label><input type="radio" name="q18" value="B"> Water Storage</label>
<label><input type="radio" name="q18" value="C"> Building Support</label>
<label><input type="radio" name="q18" value="D"> Painting</label>

</div>


<div class="question">
<h3>19. Water resources planning ensures</h3>

<label><input type="radio" name="q19" value="A"> Decoration</label>
<label><input type="radio" name="q19" value="B"> Colour Selection</label>
<label><input type="radio" name="q19" value="C"> Road Construction</label>
<label><input type="radio" name="q19" value="D"> Proper Water Utilization</label>

</div>


<div class="question">
<h3>20. Water Resources Engineering helps in</h3>

<label><input type="radio" name="q20" value="A"> Water Management and Development</label>
<label><input type="radio" name="q20" value="B"> Painting</label>
<label><input type="radio" name="q20" value="C"> Decoration</label>
<label><input type="radio" name="q20" value="D"> Furniture Design</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>