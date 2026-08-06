<?php
session_start();

$_SESSION['subject'] = "Applied Mathematics";
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

<title>Applied Mathematics Quiz - LearnHub</title>


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
border:none;
border-radius:30px;
background:#0d6efd;
color:white;
font-size:18px;
cursor:pointer;

}


</style>


</head>


<body>


<div class="container">


<h1 class="heading">
Semester 1 - Applied Mathematics Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Derivative of x² is</h3>

<label>
<input type="radio" name="q1" value="A"> x
</label>

<label>
<input type="radio" name="q1" value="B"> 2x
</label>

<label>
<input type="radio" name="q1" value="C"> x²
</label>

<label>
<input type="radio" name="q1" value="D"> 2
</label>

</div>



<div class="question">

<h3>2. Integral of 1/x is</h3>

<label>
<input type="radio" name="q2" value="A"> x
</label>

<label>
<input type="radio" name="q2" value="B"> x²
</label>

<label>
<input type="radio" name="q2" value="C"> log x
</label>

<label>
<input type="radio" name="q2" value="D"> 1
</label>

</div>



<div class="question">

<h3>3. Value of sin 90° is</h3>

<label>
<input type="radio" name="q3" value="A"> 1
</label>

<label>
<input type="radio" name="q3" value="B"> 0
</label>

<label>
<input type="radio" name="q3" value="C"> -1
</label>

<label>
<input type="radio" name="q3" value="D"> 1/2
</label>

</div>



<div class="question">

<h3>4. Value of cos 0° is</h3>

<label>
<input type="radio" name="q4" value="A"> 0
</label>

<label>
<input type="radio" name="q4" value="B"> -1
</label>

<label>
<input type="radio" name="q4" value="C"> 1/2
</label>

<label>
<input type="radio" name="q4" value="D"> 1
</label>

</div>



<div class="question">

<h3>5. Matrix is an arrangement of</h3>

<label>
<input type="radio" name="q5" value="A"> Numbers
</label>

<label>
<input type="radio" name="q5" value="B"> Words
</label>

<label>
<input type="radio" name="q5" value="C"> Images
</label>

<label>
<input type="radio" name="q5" value="D"> Symbols only
</label>

</div>



<div class="question">

<h3>6. Value of π is approximately</h3>

<label>
<input type="radio" name="q6" value="A"> 2.14
</label>

<label>
<input type="radio" name="q6" value="B"> 3.14
</label>

<label>
<input type="radio" name="q6" value="C"> 4.14
</label>

<label>
<input type="radio" name="q6" value="D"> 5.14
</label>

</div>



<div class="question">

<h3>7. Slope of straight line is</h3>

<label>
<input type="radio" name="q7" value="A"> x+y
</label>

<label>
<input type="radio" name="q7" value="B"> xy
</label>

<label>
<input type="radio" name="q7" value="C"> m
</label>

<label>
<input type="radio" name="q7" value="D"> 1/m
</label>

</div>



<div class="question">

<h3>8. Formula of simple interest is</h3>

<label>
<input type="radio" name="q8" value="A"> PRT/100
</label>

<label>
<input type="radio" name="q8" value="B"> PR+T
</label>

<label>
<input type="radio" name="q8" value="C"> P+R+T
</label>

<label>
<input type="radio" name="q8" value="D"> PRT
</label>

</div>



<div class="question">

<h3>9. Determinant belongs to</h3>

<label>
<input type="radio" name="q9" value="A"> Algebra
</label>

<label>
<input type="radio" name="q9" value="B"> Geometry
</label>

<label>
<input type="radio" name="q9" value="C"> Statistics
</label>

<label>
<input type="radio" name="q9" value="D"> Matrix
</label>

</div>



<div class="question">

<h3>10. Equation of line is</h3>

<label>
<input type="radio" name="q10" value="A"> x²+y²
</label>

<label>
<input type="radio" name="q10" value="B"> y=mx+c
</label>

