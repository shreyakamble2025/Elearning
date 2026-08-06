<?php
session_start();

$_SESSION['subject'] = "Object Oriented Programming";
$_SESSION['semester'] = "Semester 4";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'A',
6=>'B',
7=>'C',
8=>'D',
9=>'A',
10=>'B',
11=>'C',
12=>'D',
13=>'A',
14=>'B',
15=>'C',
16=>'D',
17=>'A',
18=>'B',
19=>'C',
20=>'D'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Object Oriented Programming Quiz - LearnHub</title>

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
Semester 4 - Object Oriented Programming Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. OOP stands for</h3>
<label><input type="radio" name="q1" value="A"> Object Output Programming</label>
<label><input type="radio" name="q1" value="B"> Object Oriented Programming</label>
<label><input type="radio" name="q1" value="C"> Operational Object Program</label>
<label><input type="radio" name="q1" value="D"> Object Ordered Process</label>
</div>

<div class="question">
<h3>2. Class is a</h3>
<label><input type="radio" name="q2" value="A"> Blueprint of Object</label>
<label><input type="radio" name="q2" value="B"> Function</label>
<label><input type="radio" name="q2" value="C"> Variable</label>
<label><input type="radio" name="q2" value="D"> Loop</label>
</div>

<div class="question">
<h3>3. Object is an instance of</h3>
<label><input type="radio" name="q3" value="A"> Method</label>
<label><input type="radio" name="q3" value="B"> Variable</label>
<label><input type="radio" name="q3" value="C"> Class</label>
<label><input type="radio" name="q3" value="D"> Array</label>
</div>

<div class="question">
<h3>4. Which concept hides data?</h3>
<label><input type="radio" name="q4" value="A"> Inheritance</label>
<label><input type="radio" name="q4" value="B"> Polymorphism</label>
<label><input type="radio" name="q4" value="C"> Abstraction</label>
<label><input type="radio" name="q4" value="D"> Encapsulation</label>
</div>

<div class="question">
<h3>5. Inheritance is used for</h3>
<label><input type="radio" name="q5" value="A"> Code Reusability</label>
<label><input type="radio" name="q5" value="B"> Data Entry</label>
<label><input type="radio" name="q5" value="C"> Compilation</label>
<label><input type="radio" name="q5" value="D"> Debugging</label>
</div>

<div class="question">
<h3>6. Polymorphism means</h3>
<label><input type="radio" name="q6" value="A"> Single Form</label>
<label><input type="radio" name="q6" value="B"> Many Forms</label>
<label><input type="radio" name="q6" value="C"> No Form</label>
<label><input type="radio" name="q6" value="D"> Data Form</label>
</div>

<div class="question">
<h3>7. Constructor is used to</h3>
<label><input type="radio" name="q7" value="A"> Delete Object</label>
<label><input type="radio" name="q7" value="B"> Destroy Object</label>
<label><input type="radio" name="q7" value="C"> Initialize Object</label>
<label><input type="radio" name="q7" value="D"> Compile Program</label>
</div>

<div class="question">
<h3>8. Destructor is used to</h3>
<label><input type="radio" name="q8" value="A"> Create Object</label>
<label><input type="radio" name="q8" value="B"> Initialize Object</label>
<label><input type="radio" name="q8" value="C"> Copy Object</label>
<label><input type="radio" name="q8" value="D"> Destroy Object</label>
</div>

<div class="question">
<h3>9. Access specifier for public access is</h3>
<label><input type="radio" name="q9" value="A"> public</label>
<label><input type="radio" name="q9" value="B"> private</label>
<label><input type="radio" name="q9" value="C"> protected</label>
<label><input type="radio" name="q9" value="D"> static</label>
</div>

<div class="question">
<h3>10. Private members are accessible</h3>
<label><input type="radio" name="q10" value="A"> Everywhere</label>
<label><input type="radio" name="q10" value="B"> Within Same Class</label>
<label><input type="radio" name="q10" value="C"> Outside Program</label>
<label><input type="radio" name="q10" value="D"> By Compiler Only</label>
</div>

<div class="question">
<h3>11. Function overloading is an example of</h3>
<label><input type="radio" name="q11" value="A"> Inheritance</label>
<label><input type="radio" name="q11" value="B"> Encapsulation</label>
<label><input type="radio" name="q11" value="C"> Compile Time Polymorphism</label>
<label><input type="radio" name="q11" value="D"> Runtime Error</label>
</div>

<div class="question">
<h3>12. Method overriding is</h3>
<label><input type="radio" name="q12" value="A"> Encapsulation</label>
<label><input type="radio" name="q12" value="B"> Abstraction</label>
<label><input type="radio" name="q12" value="C"> Overloading</label>
<label><input type="radio" name="q12" value="D"> Runtime Polymorphism</label>
</div>

<div class="question">
<h3>13. Abstract class is used for</h3>
<label><input type="radio" name="q13" value="A"> Abstraction</label>
<label><input type="radio" name="q13" value="B"> Storage</label>
<label><input type="radio" name="q13" value="C"> Looping</label>
<label><input type="radio" name="q13" value="D"> Input</label>
</div>

<div class="question">
<h3>14. Which keyword creates object in Java?</h3>
<label><input type="radio" name="q14" value="A"> create</label>
<label><input type="radio" name="q14" value="B"> new</label>
<label><input type="radio" name="q14" value="C"> object</label>
<label><input type="radio" name="q14" value="D"> class</label>
</div>

<div class="question">
<h3>15. Interface supports</h3>
<label><input type="radio" name="q15" value="A"> Multiple Inheritance</label>
<label><input type="radio" name="q15" value="B"> Looping</label>
<label><input type="radio" name="q15" value="C"> Arrays</label>
<label><input type="radio" name="q15" value="D"> Storage</label>
</div>

<div class="question">
<h3>16. Super class is also called</h3>
<label><input type="radio" name="q16" value="A"> Child Class</label>
<label><input type="radio" name="q16" value="B"> Derived Class</label>
<label><input type="radio" name="q16" value="C"> Sub Class</label>
<label><input type="radio" name="q16" value="D"> Parent Class</label>
</div>

<div class="question">
<h3>17. Derived class inherits from</h3>
<label><input type="radio" name="q17" value="A"> Base Class</label>
<label><input type="radio" name="q17" value="B"> Object</label>
<label><input type="radio" name="q17" value="C"> Variable</label>
<label><input type="radio" name="q17" value="D"> Method</label>
</div>

<div class="question">
<h3>18. Encapsulation combines</h3>
<label><input type="radio" name="q18" value="A"> Data and Methods</label>
<label><input type="radio" name="q18" value="B"> Data and Loops</label>
<label><input type="radio" name="q18" value="C"> Arrays and Objects</label>
<label><input type="radio" name="q18" value="D"> Classes and Loops</label>
</div>

<div class="question">
<h3>19. OOP improves</h3>
<label><input type="radio" name="q19" value="A"> Complexity</label>
<label><input type="radio" name="q19" value="B"> Errors</label>
<label><input type="radio" name="q19" value="C"> Maintainability</label>
<label><input type="radio" name="q19" value="D"> Redundancy</label>
</div>

<div class="question">
<h3>20. Main feature of OOP is</h3>
<label><input type="radio" name="q20" value="A"> Object Based Design</label>
<label><input type="radio" name="q20" value="B"> Assembly Coding</label>
<label><input type="radio" name="q20" value="C"> Hardware Design</label>
<label><input type="radio" name="q20" value="D"> Networking</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>