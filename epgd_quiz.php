
<?php
session_start();

$_SESSION['subject'] = "Electrical Power Generation, Transmission and Distribution";
$_SESSION['semester'] = "Semester 4";

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

<title>Electrical Power Generation, Transmission and Distribution Quiz - LearnHub</title>

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
Semester 4 - Electrical Power Generation, Transmission and Distribution Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Electricity is mainly generated in</h3>
<label><input type="radio" name="q1" value="A"> Power Station</label>
<label><input type="radio" name="q1" value="B"> Transformer</label>
<label><input type="radio" name="q1" value="C"> Substation</label>
<label><input type="radio" name="q1" value="D"> Distribution Line</label>
</div>

<div class="question">
<h3>2. Hydroelectric power plant uses</h3>
<label><input type="radio" name="q2" value="A"> Coal</label>
<label><input type="radio" name="q2" value="B"> Water</label>
<label><input type="radio" name="q2" value="C"> Gas</label>
<label><input type="radio" name="q2" value="D"> Diesel</label>
</div>

<div class="question">
<h3>3. Transmission lines are used to</h3>
<label><input type="radio" name="q3" value="A"> Generate power</label>
<label><input type="radio" name="q3" value="B"> Store power</label>
<label><input type="radio" name="q3" value="C"> Transfer power</label>
<label><input type="radio" name="q3" value="D"> Measure power</label>
</div>

<div class="question">
<h3>4. Distribution system delivers power to</h3>
<label><input type="radio" name="q4" value="A"> Generators</label>
<label><input type="radio" name="q4" value="B"> Turbines</label>
<label><input type="radio" name="q4" value="C"> Transformers</label>
<label><input type="radio" name="q4" value="D"> Consumers</label>
</div>

<div class="question">
<h3>5. Thermal power plant mainly uses</h3>
<label><input type="radio" name="q5" value="A"> Coal</label>
<label><input type="radio" name="q5" value="B"> Water</label>
<label><input type="radio" name="q5" value="C"> Wind</label>
<label><input type="radio" name="q5" value="D"> Solar Energy</label>
</div>

<div class="question">
<h3>6. Step-up transformer is used in</h3>
<label><input type="radio" name="q6" value="A"> Distribution</label>
<label><input type="radio" name="q6" value="B"> Transmission</label>
<label><input type="radio" name="q6" value="C"> House Wiring</label>
<label><input type="radio" name="q6" value="D"> Earthing</label>
</div>

<div class="question">
<h3>7. Unit of electrical power is</h3>
<label><input type="radio" name="q7" value="A"> Volt</label>
<label><input type="radio" name="q7" value="B"> Ampere</label>
<label><input type="radio" name="q7" value="C"> Watt</label>
<label><input type="radio" name="q7" value="D"> Ohm</label>
</div>

<div class="question">
<h3>8. High voltage transmission reduces</h3>
<label><input type="radio" name="q8" value="A"> Power</label>
<label><input type="radio" name="q8" value="B"> Voltage</label>
<label><input type="radio" name="q8" value="C"> Frequency</label>
<label><input type="radio" name="q8" value="D"> Line Losses</label>
</div>

<div class="question">
<h3>9. Solar power plant uses</h3>
<label><input type="radio" name="q9" value="A"> Sunlight</label>
<label><input type="radio" name="q9" value="B"> Coal</label>
<label><input type="radio" name="q9" value="C"> Diesel</label>
<label><input type="radio" name="q9" value="D"> Gas</label>
</div>

<div class="question">
<h3>10. Frequency in India is</h3>
<label><input type="radio" name="q10" value="A"> 25 Hz</label>
<label><input type="radio" name="q10" value="B"> 50 Hz</label>
<label><input type="radio" name="q10" value="C"> 60 Hz</label>
<label><input type="radio" name="q10" value="D"> 100 Hz</label>
</div>

<div class="question">
<h3>11. Wind energy is a</h3>
<label><input type="radio" name="q11" value="A"> Non-renewable source</label>
<label><input type="radio" name="q11" value="B"> Conventional source</label>
<label><input type="radio" name="q11" value="C"> Renewable source</label>
<label><input type="radio" name="q11" value="D"> Nuclear source</label>
</div>

<div class="question">
<h3>12. Substation is used for</h3>
<label><input type="radio" name="q12" value="A"> Power Generation</label>
<label><input type="radio" name="q12" value="B"> Power Consumption</label>
<label><input type="radio" name="q12" value="C"> Energy Storage</label>
<label><input type="radio" name="q12" value="D"> Voltage Control</label>
</div>

<div class="question">
<h3>13. Distribution transformer is generally</h3>
<label><input type="radio" name="q13" value="A"> Step Down</label>
<label><input type="radio" name="q13" value="B"> Step Up</label>
<label><input type="radio" name="q13" value="C"> Isolation</label>
<label><input type="radio" name="q13" value="D"> Auto Transformer</label>
</div>

<div class="question">
<h3>14. Nuclear power plant uses</h3>
<label><input type="radio" name="q14" value="A"> Coal</label>
<label><input type="radio" name="q14" value="B"> Uranium</label>
<label><input type="radio" name="q14" value="C"> Water Only</label>
<label><input type="radio" name="q14" value="D"> Wind</label>
</div>

<div class="question">
<h3>15. Insulators are used on transmission lines to</h3>
<label><input type="radio" name="q15" value="A"> Increase Current</label>
<label><input type="radio" name="q15" value="B"> Reduce Voltage</label>
<label><input type="radio" name="q15" value="C"> Support and Insulate Conductors</label>
<label><input type="radio" name="q15" value="D"> Generate Power</label>
</div>

<div class="question">
<h3>16. Conductors are usually made of</h3>
<label><input type="radio" name="q16" value="A"> Wood</label>
<label><input type="radio" name="q16" value="B"> Plastic</label>
<label><input type="radio" name="q16" value="C"> Rubber</label>
<label><input type="radio" name="q16" value="D"> Aluminium</label>
</div>

<div class="question">
<h3>17. Power factor value lies between</h3>
<label><input type="radio" name="q17" value="A"> 0 and 1</label>
<label><input type="radio" name="q17" value="B"> 1 and 2</label>
<label><input type="radio" name="q17" value="C"> 2 and 3</label>
<label><input type="radio" name="q17" value="D"> 3 and 4</label>
</div>

<div class="question">
<h3>18. Transmission voltage is generally</h3>
<label><input type="radio" name="q18" value="A"> Low</label>
<label><input type="radio" name="q18" value="B"> High</label>
<label><input type="radio" name="q18" value="C"> Zero</label>
<label><input type="radio" name="q18" value="D"> Medium</label>
</div>

<div class="question">
<h3>19. Distribution voltage supplied to homes is approximately</h3>
<label><input type="radio" name="q19" value="A"> 11 kV</label>
<label><input type="radio" name="q19" value="B"> 440 kV</label>
<label><input type="radio" name="q19" value="C"> 132 kV</label>
<label><input type="radio" name="q19" value="D"> 230 V</label>
</div>

<div class="question">
<h3>20. Main objective of power system is</h3>
<label><input type="radio" name="q20" value="A"> Safe and Reliable Supply</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Advertising</label>
<label><input type="radio" name="q20" value="D"> Painting</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