<label>
<input type="radio" name="q10" value="C"> a²+b²
</label>

<label>
<input type="radio" name="q10" value="D"> log x
</label>

</div>

<div class="question">

<h3>11. Derivative of sin x is</h3>

<label>
<input type="radio" name="q11" value="A">
cos x
</label>

<label>
<input type="radio" name="q11" value="B">
sin x
</label>

<label>
<input type="radio" name="q11" value="C">
tan x
</label>

<label>
<input type="radio" name="q11" value="D">
x
</label>

</div>



<div class="question">

<h3>12. Integration is opposite of</h3>

<label>
<input type="radio" name="q12" value="A">
Addition
</label>

<label>
<input type="radio" name="q12" value="B">
Multiplication
</label>

<label>
<input type="radio" name="q12" value="C">
Differentiation
</label>

<label>
<input type="radio" name="q12" value="D">
Division
</label>

</div>



<div class="question">

<h3>13. Value of cos 90° is</h3>

<label>
<input type="radio" name="q13" value="A">
1
</label>

<label>
<input type="radio" name="q13" value="B">
0
</label>

<label>
<input type="radio" name="q13" value="C">
-1
</label>

<label>
<input type="radio" name="q13" value="D">
1/2
</label>

</div>



<div class="question">

<h3>14. Quadratic equation has degree</h3>

<label>
<input type="radio" name="q14" value="A">
2
</label>

<label>
<input type="radio" name="q14" value="B">
1
</label>

<label>
<input type="radio" name="q14" value="C">
3
</label>

<label>
<input type="radio" name="q14" value="D">
4
</label>

</div>



<div class="question">

<h3>15. log(1) value is</h3>

<label>
<input type="radio" name="q15" value="A">
1
</label>

<label>
<input type="radio" name="q15" value="B">
10
</label>

<label>
<input type="radio" name="q15" value="C">
-1
</label>

<label>
<input type="radio" name="q15" value="D">
0
</label>

</div>



<div class="question">

<h3>16. Area of rectangle is</h3>

<label>
<input type="radio" name="q16" value="A">
2(l+b)
</label>

<label>
<input type="radio" name="q16" value="B">
l+b
</label>

<label>
<input type="radio" name="q16" value="C">
l × b
</label>

<label>
<input type="radio" name="q16" value="D">
l²
</label>

</div>



<div class="question">

<h3>17. Probability value lies between</h3>

<label>
<input type="radio" name="q17" value="A">
0 and 1
</label>

<label>
<input type="radio" name="q17" value="B">
1 and 2
</label>

<label>
<input type="radio" name="q17" value="C">
-1 and 0
</label>

<label>
<input type="radio" name="q17" value="D">
2 and 3
</label>

</div>



<div class="question">

<h3>18. Average formula is</h3>

<label>
<input type="radio" name="q18" value="A">
Sum × Number
</label>

<label>
<input type="radio" name="q18" value="B">
Sum / Number
</label>

<label>
<input type="radio" name="q18" value="C">
Number / Sum
</label>

<label>
<input type="radio" name="q18" value="D">
Sum - Number
</label>

</div>



<div class="question">

<h3>19. A vector has</h3>

<label>
<input type="radio" name="q19" value="A">
Only magnitude
</label>

<label>
<input type="radio" name="q19" value="B">
Only direction
</label>

<label>
<input type="radio" name="q19" value="C">
No value
</label>

<label>
<input type="radio" name="q19" value="D">
Magnitude and Direction
</label>

</div>



<div class="question">

<h3>20. Formula of distance is</h3>

<label>
<input type="radio" name="q20" value="A">
Speed × Time
</label>

<label>
<input type="radio" name="q20" value="B">
Speed / Time
</label>

<label>
<input type="radio" name="q20" value="C">
Time / Speed
</label>

<label>
<input type="radio" name="q20" value="D">
Distance / Time
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>