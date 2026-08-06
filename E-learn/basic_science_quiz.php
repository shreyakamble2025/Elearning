<?php
session_start();

$_SESSION['subject'] = "Basic Science";
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

<title>Basic Science Quiz - LearnHub</title>

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
cursor:pointer;

}


input[type="radio"]{

margin-right:8px;

}


.submit{

width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#0d6efd;
color:white;
font-size:18px;
cursor:pointer;

}


.submit:hover{

background:#2563eb;

}


</style>

</head>


<body>


<div class="container">


<h1 class="heading">
Semester 1 - Basic Science Quiz
</h1>


<div class="card">


<form action="result.php" method="post">



<div class="question">

<h3>1. Physics is the study of</h3>

<label>
<input type="radio" name="q1" value="A">
Plants
</label>

<label>
<input type="radio" name="q1" value="B">
Matter and Energy
</label>

<label>
<input type="radio" name="q1" value="C">
Animals
</label>

<label>
<input type="radio" name="q1" value="D">
Cells
</label>

</div>




<div class="question">

<h3>2. SI unit of Force is</h3>

<label>
<input type="radio" name="q2" value="A">
Joule
</label>

<label>
<input type="radio" name="q2" value="B">
Watt
</label>

<label>
<input type="radio" name="q2" value="C">
Newton
</label>

<label>
<input type="radio" name="q2" value="D">
Volt
</label>

</div>




<div class="question">

<h3>3. Smallest unit of life is</h3>

<label>
<input type="radio" name="q3" value="A">
Cell
</label>

<label>
<input type="radio" name="q3" value="B">
Tissue
</label>

<label>
<input type="radio" name="q3" value="C">
Organ
</label>

<label>
<input type="radio" name="q3" value="D">
Atom
</label>

</div>




<div class="question">

<h3>4. Chemical symbol of Oxygen is</h3>

<label>
<input type="radio" name="q4" value="A">
H
</label>

<label>
<input type="radio" name="q4" value="B">
N
</label>

<label>
<input type="radio" name="q4" value="C">
C
</label>

<label>
<input type="radio" name="q4" value="D">
O
</label>

</div>




<div class="question">

<h3>5. Human heart has how many chambers?</h3>

<label>
<input type="radio" name="q5" value="A">
Four
</label>

<label>
<input type="radio" name="q5" value="B">
Two
</label>

<label>
<input type="radio" name="q5" value="C">
Three
</label>

<label>
<input type="radio" name="q5" value="D">
Five
</label>

</div>




<div class="question">

<h3>6. Water chemical formula is</h3>

<label>
<input type="radio" name="q6" value="A">
CO2
</label>

<label>
<input type="radio" name="q6" value="B">
H2O
</label>

<label>
<input type="radio" name="q6" value="C">
O2
</label>

<label>
<input type="radio" name="q6" value="D">
NaCl
</label>

</div>




<div class="question">

<h3>7. Speed of light is approximately</h3>

<label>
<input type="radio" name="q7" value="A">
3×10² m/s
</label>

<label>
<input type="radio" name="q7" value="B">
3×10⁴ m/s
</label>

<label>
<input type="radio" name="q7" value="C">
3×10⁸ m/s
</label>

<label>
<input type="radio" name="q7" value="D">
3×10¹² m/s
</label>

</div>




<div class="question">

<h3>8. Atomic number represents number of</h3>

<label>
<input type="radio" name="q8" value="A">
Protons
</label>

<label>
<input type="radio" name="q8" value="B">
Neutrons
</label>

<label>
<input type="radio" name="q8" value="C">
Electrons
</label>

<label>
<input type="radio" name="q8" value="D">
Molecules
</label>

</div>




<div class="question">

<h3>9. Vitamin C is found in</h3>

<label>
<input type="radio" name="q9" value="A">
Rice
</label>

<label>
<input type="radio" name="q9" value="B">
Milk
</label>

<label>
<input type="radio" name="q9" value="C">
Meat
</label>

<label>
<input type="radio" name="q9" value="D">
Citrus Fruits
</label>

</div>




<div class="question">

<h3>10. Force formula is</h3>

