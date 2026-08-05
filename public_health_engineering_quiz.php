<?php
session_start();

$_SESSION['subject'] = "Public Health Engineering";
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

<title>Public Health Engineering Quiz - LearnHub</title>

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
Semester 3 - Public Health Engineering Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Public Health Engineering deals with</h3>

<label><input type="radio" name="q1" value="A"> Building Design</label>
<label><input type="radio" name="q1" value="B"> Water Supply and Sanitation</label>
<label><input type="radio" name="q1" value="C"> Road Construction</label>
<label><input type="radio" name="q1" value="D"> Electrical Work</label>
</div>


<div class="question">
<h3>2. The main source of water is</h3>

<label><input type="radio" name="q2" value="A"> Surface and Ground Water</label>
<label><input type="radio" name="q2" value="B"> Plastic</label>
<label><input type="radio" name="q2" value="C"> Steel</label>
<label><input type="radio" name="q2" value="D"> Cement</label>
</div>


<div class="question">
<h3>3. Water treatment removes</h3>

<label><input type="radio" name="q3" value="A"> Colour Only</label>
<label><input type="radio" name="q3" value="B"> Heat</label>
<label><input type="radio" name="q3" value="C"> Impurities</label>
<label><input type="radio" name="q3" value="D"> Strength</label>
</div>


<div class="question">
<h3>4. Sewage means</h3>

<label><input type="radio" name="q4" value="A"> Fresh Water</label>
<label><input type="radio" name="q4" value="B"> Rain Water</label>
<label><input type="radio" name="q4" value="C"> Drinking Water</label>
<label><input type="radio" name="q4" value="D"> Waste Water</label>
</div>


<div class="question">
<h3>5. Chlorination is used for</h3>

<label><input type="radio" name="q5" value="A"> Disinfection of Water</label>
<label><input type="radio" name="q5" value="B"> Heating Water</label>
<label><input type="radio" name="q5" value="C"> Colouring Water</label>
<label><input type="radio" name="q5" value="D"> Cooling Water</label>
</div>


<div class="question">
<h3>6. Pipe used for water supply is</h3>

<label><input type="radio" name="q6" value="A"> Glass Pipe</label>
<label><input type="radio" name="q6" value="B"> Water Supply Pipe</label>
<label><input type="radio" name="q6" value="C"> Wood Pipe</label>
<label><input type="radio" name="q6" value="D"> Brick Pipe</label>
</div>


<div class="question">
<h3>7. Septic tank is used for</h3>

<label><input type="radio" name="q7" value="A"> Water Storage</label>
<label><input type="radio" name="q7" value="B"> Road Work</label>
<label><input type="radio" name="q7" value="C"> Sewage Treatment</label>
<label><input type="radio" name="q7" value="D"> Building Work</label>
</div>


<div class="question">
<h3>8. Rainwater harvesting is used for</h3>

<label><input type="radio" name="q8" value="A"> Water Conservation</label>
<label><input type="radio" name="q8" value="B"> Pollution</label>
<label><input type="radio" name="q8" value="C"> Heating</label>
<label><input type="radio" name="q8" value="D"> Construction</label>
</div>


<div class="question">
<h3>9. Sewer carries</h3>

<label><input type="radio" name="q9" value="A"> Drinking Water</label>
<label><input type="radio" name="q9" value="B"> Rain Water</label>
<label><input type="radio" name="q9" value="C"> Pure Water</label>
<label><input type="radio" name="q9" value="D"> Waste Water</label>
</div>


<div class="question">
<h3>10. Water demand depends on</h3>

<label><input type="radio" name="q10" value="A"> Colour</label>
<label><input type="radio" name="q10" value="B"> Population</label>
<label><input type="radio" name="q10" value="C"> Building Height</label>
<label><input type="radio" name="q10" value="D"> Road Length</label>
</div>


<div class="question">
<h3>11. Filtration removes</h3>

<label><input type="radio" name="q11" value="A"> Suspended Impurities</label>
<label><input type="radio" name="q11" value="B"> Cement</label>
<label><input type="radio" name="q11" value="C"> Steel</label>
<label><input type="radio" name="q11" value="D"> Sand</label>
</div>


<div class="question">
<h3>12. Manhole is provided in</h3>

<label><input type="radio" name="q12" value="A"> Road</label>
<label><input type="radio" name="q12" value="B"> Building</label>
<label><input type="radio" name="q12" value="C"> Sewer Line</label>
<label><input type="radio" name="q12" value="D"> Roof</label>
</div>


<div class="question">
<h3>13. BOD stands for</h3>

<label><input type="radio" name="q13" value="A"> Basic Oxygen Demand</label>
<label><input type="radio" name="q13" value="B"> Biochemical Oxygen Demand</label>
<label><input type="radio" name="q13" value="C"> Building Oxygen Design</label>
<label><input type="radio" name="q13" value="D"> Water Demand</label>
</div>


<div class="question">
<h3>14. Water pollution is caused by</h3>

<label><input type="radio" name="q14" value="A"> Waste Disposal</label>
<label><input type="radio" name="q14" value="B"> Clean Water</label>
<label><input type="radio" name="q14" value="C"> Rain</label>
<label><input type="radio" name="q14" value="D"> Air</label>
</div>


<div class="question">
<h3>15. Pump is used for</h3>

<label><input type="radio" name="q15" value="A"> Decoration</label>
<label><input type="radio" name="q15" value="B"> Painting</label>
<label><input type="radio" name="q15" value="C"> Heating</label>
<label><input type="radio" name="q15" value="D"> Water Lifting</label>
</div>


<div class="question">
<h3>16. Primary treatment is related to</h3>

<label><input type="radio" name="q16" value="A"> Roads</label>
<label><input type="radio" name="q16" value="B"> Buildings</label>
<label><input type="radio" name="q16" value="C"> Sewage Treatment</label>
<label><input type="radio" name="q16" value="D"> Bridges</label>
</div>


<div class="question">
<h3>17. Drinking water should be</h3>

<label><input type="radio" name="q17" value="A"> Safe and Clean</label>
<label><input type="radio" name="q17" value="B"> Dirty</label>
<label><input type="radio" name="q17" value="C"> Salty</label>
<label><input type="radio" name="q17" value="D"> Polluted</label>
</div>


<div class="question">
<h3>18. Sewerage system helps in</h3>

<label><input type="radio" name="q18" value="A"> Construction</label>
<label><input type="radio" name="q18" value="B"> Waste Disposal</label>
<label><input type="radio" name="q18" value="C"> Painting</label>
<label><input type="radio" name="q18" value="D"> Decoration</label>
</div>


<div class="question">
<h3>19. Water quality is tested by</h3>

<label><input type="radio" name="q19" value="A"> Colour</label>
<label><input type="radio" name="q19" value="B"> Weight</label>
<label><input type="radio" name="q19" value="C"> Height</label>
<label><input type="radio" name="q19" value="D"> Laboratory Testing</label>
</div>


<div class="question">
<h3>20. Public Health Engineering improves</h3>

<label><input type="radio" name="q20" value="A"> Public Health</label>
<label><input type="radio" name="q20" value="B"> Building Height</label>
<label><input type="radio" name="q20" value="C"> Road Speed</label>
<label><input type="radio" name="q20" value="D"> Decoration</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>