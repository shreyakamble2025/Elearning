<?php
session_start();

$_SESSION['subject'] = "Design of Steel Structure";
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

<title>Design of Steel Structure Quiz - LearnHub</title>


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
Semester 3 - Design of Steel Structure Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Steel structures are mainly designed using</h3>

<label><input type="radio" name="q1" value="A"> Timber Code</label>
<label><input type="radio" name="q1" value="B"> Steel Design Principles</label>
<label><input type="radio" name="q1" value="C"> Water Supply Rules</label>
<label><input type="radio" name="q1" value="D"> Road Rules</label>
</div>


<div class="question">
<h3>2. Steel is preferred in structures because of</h3>

<label><input type="radio" name="q2" value="A"> High Strength</label>
<label><input type="radio" name="q2" value="B"> Low Strength</label>
<label><input type="radio" name="q2" value="C"> Heavy Weight</label>
<label><input type="radio" name="q2" value="D"> Colour</label>
</div>


<div class="question">
<h3>3. The member carrying axial tension is called</h3>

<label><input type="radio" name="q3" value="A"> Column</label>
<label><input type="radio" name="q3" value="B"> Beam</label>
<label><input type="radio" name="q3" value="C"> Tension Member</label>
<label><input type="radio" name="q3" value="D"> Slab</label>
</div>


<div class="question">
<h3>4. IS 800 code is related to</h3>

<label><input type="radio" name="q4" value="A"> Concrete Design</label>
<label><input type="radio" name="q4" value="B"> Highway Design</label>
<label><input type="radio" name="q4" value="C"> Water Supply</label>
<label><input type="radio" name="q4" value="D"> Steel Design</label>
</div>


<div class="question">
<h3>5. Steel sections are connected by</h3>

<label><input type="radio" name="q5" value="A"> Bolts and Welding</label>
<label><input type="radio" name="q5" value="B"> Paint</label>
<label><input type="radio" name="q5" value="C"> Cement</label>
<label><input type="radio" name="q5" value="D"> Glass</label>
</div>


<div class="question">
<h3>6. Riveting is a method of</h3>

<label><input type="radio" name="q6" value="A"> Painting</label>
<label><input type="radio" name="q6" value="B"> Joining Steel Members</label>
<label><input type="radio" name="q6" value="C"> Cutting Steel</label>
<label><input type="radio" name="q6" value="D"> Testing Soil</label>
</div>


<div class="question">
<h3>7. Column in steel structure carries</h3>

<label><input type="radio" name="q7" value="A"> Water Load</label>
<label><input type="radio" name="q7" value="B"> Wind Load</label>
<label><input type="radio" name="q7" value="C"> Compressive Load</label>
<label><input type="radio" name="q7" value="D"> Heat Load</label>
</div>


<div class="question">
<h3>8. Beam is mainly subjected to</h3>

<label><input type="radio" name="q8" value="A"> Bending</label>
<label><input type="radio" name="q8" value="B"> Painting</label>
<label><input type="radio" name="q8" value="C"> Heating</label>
<label><input type="radio" name="q8" value="D"> Cooling</label>
</div>


<div class="question">
<h3>9. Welding is a process of</h3>

<label><input type="radio" name="q9" value="A"> Cutting Material</label>
<label><input type="radio" name="q9" value="B"> Painting</label>
<label><input type="radio" name="q9" value="C"> Testing</label>
<label><input type="radio" name="q9" value="D"> Joining Metals</label>
</div>


<div class="question">
<h3>10. Load carrying capacity depends on</h3>

<label><input type="radio" name="q10" value="A"> Colour</label>
<label><input type="radio" name="q10" value="B"> Section Properties</label>
<label><input type="radio" name="q10" value="C"> Height Only</label>
<label><input type="radio" name="q10" value="D"> Decoration</label>
</div>


<div class="question">
<h3>11. Buckling occurs in</h3>

<label><input type="radio" name="q11" value="A"> Compression Members</label>
<label><input type="radio" name="q11" value="B"> Paint</label>
<label><input type="radio" name="q11" value="C"> Bricks</label>
<label><input type="radio" name="q11" value="D"> Glass</label>
</div>


<div class="question">
<h3>12. Plate girder is used for</h3>

<label><input type="radio" name="q12" value="A"> Small Loads</label>
<label><input type="radio" name="q12" value="B"> Decoration</label>
<label><input type="radio" name="q12" value="C"> Heavy Loads</label>
<label><input type="radio" name="q12" value="D"> Water Storage</label>
</div>


<div class="question">
<h3>13. Gusset plate is used in</h3>

<label><input type="radio" name="q13" value="A"> Buildings</label>
<label><input type="radio" name="q13" value="B"> Truss Connection</label>
<label><input type="radio" name="q13" value="C"> Roads</label>
<label><input type="radio" name="q13" value="D"> Foundations</label>
</div>


<div class="question">
<h3>14. Steel structures require protection from</h3>

<label><input type="radio" name="q14" value="A"> Corrosion</label>
<label><input type="radio" name="q14" value="B"> Water Supply</label>
<label><input type="radio" name="q14" value="C"> Soil</label>
<label><input type="radio" name="q14" value="D"> Light</label>
</div>


<div class="question">
<h3>15. Truss is mainly used for</h3>

<label><input type="radio" name="q15" value="A"> Flooring</label>
<label><input type="radio" name="q15" value="B"> Painting</label>
<label><input type="radio" name="q15" value="C"> Walls</label>
<label><input type="radio" name="q15" value="D"> Roof Structures</label>
</div>


<div class="question">
<h3>16. Factor of safety is used for</h3>

<label><input type="radio" name="q16" value="A"> Decoration</label>
<label><input type="radio" name="q16" value="B"> Colour</label>
<label><input type="radio" name="q16" value="C"> Safe Design</label>
<label><input type="radio" name="q16" value="D"> Cost Increase</label>
</div>


<div class="question">
<h3>17. Mild steel contains</h3>

<label><input type="radio" name="q17" value="A"> Low Carbon</label>
<label><input type="radio" name="q17" value="B"> High Cement</label>
<label><input type="radio" name="q17" value="C"> Plastic</label>
<label><input type="radio" name="q17" value="D"> Glass</label>
</div>


<div class="question">
<h3>18. Structural steel is used in</h3>

<label><input type="radio" name="q18" value="A"> Painting</label>
<label><input type="radio" name="q18" value="B"> Bridges and Buildings</label>
<label><input type="radio" name="q18" value="C"> Water Tanks Only</label>
<label><input type="radio" name="q18" value="D"> Roads Only</label>
</div>


<div class="question">
<h3>19. Steel design considers</h3>

<label><input type="radio" name="q19" value="A"> Colour</label>
<label><input type="radio" name="q19" value="B"> Shape</label>
<label><input type="radio" name="q19" value="C"> Height</label>
<label><input type="radio" name="q19" value="D"> Strength and Stability</label>
</div>


<div class="question">
<h3>20. Steel structure design ensures</h3>

<label><input type="radio" name="q20" value="A"> Safety and Economy</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Colour Selection</label>
<label><input type="radio" name="q20" value="D"> Weight Increase</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>

</body>

</html>