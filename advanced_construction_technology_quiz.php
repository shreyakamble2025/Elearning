<?php
session_start();

$_SESSION['subject'] = "Advanced Construction Technology";
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

<title>Advanced Construction Technology Quiz - LearnHub</title>


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
Semester 3 - Advanced Construction Technology Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Advanced Construction Technology focuses on</h3>

<label><input type="radio" name="q1" value="A"> Traditional Painting</label>
<label><input type="radio" name="q1" value="B"> Modern Construction Methods</label>
<label><input type="radio" name="q1" value="C"> Electrical Work</label>
<label><input type="radio" name="q1" value="D"> Water Supply</label>

</div>


<div class="question">
<h3>2. Prefabrication means</h3>

<label><input type="radio" name="q2" value="A"> Manufacturing Components Before Site Work</label>
<label><input type="radio" name="q2" value="B"> Painting Building</label>
<label><input type="radio" name="q2" value="C"> Breaking Structure</label>
<label><input type="radio" name="q2" value="D"> Road Repair</label>

</div>


<div class="question">
<h3>3. Precast concrete is produced in</h3>

<label><input type="radio" name="q3" value="A"> Soil</label>
<label><input type="radio" name="q3" value="B"> Water Tank</label>
<label><input type="radio" name="q3" value="C"> Factory</label>
<label><input type="radio" name="q3" value="D"> Road</label>

</div>


<div class="question">
<h3>4. Formwork is used for</h3>

<label><input type="radio" name="q4" value="A"> Painting</label>
<label><input type="radio" name="q4" value="B"> Drainage</label>
<label><input type="radio" name="q4" value="C"> Decoration</label>
<label><input type="radio" name="q4" value="D"> Supporting Fresh Concrete</label>

</div>


<div class="question">
<h3>5. Ready Mix Concrete is known as</h3>

<label><input type="radio" name="q5" value="A"> RMC</label>
<label><input type="radio" name="q5" value="B"> RCC</label>
<label><input type="radio" name="q5" value="C"> OPC</label>
<label><input type="radio" name="q5" value="D"> PPC</label>

</div>


<div class="question">
<h3>6. Tunnel construction is used for</h3>

<label><input type="radio" name="q6" value="A"> Decoration</label>
<label><input type="radio" name="q6" value="B"> Underground Passage</label>
<label><input type="radio" name="q6" value="C"> Painting</label>
<label><input type="radio" name="q6" value="D"> Flooring</label>

</div>


<div class="question">
<h3>7. Automation in construction improves</h3>

<label><input type="radio" name="q7" value="A"> Cost Only</label>
<label><input type="radio" name="q7" value="B"> Colour</label>
<label><input type="radio" name="q7" value="C"> Efficiency</label>
<label><input type="radio" name="q7" value="D"> Weight</label>

</div>


<div class="question">
<h3>8. Building Information Modeling is called</h3>

<label><input type="radio" name="q8" value="A"> BIM</label>
<label><input type="radio" name="q8" value="B"> RCC</label>
<label><input type="radio" name="q8" value="C"> CAD</label>
<label><input type="radio" name="q8" value="D"> GIS</label>

</div>


<div class="question">
<h3>9. Crane is used for</h3>

<label><input type="radio" name="q9" value="A"> Cutting</label>
<label><input type="radio" name="q9" value="B"> Painting</label>
<label><input type="radio" name="q9" value="C"> Measuring</label>
<label><input type="radio" name="q9" value="D"> Lifting Heavy Loads</label>

</div>


<div class="question">
<h3>10. Green building focuses on</h3>

<label><input type="radio" name="q10" value="A"> Decoration</label>
<label><input type="radio" name="q10" value="B"> Environmental Sustainability</label>
<label><input type="radio" name="q10" value="C"> Increasing Cost</label>
<label><input type="radio" name="q10" value="D"> Heavy Materials</label>

</div>


<div class="question">
<h3>11. Solar panels are used in</h3>

<label><input type="radio" name="q11" value="A"> Green Buildings</label>
<label><input type="radio" name="q11" value="B"> Roads</label>
<label><input type="radio" name="q11" value="C"> Bridges</label>
<label><input type="radio" name="q11" value="D"> Tunnels</label>

</div>


<div class="question">
<h3>12. 3D printing in construction is used for</h3>

<label><input type="radio" name="q12" value="A"> Painting</label>
<label><input type="radio" name="q12" value="B"> Demolition</label>
<label><input type="radio" name="q12" value="C"> Building Components</label>
<label><input type="radio" name="q12" value="D"> Water Supply</label>

</div>


<div class="question">
<h3>13. Modular construction uses</h3>

<label><input type="radio" name="q13" value="A"> Soil</label>
<label><input type="radio" name="q13" value="B"> Factory Made Modules</label>
<label><input type="radio" name="q13" value="C"> Bricks Only</label>
<label><input type="radio" name="q13" value="D"> Wood Only</label>

</div>


<div class="question">
<h3>14. Safety management reduces</h3>

<label><input type="radio" name="q14" value="A"> Construction Accidents</label>
<label><input type="radio" name="q14" value="B"> Building Height</label>
<label><input type="radio" name="q14" value="C"> Material Strength</label>
<label><input type="radio" name="q14" value="D"> Design</label>

</div>


<div class="question">
<h3>15. Excavator is used for</h3>

<label><input type="radio" name="q15" value="A"> Painting</label>
<label><input type="radio" name="q15" value="B"> Testing</label>
<label><input type="radio" name="q15" value="C"> Finishing</label>
<label><input type="radio" name="q15" value="D"> Earthwork</label>

</div>


<div class="question">
<h3>16. Modern construction saves</h3>

<label><input type="radio" name="q16" value="A"> Time</label>
<label><input type="radio" name="q16" value="B"> Colour</label>
<label><input type="radio" name="q16" value="C"> Time and Labour</label>
<label><input type="radio" name="q16" value="D"> Height</label>

</div>


<div class="question">
<h3>17. Green construction reduces</h3>

<label><input type="radio" name="q17" value="A"> Environmental Impact</label>
<label><input type="radio" name="q17" value="B"> Strength</label>
<label><input type="radio" name="q17" value="C"> Safety</label>
<label><input type="radio" name="q17" value="D"> Quality</label>

</div>


<div class="question">
<h3>18. Heavy equipment is used for</h3>

<label><input type="radio" name="q18" value="A"> Decoration</label>
<label><input type="radio" name="q18" value="B"> Construction Work</label>
<label><input type="radio" name="q18" value="C"> Painting</label>
<label><input type="radio" name="q18" value="D"> Cleaning</label>

</div>


<div class="question">
<h3>19. Advanced technology improves</h3>

<label><input type="radio" name="q19" value="A"> Colour</label>
<label><input type="radio" name="q19" value="B"> Height</label>
<label><input type="radio" name="q19" value="C"> Cost Only</label>
<label><input type="radio" name="q19" value="D"> Quality and Speed</label>

</div>


<div class="question">
<h3>20. Modern construction aims for</h3>

<label><input type="radio" name="q20" value="A"> Safe and Efficient Construction</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Higher Cost</label>
<label><input type="radio" name="q20" value="D"> Slow Work</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>