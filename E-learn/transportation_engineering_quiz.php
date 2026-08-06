<?php
session_start();

$_SESSION['subject'] = "Transportation Engineering";
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

<title>Transportation Engineering Quiz - LearnHub</title>

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
Semester 3 - Transportation Engineering Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Transportation Engineering deals with</h3>

<label><input type="radio" name="q1" value="A"> Building Design</label>
<label><input type="radio" name="q1" value="B"> Planning and Design of Transport Systems</label>
<label><input type="radio" name="q1" value="C"> Water Treatment</label>
<label><input type="radio" name="q1" value="D"> Steel Design</label>

</div>


<div class="question">
<h3>2. Main modes of transportation are</h3>

<label><input type="radio" name="q2" value="A"> Road, Rail, Air and Water</label>
<label><input type="radio" name="q2" value="B"> Only Road</label>
<label><input type="radio" name="q2" value="C"> Only Rail</label>
<label><input type="radio" name="q2" value="D"> Only Air</label>

</div>


<div class="question">
<h3>3. Highway engineering is related to</h3>

<label><input type="radio" name="q3" value="A"> Buildings</label>
<label><input type="radio" name="q3" value="B"> Dams</label>
<label><input type="radio" name="q3" value="C"> Roads</label>
<label><input type="radio" name="q3" value="D"> Water Tanks</label>

</div>


<div class="question">
<h3>4. Traffic engineering studies</h3>

<label><input type="radio" name="q4" value="A"> Soil</label>
<label><input type="radio" name="q4" value="B"> Concrete</label>
<label><input type="radio" name="q4" value="C"> Steel</label>
<label><input type="radio" name="q4" value="D"> Traffic Movement</label>

</div>


<div class="question">
<h3>5. Pavement is provided for</h3>

<label><input type="radio" name="q5" value="A"> Vehicle Movement</label>
<label><input type="radio" name="q5" value="B"> Decoration</label>
<label><input type="radio" name="q5" value="C"> Storage</label>
<label><input type="radio" name="q5" value="D"> Lighting</label>

</div>


<div class="question">
<h3>6. Railway transportation uses</h3>

<label><input type="radio" name="q6" value="A"> Roads</label>
<label><input type="radio" name="q6" value="B"> Tracks</label>
<label><input type="radio" name="q6" value="C"> Canals</label>
<label><input type="radio" name="q6" value="D"> Bridges Only</label>

</div>


<div class="question">
<h3>7. Airport engineering deals with</h3>

<label><input type="radio" name="q7" value="A"> Buildings</label>
<label><input type="radio" name="q7" value="B"> Roads</label>
<label><input type="radio" name="q7" value="C"> Aircraft Facilities</label>
<label><input type="radio" name="q7" value="D"> Water Supply</label>

</div>


<div class="question">
<h3>8. Traffic signals are used for</h3>

<label><input type="radio" name="q8" value="A"> Traffic Control</label>
<label><input type="radio" name="q8" value="B"> Decoration</label>
<label><input type="radio" name="q8" value="C"> Construction</label>
<label><input type="radio" name="q8" value="D"> Drainage</label>

</div>


<div class="question">
<h3>9. Bridge is constructed over</h3>

<label><input type="radio" name="q9" value="A"> Building</label>
<label><input type="radio" name="q9" value="B"> Road</label>
<label><input type="radio" name="q9" value="C"> Soil</label>
<label><input type="radio" name="q9" value="D"> River or Obstacle</label>

</div>


<div class="question">
<h3>10. Traffic volume means</h3>

<label><input type="radio" name="q10" value="A"> Road Width</label>
<label><input type="radio" name="q10" value="B"> Number of Vehicles</label>
<label><input type="radio" name="q10" value="C"> Road Colour</label>
<label><input type="radio" name="q10" value="D"> Pavement Type</label>

</div>


<div class="question">
<h3>11. Road safety depends on</h3>

<label><input type="radio" name="q11" value="A"> Proper Design</label>
<label><input type="radio" name="q11" value="B"> Decoration</label>
<label><input type="radio" name="q11" value="C"> Colour</label>
<label><input type="radio" name="q11" value="D"> Height</label>

</div>


<div class="question">
<h3>12. Zebra crossing is provided for</h3>

<label><input type="radio" name="q12" value="A"> Vehicles</label>
<label><input type="radio" name="q12" value="B"> Parking</label>
<label><input type="radio" name="q12" value="C"> Pedestrian Crossing</label>
<label><input type="radio" name="q12" value="D"> Drainage</label>

</div>


<div class="question">
<h3>13. Railway track consists of</h3>

<label><input type="radio" name="q13" value="A"> Bricks</label>
<label><input type="radio" name="q13" value="B"> Rails and Sleepers</label>
<label><input type="radio" name="q13" value="C"> Cement Only</label>
<label><input type="radio" name="q13" value="D"> Wood Only</label>

</div>


<div class="question">
<h3>14. Transportation planning helps in</h3>

<label><input type="radio" name="q14" value="A"> Efficient Movement</label>
<label><input type="radio" name="q14" value="B"> Decoration</label>
<label><input type="radio" name="q14" value="C"> Painting</label>
<label><input type="radio" name="q14" value="D"> Storage</label>

</div>


<div class="question">
<h3>15. Traffic signs provide</h3>

<label><input type="radio" name="q15" value="A"> Decoration</label>
<label><input type="radio" name="q15" value="B"> Lighting</label>
<label><input type="radio" name="q15" value="C"> Water Supply</label>
<label><input type="radio" name="q15" value="D"> Information and Safety</label>

</div>


<div class="question">
<h3>16. Road alignment depends on</h3>

<label><input type="radio" name="q16" value="A"> Colour</label>
<label><input type="radio" name="q16" value="B"> Paint</label>
<label><input type="radio" name="q16" value="C"> Terrain and Traffic</label>
<label><input type="radio" name="q16" value="D"> Decoration</label>

</div>


<div class="question">
<h3>17. Public transport includes</h3>

<label><input type="radio" name="q17" value="A"> Bus and Train</label>
<label><input type="radio" name="q17" value="B"> House</label>
<label><input type="radio" name="q17" value="C"> Bridge</label>
<label><input type="radio" name="q17" value="D"> Dam</label>

</div>


<div class="question">
<h3>18. Transportation system improves</h3>

<label><input type="radio" name="q18" value="A"> Decoration</label>
<label><input type="radio" name="q18" value="B"> Connectivity</label>
<label><input type="radio" name="q18" value="C"> Building Height</label>
<label><input type="radio" name="q18" value="D"> Soil Strength</label>

</div>


<div class="question">
<h3>19. Traffic management reduces</h3>

<label><input type="radio" name="q19" value="A"> Road Width</label>
<label><input type="radio" name="q19" value="B"> Construction</label>
<label><input type="radio" name="q19" value="C"> Cost</label>
<label><input type="radio" name="q19" value="D"> Congestion</label>

</div>


<div class="question">
<h3>20. Transportation engineering provides</h3>

<label><input type="radio" name="q20" value="A"> Safe and Efficient Transport</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Painting</label>
<label><input type="radio" name="q20" value="D"> Slow Movement</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>