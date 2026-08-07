<?php
session_start();

$_SESSION['subject'] = "Digital Techniques";
$_SESSION['semester'] = "Semester 2";

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

<title>Digital Techniques Quiz - LearnHub</title>

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
Semester 2 - Digital Techniques Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Digital systems operate using</h3>
<label><input type="radio" name="q1" value="A"> Analog Signals</label>
<label><input type="radio" name="q1" value="B"> Binary Signals</label>
<label><input type="radio" name="q1" value="C"> Mechanical Signals</label>
<label><input type="radio" name="q1" value="D"> Optical Signals</label>
</div>

<div class="question">
<h3>2. Binary number system uses</h3>
<label><input type="radio" name="q2" value="A"> 0 and 1</label>
<label><input type="radio" name="q2" value="B"> 0 to 9</label>
<label><input type="radio" name="q2" value="C"> A to F</label>
<label><input type="radio" name="q2" value="D"> 1 to 8</label>
</div>

<div class="question">
<h3>3. Decimal number 10 in binary is</h3>
<label><input type="radio" name="q3" value="A"> 1000</label>
<label><input type="radio" name="q3" value="B"> 1001</label>
<label><input type="radio" name="q3" value="C"> 1010</label>
<label><input type="radio" name="q3" value="D"> 1111</label>
</div>

<div class="question">
<h3>4. AND gate output is HIGH when</h3>
<label><input type="radio" name="q4" value="A"> Any input is HIGH</label>
<label><input type="radio" name="q4" value="B"> All inputs are LOW</label>
<label><input type="radio" name="q4" value="C"> One input is LOW</label>
<label><input type="radio" name="q4" value="D"> All inputs are HIGH</label>
</div>

<div class="question">
<h3>5. OR gate output is HIGH when</h3>
<label><input type="radio" name="q5" value="A"> Any input is HIGH</label>
<label><input type="radio" name="q5" value="B"> All inputs are LOW</label>
<label><input type="radio" name="q5" value="C"> All inputs are HIGH</label>
<label><input type="radio" name="q5" value="D"> None</label>
</div>

<div class="question">
<h3>6. NOT gate is also called</h3>
<label><input type="radio" name="q6" value="A"> Buffer</label>
<label><input type="radio" name="q6" value="B"> Inverter</label>
<label><input type="radio" name="q6" value="C"> Encoder</label>
<label><input type="radio" name="q6" value="D"> Decoder</label>
</div>

<div class="question">
<h3>7. NAND gate is combination of</h3>
<label><input type="radio" name="q7" value="A"> OR + NOT</label>
<label><input type="radio" name="q7" value="B"> XOR + NOT</label>
<label><input type="radio" name="q7" value="C"> AND + NOT</label>
<label><input type="radio" name="q7" value="D"> NOR + NOT</label>
</div>

<div class="question">
<h3>8. NOR gate is combination of</h3>
<label><input type="radio" name="q8" value="A"> AND + NOT</label>
<label><input type="radio" name="q8" value="B"> XOR + NOT</label>
<label><input type="radio" name="q8" value="C"> NAND + NOT</label>
<label><input type="radio" name="q8" value="D"> OR + NOT</label>
</div>

<div class="question">
<h3>9. Hexadecimal system uses base</h3>
<label><input type="radio" name="q9" value="A"> 16</label>
<label><input type="radio" name="q9" value="B"> 10</label>
<label><input type="radio" name="q9" value="C"> 8</label>
<label><input type="radio" name="q9" value="D"> 2</label>
</div>

<div class="question">
<h3>10. Octal number system uses base</h3>
<label><input type="radio" name="q10" value="A"> 2</label>
<label><input type="radio" name="q10" value="B"> 8</label>
<label><input type="radio" name="q10" value="C"> 10</label>
<label><input type="radio" name="q10" value="D"> 16</label>
</div>

<div class="question">
<h3>11. XOR gate output is HIGH when</h3>
<label><input type="radio" name="q11" value="A"> Inputs are same</label>
<label><input type="radio" name="q11" value="B"> Both inputs HIGH</label>
<label><input type="radio" name="q11" value="C"> Inputs are different</label>
<label><input type="radio" name="q11" value="D"> Both LOW</label>
</div>

<div class="question">
<h3>12. Flip-flop is used for</h3>
<label><input type="radio" name="q12" value="A"> Amplification</label>
<label><input type="radio" name="q12" value="B"> Rectification</label>
<label><input type="radio" name="q12" value="C"> Oscillation</label>
<label><input type="radio" name="q12" value="D"> Data Storage</label>
</div>

<div class="question">
<h3>13. A byte contains</h3>
<label><input type="radio" name="q13" value="A"> 8 Bits</label>
<label><input type="radio" name="q13" value="B"> 4 Bits</label>
<label><input type="radio" name="q13" value="C"> 16 Bits</label>
<label><input type="radio" name="q13" value="D"> 32 Bits</label>
</div>

<div class="question">
<h3>14. Decoder converts</h3>
<label><input type="radio" name="q14" value="A"> Output to Input</label>
<label><input type="radio" name="q14" value="B"> Binary to Decimal Form</label>
<label><input type="radio" name="q14" value="C"> Analog to Digital</label>
<label><input type="radio" name="q14" value="D"> Digital to Analog</label>
</div>

<div class="question">
<h3>15. Encoder converts</h3>
<label><input type="radio" name="q15" value="A"> Binary to Decimal</label>
<label><input type="radio" name="q15" value="B"> Analog to Digital</label>
<label><input type="radio" name="q15" value="C"> Decimal to Binary</label>
<label><input type="radio" name="q15" value="D"> Digital to Analog</label>
</div>

<div class="question">
<h3>16. Multiplexer is known as</h3>
<label><input type="radio" name="q16" value="A"> Data Distributor</label>
<label><input type="radio" name="q16" value="B"> Storage Device</label>
<label><input type="radio" name="q16" value="C"> Counter</label>
<label><input type="radio" name="q16" value="D"> Data Selector</label>
</div>

<div class="question">
<h3>17. Demultiplexer is known as</h3>
<label><input type="radio" name="q17" value="A"> Data Distributor</label>
<label><input type="radio" name="q17" value="B"> Data Selector</label>
<label><input type="radio" name="q17" value="C"> Register</label>
<label><input type="radio" name="q17" value="D"> Counter</label>
</div>

<div class="question">
<h3>18. Counter is used for</h3>
<label><input type="radio" name="q18" value="A"> Counting Pulses</label>
<label><input type="radio" name="q18" value="B"> Amplification</label>
<label><input type="radio" name="q18" value="C"> Filtering</label>
<label><input type="radio" name="q18" value="D"> Rectification</label>
</div>

<div class="question">
<h3>19. Register is used to</h3>
<label><input type="radio" name="q19" value="A"> Generate Power</label>
<label><input type="radio" name="q19" value="B"> Amplify Signal</label>
<label><input type="radio" name="q19" value="C"> Store Binary Data</label>
<label><input type="radio" name="q19" value="D"> Convert AC to DC</label>
</div>

<div class="question">
<h3>20. Digital electronics mainly deals with</h3>
<label><input type="radio" name="q20" value="A"> Continuous Signals</label>
<label><input type="radio" name="q20" value="B"> Analog Signals</label>
<label><input type="radio" name="q20" value="C"> Mechanical Signals</label>
<label><input type="radio" name="q20" value="D"> Binary Signals</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>