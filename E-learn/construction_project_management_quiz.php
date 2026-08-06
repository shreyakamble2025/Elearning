<?php
session_start();

$_SESSION['subject'] = "Construction Project Management";
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

<title>Construction Project Management Quiz - LearnHub</title>

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
Semester 3 - Construction Project Management Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Project management deals with</h3>

<label><input type="radio" name="q1" value="A"> Painting Work</label>
<label><input type="radio" name="q1" value="B"> Planning and Controlling Projects</label>
<label><input type="radio" name="q1" value="C"> Road Repair</label>
<label><input type="radio" name="q1" value="D"> Building Materials</label>

</div>


<div class="question">
<h3>2. Main objective of project management is</h3>

<label><input type="radio" name="q2" value="A"> Complete Project on Time and Budget</label>
<label><input type="radio" name="q2" value="B"> Decoration</label>
<label><input type="radio" name="q2" value="C"> Increase Cost</label>
<label><input type="radio" name="q2" value="D"> Reduce Quality</label>

</div>


<div class="question">
<h3>3. CPM stands for</h3>

<label><input type="radio" name="q3" value="A"> Construction Planning Method</label>
<label><input type="radio" name="q3" value="B"> Cost Planning Management</label>
<label><input type="radio" name="q3" value="C"> Critical Path Method</label>
<label><input type="radio" name="q3" value="D"> Concrete Project Method</label>

</div>


<div class="question">
<h3>4. PERT is used for</h3>

<label><input type="radio" name="q4" value="A"> Building Design</label>
<label><input type="radio" name="q4" value="B"> Material Testing</label>
<label><input type="radio" name="q4" value="C"> Road Construction</label>
<label><input type="radio" name="q4" value="D"> Project Scheduling</label>

</div>


<div class="question">
<h3>5. A project has three main constraints called</h3>

<label><input type="radio" name="q5" value="A"> Time, Cost and Quality</label>
<label><input type="radio" name="q5" value="B"> Colour, Shape and Size</label>
<label><input type="radio" name="q5" value="C"> Soil, Water and Air</label>
<label><input type="radio" name="q5" value="D"> Cement, Steel and Sand</label>

</div>


<div class="question">
<h3>6. Bar chart is also known as</h3>

<label><input type="radio" name="q6" value="A"> Flow Chart</label>
<label><input type="radio" name="q6" value="B"> Gantt Chart</label>
<label><input type="radio" name="q6" value="C"> Pie Chart</label>
<label><input type="radio" name="q6" value="D"> Design Chart</label>

</div>


<div class="question">
<h3>7. Estimation determines</h3>

<label><input type="radio" name="q7" value="A"> Colour</label>
<label><input type="radio" name="q7" value="B"> Shape</label>
<label><input type="radio" name="q7" value="C"> Project Cost</label>
<label><input type="radio" name="q7" value="D"> Height</label>

</div>


<div class="question">
<h3>8. Scheduling means</h3>

<label><input type="radio" name="q8" value="A"> Planning Project Activities</label>
<label><input type="radio" name="q8" value="B"> Painting</label>
<label><input type="radio" name="q8" value="C"> Demolition</label>
<label><input type="radio" name="q8" value="D"> Decoration</label>

</div>


<div class="question">
<h3>9. CPM network shows</h3>

<label><input type="radio" name="q9" value="A"> Materials</label>
<label><input type="radio" name="q9" value="B"> Cost</label>
<label><input type="radio" name="q9" value="C"> Labour</label>
<label><input type="radio" name="q9" value="D"> Project Activities</label>

</div>


<div class="question">
<h3>10. Resource management includes</h3>

<label><input type="radio" name="q10" value="A"> Decoration</label>
<label><input type="radio" name="q10" value="B"> Labour and Materials</label>
<label><input type="radio" name="q10" value="C"> Colour Selection</label>
<label><input type="radio" name="q10" value="D"> Building Height</label>

</div>


<div class="question">
<h3>11. Safety management reduces</h3>

<label><input type="radio" name="q11" value="A"> Accidents</label>
<label><input type="radio" name="q11" value="B"> Quality</label>
<label><input type="radio" name="q11" value="C"> Time</label>
<label><input type="radio" name="q11" value="D"> Cost</label>

</div>


<div class="question">
<h3>12. Tender is related to</h3>

<label><input type="radio" name="q12" value="A"> Painting</label>
<label><input type="radio" name="q12" value="B"> Design</label>
<label><input type="radio" name="q12" value="C"> Contract Work</label>
<label><input type="radio" name="q12" value="D"> Decoration</label>

</div>


<div class="question">
<h3>13. Quality control ensures</h3>

<label><input type="radio" name="q13" value="A"> Delay</label>
<label><input type="radio" name="q13" value="B"> Good Quality Work</label>
<label><input type="radio" name="q13" value="C"> Extra Cost</label>
<label><input type="radio" name="q13" value="D"> Waste</label>

</div>


<div class="question">
<h3>14. Construction manager controls</h3>

<label><input type="radio" name="q14" value="A"> Project Activities</label>
<label><input type="radio" name="q14" value="B"> Weather</label>
<label><input type="radio" name="q14" value="C"> Soil Colour</label>
<label><input type="radio" name="q14" value="D"> Decoration</label>

</div>


<div class="question">
<h3>15. Delay in project increases</h3>

<label><input type="radio" name="q15" value="A"> Quality</label>
<label><input type="radio" name="q15" value="B"> Safety</label>
<label><input type="radio" name="q15" value="C"> Efficiency</label>
<label><input type="radio" name="q15" value="D"> Cost</label>

</div>


<div class="question">
<h3>16. Inventory management controls</h3>

<label><input type="radio" name="q16" value="A"> Design</label>
<label><input type="radio" name="q16" value="B"> Labour</label>
<label><input type="radio" name="q16" value="C"> Materials</label>
<label><input type="radio" name="q16" value="D"> Buildings</label>

</div>


<div class="question">
<h3>17. Construction planning helps in</h3>

<label><input type="radio" name="q17" value="A"> Efficient Execution</label>
<label><input type="radio" name="q17" value="B"> Decoration</label>
<label><input type="radio" name="q17" value="C"> Painting</label>
<label><input type="radio" name="q17" value="D"> Storage</label>

</div>


<div class="question">
<h3>18. Project monitoring checks</h3>

<label><input type="radio" name="q18" value="A"> Colour</label>
<label><input type="radio" name="q18" value="B"> Progress</label>
<label><input type="radio" name="q18" value="C"> Height</label>
<label><input type="radio" name="q18" value="D"> Shape</label>

</div>


<div class="question">
<h3>19. Risk management identifies</h3>

<label><input type="radio" name="q19" value="A"> Materials</label>
<label><input type="radio" name="q19" value="B"> Labour</label>
<label><input type="radio" name="q19" value="C"> Cost</label>
<label><input type="radio" name="q19" value="D"> Project Risks</label>

</div>


<div class="question">
<h3>20. Successful project requires</h3>

<label><input type="radio" name="q20" value="A"> Proper Planning and Management</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Extra Cost</label>
<label><input type="radio" name="q20" value="D"> Delay</label>

</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>