<label>
<input type="radio" name="q10" value="A">
Mass / Acceleration
</label>

<label>
<input type="radio" name="q10" value="B">
Mass × Acceleration
</label>

<label>
<input type="radio" name="q10" value="C">
Distance / Time
</label>

<label>
<input type="radio" name="q10" value="D">
Work / Time
</label>

</div>

<div class="question">

<h3>11. Unit of Power is</h3>

<label>
<input type="radio" name="q11" value="A">
Watt
</label>

<label>
<input type="radio" name="q11" value="B">
Newton
</label>

<label>
<input type="radio" name="q11" value="C">
Pascal
</label>

<label>
<input type="radio" name="q11" value="D">
Joule
</label>

</div>



<div class="question">

<h3>12. Plants prepare food by</h3>

<label>
<input type="radio" name="q12" value="A">
Respiration
</label>

<label>
<input type="radio" name="q12" value="B">
Digestion
</label>

<label>
<input type="radio" name="q12" value="C">
Photosynthesis
</label>

<label>
<input type="radio" name="q12" value="D">
Evaporation
</label>

</div>



<div class="question">

<h3>13. Acid turns blue litmus paper into</h3>

<label>
<input type="radio" name="q13" value="A">
Green
</label>

<label>
<input type="radio" name="q13" value="B">
Red
</label>

<label>
<input type="radio" name="q13" value="C">
Yellow
</label>

<label>
<input type="radio" name="q13" value="D">
Black
</label>

</div>



<div class="question">

<h3>14. Earth revolves around</h3>

<label>
<input type="radio" name="q14" value="A">
Sun
</label>

<label>
<input type="radio" name="q14" value="B">
Moon
</label>

<label>
<input type="radio" name="q14" value="C">
Mars
</label>

<label>
<input type="radio" name="q14" value="D">
Jupiter
</label>

</div>



<div class="question">

<h3>15. Normal human body temperature is</h3>

<label>
<input type="radio" name="q15" value="A">
20°C
</label>

<label>
<input type="radio" name="q15" value="B">
50°C
</label>

<label>
<input type="radio" name="q15" value="C">
10°C
</label>

<label>
<input type="radio" name="q15" value="D">
37°C
</label>

</div>



<div class="question">

<h3>16. Basic unit of matter is</h3>

<label>
<input type="radio" name="q16" value="A">
Cell
</label>

<label>
<input type="radio" name="q16" value="B">
Tissue
</label>

<label>
<input type="radio" name="q16" value="C">
Atom
</label>

<label>
<input type="radio" name="q16" value="D">
Organ
</label>

</div>



<div class="question">

<h3>17. Renewable source of energy is</h3>

<label>
<input type="radio" name="q17" value="A">
Solar Energy
</label>

<label>
<input type="radio" name="q17" value="B">
Coal
</label>

<label>
<input type="radio" name="q17" value="C">
Petrol
</label>

<label>
<input type="radio" name="q17" value="D">
Diesel
</label>

</div>



<div class="question">

<h3>18. Boiling point of water is</h3>

<label>
<input type="radio" name="q18" value="A">
50°C
</label>

<label>
<input type="radio" name="q18" value="B">
100°C
</label>

<label>
<input type="radio" name="q18" value="C">
0°C
</label>

<label>
<input type="radio" name="q18" value="D">
200°C
</label>

</div>



<div class="question">

<h3>19. DNA is related to</h3>

<label>
<input type="radio" name="q19" value="A">
Physics
</label>

<label>
<input type="radio" name="q19" value="B">
Chemistry
</label>

<label>
<input type="radio" name="q19" value="C">
Energy
</label>

<label>
<input type="radio" name="q19" value="D">
Genetics
</label>

</div>



<div class="question">

<h3>20. Study of plants is called</h3>

<label>
<input type="radio" name="q20" value="A">
Botany
</label>

<label>
<input type="radio" name="q20" value="B">
Zoology
</label>

<label>
<input type="radio" name="q20" value="C">
Physics
</label>

<label>
<input type="radio" name="q20" value="D">
Chemistry
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>


</body>

</html>