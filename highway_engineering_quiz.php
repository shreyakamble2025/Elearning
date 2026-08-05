<?php
session_start();

$_SESSION['subject'] = "Highway Engineering";
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

<title>Highway Engineering Quiz - LearnHub</title>

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
Semester 3 - Highway Engineering Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Highway Engineering deals with</h3>

<label><input type="radio" name="q1" value="A"> Building Construction</label>
<label><input type="radio" name="q1" value="B"> Planning and Construction of Roads</label>
<label><input type="radio" name="q1" value="C"> Water Supply</label>
<label><input type="radio" name="q1" value="D"> Electrical Work</label>
</div>


<div class="question">
<h3>2. The main function of highway is</h3>

<label><input type="radio" name="q2" value="A"> Transportation</label>
<label><input type="radio" name="q2" value="B"> Decoration</label>
<label><input type="radio" name="q2" value="C"> Storage</label>
<label><input type="radio" name="q2" value="D"> Irrigation</label>
</div>


<div class="question">
<h3>3. The upper layer of pavement is called</h3>

<label><input type="radio" name="q3" value="A"> Subgrade</label>
<label><input type="radio" name="q3" value="B"> Base Course</label>
<label><input type="radio" name="q3" value="C"> Surface Course</label>
<label><input type="radio" name="q3" value="D"> Drainage Layer</label>
</div>


<div class="question">
<h3>4. Road pavement is provided for</h3>

<label><input type="radio" name="q4" value="A"> Decoration</label>
<label><input type="radio" name="q4" value="B"> Lighting</label>
<label><input type="radio" name="q4" value="C"> Water Storage</label>
<label><input type="radio" name="q4" value="D"> Safe Movement of Vehicles</label>
</div>


<div class="question">
<h3>5. WBM stands for</h3>

<label><input type="radio" name="q5" value="A"> Water Bound Macadam</label>
<label><input type="radio" name="q5" value="B"> Water Base Material</label>
<label><input type="radio" name="q5" value="C"> Wide Bitumen Method</label>
<label><input type="radio" name="q5" value="D"> Water Building Material</label>
</div>


<div class="question">
<h3>6. Bitumen is used in</h3>

<label><input type="radio" name="q6" value="A"> Cement Concrete</label>
<label><input type="radio" name="q6" value="B"> Flexible Pavement</label>
<label><input type="radio" name="q6" value="C"> Steel Structure</label>
<label><input type="radio" name="q6" value="D"> Building Walls</label>
</div>


<div class="question">
<h3>7. CBR test is used for</h3>

<label><input type="radio" name="q7" value="A"> Soil Colour</label>
<label><input type="radio" name="q7" value="B"> Water Quality</label>
<label><input type="radio" name="q7" value="C"> Pavement Design</label>
<label><input type="radio" name="q7" value="D"> Building Design</label>
</div>


<div class="question">
<h3>8. Road camber is provided for</h3>

<label><input type="radio" name="q8" value="A"> Drainage of Water</label>
<label><input type="radio" name="q8" value="B"> Decoration</label>
<label><input type="radio" name="q8" value="C"> Increasing Height</label>
<label><input type="radio" name="q8" value="D"> Parking</label>
</div>


<div class="question">
<h3>9. Flexible pavement uses</h3>

<label><input type="radio" name="q9" value="A"> Cement</label>
<label><input type="radio" name="q9" value="B"> Steel</label>
<label><input type="radio" name="q9" value="C"> Bricks</label>
<label><input type="radio" name="q9" value="D"> Bitumen</label>
</div>


<div class="question">
<h3>10. Highway alignment depends on</h3>

<label><input type="radio" name="q10" value="A"> Colour</label>
<label><input type="radio" name="q10" value="B"> Traffic and Terrain</label>
<label><input type="radio" name="q10" value="C"> Paint</label>
<label><input type="radio" name="q10" value="D"> Decoration</label>
</div>


<div class="question">
<h3>11. Traffic survey is conducted for</h3>

<label><input type="radio" name="q11" value="A"> Road Planning</label>
<label><input type="radio" name="q11" value="B"> Painting</label>
<label><input type="radio" name="q11" value="C"> Building Design</label>
<label><input type="radio" name="q11" value="D"> Water Supply</label>
</div>


<div class="question">
<h3>12. Median is provided on</h3>

<label><input type="radio" name="q12" value="A"> Footpath</label>
<label><input type="radio" name="q12" value="B"> Bridge</label>
<label><input type="radio" name="q12" value="C"> Divided Highway</label>
<label><input type="radio" name="q12" value="D"> Building</label>
</div>


<div class="question">
<h3>13. Road signs are used for</h3>

<label><input type="radio" name="q13" value="A"> Decoration</label>
<label><input type="radio" name="q13" value="B"> Traffic Control</label>
<label><input type="radio" name="q13" value="C"> Water Storage</label>
<label><input type="radio" name="q13" value="D"> Lighting</label>
</div>


<div class="question">
<h3>14. Highway drainage removes</h3>

<label><input type="radio" name="q14" value="A"> Rain Water</label>
<label><input type="radio" name="q14" value="B"> Soil</label>
<label><input type="radio" name="q14" value="C"> Cement</label>
<label><input type="radio" name="q14" value="D"> Steel</label>
</div>


<div class="question">
<h3>15. Superelevation is provided on</h3>

<label><input type="radio" name="q15" value="A"> Straight Road</label>
<label><input type="radio" name="q15" value="B"> Bridge</label>
<label><input type="radio" name="q15" value="C"> Footpath</label>
<label><input type="radio" name="q15" value="D"> Horizontal Curve</label>
</div>


<div class="question">
<h3>16. Road pavement consists of</h3>

<label><input type="radio" name="q16" value="A"> Roof</label>
<label><input type="radio" name="q16" value="B"> Wall</label>
<label><input type="radio" name="q16" value="C"> Layers of Materials</label>
<label><input type="radio" name="q16" value="D"> Doors</label>
</div>


<div class="question">
<h3>17. Rigid pavement is made of</h3>

<label><input type="radio" name="q17" value="A"> Cement Concrete</label>
<label><input type="radio" name="q17" value="B"> Bitumen</label>
<label><input type="radio" name="q17" value="C"> Sand</label>
<label><input type="radio" name="q17" value="D"> Wood</label>
</div>


<div class="question">
<h3>18. Shoulder is provided beside</h3>

<label><input type="radio" name="q18" value="A"> Building</label>
<label><input type="radio" name="q18" value="B"> Road Pavement</label>
<label><input type="radio" name="q18" value="C"> Bridge</label>
<label><input type="radio" name="q18" value="D"> Tunnel</label>
</div>


<div class="question">
<h3>19. Highway maintenance improves</h3>

<label><input type="radio" name="q19" value="A"> Colour</label>
<label><input type="radio" name="q19" value="B"> Height</label>
<label><input type="radio" name="q19" value="C"> Decoration</label>
<label><input type="radio" name="q19" value="D"> Road Life</label>
</div>


<div class="question">
<h3>20. Highway engineering improves</h3>

<label><input type="radio" name="q20" value="A"> Transportation System</label>
<label><input type="radio" name="q20" value="B"> Building Height</label>
<label><input type="radio" name="q20" value="C"> Decoration</label>
<label><input type="radio" name="q20" value="D"> Painting</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>