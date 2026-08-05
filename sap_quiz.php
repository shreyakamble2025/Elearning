<?php
session_start();

$_SESSION['subject'] = "Switchgear And Protection";
$_SESSION['semester'] = "Semester 5";

$_SESSION['answers']=array(

1=>'A',
2=>'B',
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

<title>Switchgear And Protection Quiz - LearnHub</title>

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
Semester 5 - Switchgear And Protection Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Switchgear is used for</h3>
<label><input type="radio" name="q1" value="A"> Protection and Control of Power System</label>
<label><input type="radio" name="q1" value="B"> Lighting</label>
<label><input type="radio" name="q1" value="C"> Heating</label>
<label><input type="radio" name="q1" value="D"> Communication</label>
</div>

<div class="question">
<h3>2. A fuse protects a circuit from</h3>
<label><input type="radio" name="q2" value="A"> Low Voltage</label>
<label><input type="radio" name="q2" value="B"> Overcurrent</label>
<label><input type="radio" name="q2" value="C"> Low Frequency</label>
<label><input type="radio" name="q2" value="D"> Moisture</label>
</div>

<div class="question">
<h3>3. Relay is a device used for</h3>
<label><input type="radio" name="q3" value="A"> Heating</label>
<label><input type="radio" name="q3" value="B"> Cooling</label>
<label><input type="radio" name="q3" value="C"> Fault Detection</label>
<label><input type="radio" name="q3" value="D"> Lighting</label>
</div>

<div class="question">
<h3>4. Circuit breaker is used to</h3>
<label><input type="radio" name="q4" value="A"> Increase Voltage</label>
<label><input type="radio" name="q4" value="B"> Reduce Current</label>
<label><input type="radio" name="q4" value="C"> Generate Power</label>
<label><input type="radio" name="q4" value="D"> Interrupt Fault Current</label>
</div>

<div class="question">
<h3>5. HRC fuse stands for</h3>
<label><input type="radio" name="q5" value="A"> High Rupturing Capacity</label>
<label><input type="radio" name="q5" value="B"> High Resistance Circuit</label>
<label><input type="radio" name="q5" value="C"> Heavy Relay Control</label>
<label><input type="radio" name="q5" value="D"> High Reactive Current</label>
</div>

<div class="question">
<h3>6. Relay operates when</h3>
<label><input type="radio" name="q6" value="A"> Voltage is Constant</label>
<label><input type="radio" name="q6" value="B"> Fault Occurs</label>
<label><input type="radio" name="q6" value="C"> Frequency is Constant</label>
<label><input type="radio" name="q6" value="D"> No Load Exists</label>
</div>

<div class="question">
<h3>7. Earth fault relay protects against</h3>
<label><input type="radio" name="q7" value="A"> Overheating</label>
<label><input type="radio" name="q7" value="B"> Overvoltage</label>
<label><input type="radio" name="q7" value="C"> Earth Fault</label>
<label><input type="radio" name="q7" value="D"> Frequency Change</label>
</div>

<div class="question">
<h3>8. Circuit breakers are installed in</h3>
<label><input type="radio" name="q8" value="A"> Kitchen</label>
<label><input type="radio" name="q8" value="B"> Transformer Oil Only</label>
<label><input type="radio" name="q8" value="C"> Motor Windings</label>
<label><input type="radio" name="q8" value="D"> Power System Protection</label>
</div>

<div class="question">
<h3>9. The main function of protection system is</h3>
<label><input type="radio" name="q9" value="A"> Isolate Faulty Section</label>
<label><input type="radio" name="q9" value="B"> Increase Load</label>
<label><input type="radio" name="q9" value="C"> Increase Voltage</label>
<label><input type="radio" name="q9" value="D"> Generate Power</label>
</div>

<div class="question">
<h3>10. MCB stands for</h3>
<label><input type="radio" name="q10" value="A"> Main Control Board</label>
<label><input type="radio" name="q10" value="B"> Miniature Circuit Breaker</label>
<label><input type="radio" name="q10" value="C"> Motor Circuit Box</label>
<label><input type="radio" name="q10" value="D"> Maximum Current Breaker</label>
</div>

<div class="question">
<h3>11. Differential protection is mainly used for</h3>
<label><input type="radio" name="q11" value="A"> Lamps</label>
<label><input type="radio" name="q11" value="B"> Fans</label>
<label><input type="radio" name="q11" value="C"> Transformers and Generators</label>
<label><input type="radio" name="q11" value="D"> Heaters</label>
</div>

<div class="question">
<h3>12. Protective relay works with</h3>
<label><input type="radio" name="q12" value="A"> Fuse Only</label>
<label><input type="radio" name="q12" value="B"> Battery Only</label>
<label><input type="radio" name="q12" value="C"> Motor Only</label>
<label><input type="radio" name="q12" value="D"> Circuit Breaker</label>
</div>

<div class="question">
<h3>13. Buchholz relay is used in</h3>
<label><input type="radio" name="q13" value="A"> Oil Immersed Transformer</label>
<label><input type="radio" name="q13" value="B"> DC Motor</label>
<label><input type="radio" name="q13" value="C"> Alternator</label>
<label><input type="radio" name="q13" value="D"> Battery</label>
</div>

<div class="question">
<h3>14. Overcurrent relay protects against</h3>
<label><input type="radio" name="q14" value="A"> Low Current</label>
<label><input type="radio" name="q14" value="B"> Excess Current</label>
<label><input type="radio" name="q14" value="C"> Low Voltage</label>
<label><input type="radio" name="q14" value="D"> Low Frequency</label>
</div>

<div class="question">
<h3>15. Lightning arresters protect against</h3>
<label><input type="radio" name="q15" value="A"> Overload</label>
<label><input type="radio" name="q15" value="B"> Short Circuit</label>
<label><input type="radio" name="q15" value="C"> Lightning Surges</label>
<label><input type="radio" name="q15" value="D"> Earth Fault</label>
</div>

<div class="question">
<h3>16. SF6 circuit breaker uses</h3>
<label><input type="radio" name="q16" value="A"> Air</label>
<label><input type="radio" name="q16" value="B"> Oil</label>
<label><input type="radio" name="q16" value="C"> Water</label>
<label><input type="radio" name="q16" value="D"> SF6 Gas</label>
</div>

<div class="question">
<h3>17. Protection system improves</h3>
<label><input type="radio" name="q17" value="A"> Reliability</label>
<label><input type="radio" name="q17" value="B"> Decoration</label>
<label><input type="radio" name="q17" value="C"> Temperature</label>
<label><input type="radio" name="q17" value="D"> Noise</label>
</div>

<div class="question">
<h3>18. A fuse is connected in</h3>
<label><input type="radio" name="q18" value="A"> Parallel</label>
<label><input type="radio" name="q18" value="B"> Series</label>
<label><input type="radio" name="q18" value="C"> Star</label>
<label><input type="radio" name="q18" value="D"> Delta</label>
</div>

<div class="question">
<h3>19. Short circuit causes</h3>
<label><input type="radio" name="q19" value="A"> Low Current</label>
<label><input type="radio" name="q19" value="B"> No Current</label>
<label><input type="radio" name="q19" value="C"> Excessive Current</label>
<label><input type="radio" name="q19" value="D"> Low Voltage Only</label>
</div>

<div class="question">
<h3>20. Switchgear ensures</h3>
<label><input type="radio" name="q20" value="A"> Safe Operation of Power System</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Painting</label>
<label><input type="radio" name="q20" value="D"> Plumbing</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

