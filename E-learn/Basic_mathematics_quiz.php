<?php
session_start();

$_SESSION['subject'] = "Basic Mathematics";
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

<title>Basic Mathematics Quiz - LearnHub</title>


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
Semester 1 - Basic Mathematics Quiz
</h1>


<div class="card">


<form action="result.php" method="post">


<div class="question">
<h3>1. Value of 5 + 7 is</h3>
<label><input type="radio" name="q1" value="A"> 10</label>
<label><input type="radio" name="q1" value="B"> 12</label>
<label><input type="radio" name="q1" value="C"> 15</label>
<label><input type="radio" name="q1" value="D"> 20</label>
</div>


<div class="question">
<h3>2. Square of 5 is</h3>
<label><input type="radio" name="q2" value="A"> 10</label>
<label><input type="radio" name="q2" value="B"> 15</label>
<label><input type="radio" name="q2" value="C"> 25</label>
<label><input type="radio" name="q2" value="D"> 30</label>
</div>


<div class="question">
<h3>3. Value of 10 × 10 is</h3>
<label><input type="radio" name="q3" value="A"> 100</label>
<label><input type="radio" name="q3" value="B"> 50</label>
<label><input type="radio" name="q3" value="C"> 20</label>
<label><input type="radio" name="q3" value="D"> 10</label>
</div>


<div class="question">
<h3>4. Value of √81 is</h3>
<label><input type="radio" name="q4" value="A"> 7</label>
<label><input type="radio" name="q4" value="B"> 8</label>
<label><input type="radio" name="q4" value="C"> 10</label>
<label><input type="radio" name="q4" value="D"> 9</label>
</div>


<div class="question">
<h3>5. Value of 15 + 25 is</h3>
<label><input type="radio" name="q5" value="A"> 40</label>
<label><input type="radio" name="q5" value="B"> 35</label>
<label><input type="radio" name="q5" value="C"> 45</label>
<label><input type="radio" name="q5" value="D"> 50</label>
</div>


<div class="question">
<h3>6. Formula of Area of Circle is</h3>
<label><input type="radio" name="q6" value="A"> 2πr</label>
<label><input type="radio" name="q6" value="B"> πr²</label>
<label><input type="radio" name="q6" value="C"> r²</label>
<label><input type="radio" name="q6" value="D"> πd</label>
</div>


<div class="question">
<h3>7. Value of 20 ÷ 4 is</h3>
<label><input type="radio" name="q7" value="A"> 2</label>
<label><input type="radio" name="q7" value="B"> 4</label>
<label><input type="radio" name="q7" value="C"> 5</label>
<label><input type="radio" name="q7" value="D"> 10</label>
</div>


<div class="question">
<h3>8. A triangle has how many sides?</h3>
<label><input type="radio" name="q8" value="A"> 3</label>
<label><input type="radio" name="q8" value="B"> 4</label>
<label><input type="radio" name="q8" value="C"> 5</label>
<label><input type="radio" name="q8" value="D"> 6</label>
</div>


<div class="question">
<h3>9. Value of 2³ is</h3>
<label><input type="radio" name="q9" value="A"> 4</label>
<label><input type="radio" name="q9" value="B"> 6</label>
<label><input type="radio" name="q9" value="C"> 9</label>
<label><input type="radio" name="q9" value="D"> 8</label>
</div>


<div class="question">
<h3>10. 1 Kilometer equals</h3>
<label><input type="radio" name="q10" value="A"> 100 m</label>
<label><input type="radio" name="q10" value="B"> 1000 m</label>
<label><input type="radio" name="q10" value="C"> 10 m</label>
<label><input type="radio" name="q10" value="D"> 500 m</label>
</div>


<div class="question">
<h3>11. Value of 9 × 9 is</h3>
<label><input type="radio" name="q11" value="A"> 81</label>
<label><input type="radio" name="q11" value="B"> 72</label>
<label><input type="radio" name="q11" value="C"> 91</label>
<label><input type="radio" name="q11" value="D"> 99</label>
</div>


<div class="question">
<h3>12. Perimeter of square formula is</h3>
<label><input type="radio" name="q12" value="A"> a²</label>
<label><input type="radio" name="q12" value="B"> πr²</label>
<label><input type="radio" name="q12" value="C"> 4a</label>
<label><input type="radio" name="q12" value="D"> 2πr</label>
</div>


<div class="question">
<h3>13. Value of 100 ÷ 10 is</h3>
<label><input type="radio" name="q13" value="A"> 5</label>
<label><input type="radio" name="q13" value="B"> 10</label>
<label><input type="radio" name="q13" value="C"> 20</label>
<label><input type="radio" name="q13" value="D"> 50</label>
</div>


<div class="question">
<h3>14. A straight angle is</h3>
<label><input type="radio" name="q14" value="A"> 180°</label>
<label><input type="radio" name="q14" value="B"> 90°</label>
<label><input type="radio" name="q14" value="C"> 45°</label>
<label><input type="radio" name="q14" value="D"> 360°</label>
</div>


<div class="question">
<h3>15. Value of 12² is</h3>
<label><input type="radio" name="q15" value="A"> 122</label>
<label><input type="radio" name="q15" value="B"> 124</label>
<label><input type="radio" name="q15" value="C"> 100</label>
<label><input type="radio" name="q15" value="D"> 144</label>
</div>


<div class="question">
<h3>16. Formula of Speed is</h3>
<label><input type="radio" name="q16" value="A"> Time/Distance</label>
<label><input type="radio" name="q16" value="B"> Distance×Time</label>
<label><input type="radio" name="q16" value="C"> Distance/Time</label>
<label><input type="radio" name="q16" value="D"> Distance-Time</label>
</div>


<div class="question">
<h3>17. Value of π is approximately</h3>
<label><input type="radio" name="q17" value="A"> 3.14</label>
<label><input type="radio" name="q17" value="B"> 2.14</label>
<label><input type="radio" name="q17" value="C"> 4.14</label>
<label><input type="radio" name="q17" value="D"> 5.14</label>
</div>


<div class="question">
<h3>18. Cube of 3 is</h3>
<label><input type="radio" name="q18" value="A"> 6</label>
<label><input type="radio" name="q18" value="B"> 27</label>
<label><input type="radio" name="q18" value="C"> 9</label>
<label><input type="radio" name="q18" value="D"> 12</label>
</div>


<div class="question">
<h3>19. 50% means</h3>
<label><input type="radio" name="q19" value="A"> One fourth</label>
<label><input type="radio" name="q19" value="B"> Three fourth</label>
<label><input type="radio" name="q19" value="C"> Full</label>
<label><input type="radio" name="q19" value="D"> Half</label>
</div>


<div class="question">
<h3>20. Formula of Simple Interest is</h3>
<label><input type="radio" name="q20" value="A"> PRT/100</label>
<label><input type="radio" name="q20" value="B"> P+R+T</label>
<label><input type="radio" name="q20" value="C"> PRT</label>
<label><input type="radio" name="q20" value="D"> P/R/T</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>
</html>