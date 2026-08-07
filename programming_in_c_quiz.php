<?php
session_start();

$_SESSION['subject'] = "Programming in C";
$_SESSION['semester'] = "Semester 2";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'B',
6=>'A',
7=>'C',
8=>'D',
9=>'B',
10=>'A',
11=>'C',
12=>'B',
13=>'D',
14=>'A',
15=>'B',
16=>'C',
17=>'A',
18=>'D',
19=>'B',
20=>'C'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Programming in C Quiz - LearnHub</title>

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
Semester 2 - Programming in C Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Who developed C language?</h3>
<label><input type="radio" name="q1" value="A"> James Gosling</label>
<label><input type="radio" name="q1" value="B"> Dennis Ritchie</label>
<label><input type="radio" name="q1" value="C"> Bjarne Stroustrup</label>
<label><input type="radio" name="q1" value="D"> Guido van Rossum</label>
</div>

<div class="question">
<h3>2. Which symbol is used to end a statement in C?</h3>
<label><input type="radio" name="q2" value="A"> ;</label>
<label><input type="radio" name="q2" value="B"> :</label>
<label><input type="radio" name="q2" value="C"> ,</label>
<label><input type="radio" name="q2" value="D"> .</label>
</div>

<div class="question">
<h3>3. Which header file is used for printf()?</h3>
<label><input type="radio" name="q3" value="A"> conio.h</label>
<label><input type="radio" name="q3" value="B"> math.h</label>
<label><input type="radio" name="q3" value="C"> stdio.h</label>
<label><input type="radio" name="q3" value="D"> string.h</label>
</div>

<div class="question">
<h3>4. Which of the following is not a data type in C?</h3>
<label><input type="radio" name="q4" value="A"> int</label>
<label><input type="radio" name="q4" value="B"> float</label>
<label><input type="radio" name="q4" value="C"> char</label>
<label><input type="radio" name="q4" value="D"> real</label>
</div>

<div class="question">
<h3>5. Which function is used to read input?</h3>
<label><input type="radio" name="q5" value="A"> printf()</label>
<label><input type="radio" name="q5" value="B"> scanf()</label>
<label><input type="radio" name="q5" value="C"> gets()</label>
<label><input type="radio" name="q5" value="D"> puts()</label>
</div>

<div class="question">
<h3>6. Which keyword is used to declare integer variable?</h3>
<label><input type="radio" name="q6" value="A"> int</label>
<label><input type="radio" name="q6" value="B"> float</label>
<label><input type="radio" name="q6" value="C"> char</label>
<label><input type="radio" name="q6" value="D"> double</label>
</div>

<div class="question">
<h3>7. Which loop is entry controlled loop?</h3>
<label><input type="radio" name="q7" value="A"> do while</label>
<label><input type="radio" name="q7" value="B"> none</label>
<label><input type="radio" name="q7" value="C"> for loop</label>
<label><input type="radio" name="q7" value="D"> goto</label>
</div>

<div class="question">
<h3>8. Which operator is used for logical AND?</h3>
<label><input type="radio" name="q8" value="A"> ||</label>
<label><input type="radio" name="q8" value="B"> !</label>
<label><input type="radio" name="q8" value="C"> &</label>
<label><input type="radio" name="q8" value="D"> &&</label>
</div>

<div class="question">
<h3>9. Array index starts from?</h3>
<label><input type="radio" name="q9" value="A"> 1</label>
<label><input type="radio" name="q9" value="B"> 0</label>
<label><input type="radio" name="q9" value="C"> -1</label>
<label><input type="radio" name="q9" value="D"> 2</label>
</div>

<div class="question">
<h3>10. Which function is used to find string length?</h3>
<label><input type="radio" name="q10" value="A"> strlen()</label>
<label><input type="radio" name="q10" value="B"> strcpy()</label>
<label><input type="radio" name="q10" value="C"> strcat()</label>
<label><input type="radio" name="q10" value="D"> strcmp()</label>
</div>

<div class="question">
<h3>11. C language is?</h3>
<label><input type="radio" name="q11" value="A"> Low level</label>
<label><input type="radio" name="q11" value="B"> Machine language</label>
<label><input type="radio" name="q11" value="C"> Middle level language</label>
<label><input type="radio" name="q11" value="D"> Assembly language</label>
</div>

<div class="question">
<h3>12. Which symbol is used for single line comment?</h3>
<label><input type="radio" name="q12" value="A"> ##</label>
<label><input type="radio" name="q12" value="B"> //</label>
<label><input type="radio" name="q12" value="C"> /**/</label>
<label><input type="radio" name="q12" value="D"> %%</label>
</div>

<div class="question">
<h3>13. Which storage class is permanent?</h3>
<label><input type="radio" name="q13" value="A"> auto</label>
<label><input type="radio" name="q13" value="B"> register</label>
<label><input type="radio" name="q13" value="C"> extern</label>
<label><input type="radio" name="q13" value="D"> static</label>
</div>

<div class="question">
<h3>14. Which function is used to display output?</h3>
<label><input type="radio" name="q14" value="A"> printf()</label>
<label><input type="radio" name="q14" value="B"> scanf()</label>
<label><input type="radio" name="q14" value="C"> gets()</label>
<label><input type="radio" name="q14" value="D"> putch()</label>
</div>

<div class="question">
<h3>15. Which operator is used for assignment?</h3>
<label><input type="radio" name="q15" value="A"> ==</label>
<label><input type="radio" name="q15" value="B"> =</label>
<label><input type="radio" name="q15" value="C"> !=</label>
<label><input type="radio" name="q15" value="D"> >=</label>
</div>

<div class="question">
<h3>16. Which loop executes at least once?</h3>
<label><input type="radio" name="q16" value="A"> for</label>
<label><input type="radio" name="q16" value="B"> while</label>
<label><input type="radio" name="q16" value="C"> do while</label>
<label><input type="radio" name="q16" value="D"> nested</label>
</div>

<div class="question">
<h3>17. Which function copies one string to another?</h3>
<label><input type="radio" name="q17" value="A"> strcpy()</label>
<label><input type="radio" name="q17" value="B"> strlen()</label>
<label><input type="radio" name="q17" value="C"> strcmp()</label>
<label><input type="radio" name="q17" value="D"> strcat()</label>
</div>

<div class="question">
<h3>18. Which symbol is used for address operator?</h3>
<label><input type="radio" name="q18" value="A"> *</label>
<label><input type="radio" name="q18" value="B"> #</label>
<label><input type="radio" name="q18" value="C"> @</label>
<label><input type="radio" name="q18" value="D"> &</label>
</div>

<div class="question">
<h3>19. Which keyword is used to return value?</h3>
<label><input type="radio" name="q19" value="A"> break</label>
<label><input type="radio" name="q19" value="B"> return</label>
<label><input type="radio" name="q19" value="C"> continue</label>
<label><input type="radio" name="q19" value="D"> goto</label>
</div>

<div class="question">
<h3>20. C program execution starts from?</h3>
<label><input type="radio" name="q20" value="A"> start()</label>
<label><input type="radio" name="q20" value="B"> init()</label>
<label><input type="radio" name="q20" value="C"> main()</label>
<label><input type="radio" name="q20" value="D"> run()</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>