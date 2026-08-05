
<?php
session_start();

$_SESSION['subject'] = "Electrical And Electronic Measurement";
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

<title>Electrical And Electronic Measurement Quiz - LearnHub</title>

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
Semester 4 - Electrical And Electronic Measurement Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Which instrument is used to measure current?</h3>
<label><input type="radio" name="q1" value="A"> Ammeter</label>
<label><input type="radio" name="q1" value="B"> Voltmeter</label>
<label><input type="radio" name="q1" value="C"> Wattmeter</label>
<label><input type="radio" name="q1" value="D"> Megger</label>
</div>

<div class="question">
<h3>2. Which instrument measures voltage?</h3>
<label><input type="radio" name="q2" value="A"> Ammeter</label>
<label><input type="radio" name="q2" value="B"> Voltmeter</label>
<label><input type="radio" name="q2" value="C"> Ohmmeter</label>
<label><input type="radio" name="q2" value="D"> CRO</label>
</div>

<div class="question">
<h3>3. Frequency is measured in</h3>
<label><input type="radio" name="q3" value="A"> Volt</label>
<label><input type="radio" name="q3" value="B"> Ohm</label>
<label><input type="radio" name="q3" value="C"> Hertz</label>
<label><input type="radio" name="q3" value="D"> Watt</label>
</div>

<div class="question">
<h3>4. Wattmeter is used to measure</h3>
<label><input type="radio" name="q4" value="A"> Voltage</label>
<label><input type="radio" name="q4" value="B"> Current</label>
<label><input type="radio" name="q4" value="C"> Resistance</label>
<label><input type="radio" name="q4" value="D"> Power</label>
</div>

<div class="question">
<h3>5. Resistance is measured by</h3>
<label><input type="radio" name="q5" value="A"> Ohmmeter</label>
<label><input type="radio" name="q5" value="B"> Voltmeter</label>
<label><input type="radio" name="q5" value="C"> Ammeter</label>
<label><input type="radio" name="q5" value="D"> Wattmeter</label>
</div>

<div class="question">
<h3>6. Energy meter measures</h3>
<label><input type="radio" name="q6" value="A"> Voltage</label>
<label><input type="radio" name="q6" value="B"> Electrical Energy</label>
<label><input type="radio" name="q6" value="C"> Current</label>
<label><input type="radio" name="q6" value="D"> Frequency</label>
</div>

<div class="question">
<h3>7. CRO stands for</h3>
<label><input type="radio" name="q7" value="A"> Current Reading Oscillator</label>
<label><input type="radio" name="q7" value="B"> Cathode Resistance Oscillator</label>
<label><input type="radio" name="q7" value="C"> Cathode Ray Oscilloscope</label>
<label><input type="radio" name="q7" value="D"> Circuit Reading Oscilloscope</label>
</div>

<div class="question">
<h3>8. Megger is used to measure</h3>
<label><input type="radio" name="q8" value="A"> Current</label>
<label><input type="radio" name="q8" value="B"> Voltage</label>
<label><input type="radio" name="q8" value="C"> Power</label>
<label><input type="radio" name="q8" value="D"> Insulation Resistance</label>
</div>

<div class="question">
<h3>9. Unit of resistance is</h3>
<label><input type="radio" name="q9" value="A"> Ohm</label>
<label><input type="radio" name="q9" value="B"> Volt</label>
<label><input type="radio" name="q9" value="C"> Watt</label>
<label><input type="radio" name="q9" value="D"> Ampere</label>
</div>

<div class="question">
<h3>10. Digital instruments provide</h3>
<label><input type="radio" name="q10" value="A"> Analog Output</label>
<label><input type="radio" name="q10" value="B"> Numerical Display</label>
<label><input type="radio" name="q10" value="C"> Mechanical Output</label>
<label><input type="radio" name="q10" value="D"> Sound Output</label>
</div>

<div class="question">
<h3>11. Frequency meter measures</h3>
<label><input type="radio" name="q11" value="A"> Current</label>
<label><input type="radio" name="q11" value="B"> Voltage</label>
<label><input type="radio" name="q11" value="C"> Frequency</label>
<label><input type="radio" name="q11" value="D"> Resistance</label>
</div>

<div class="question">
<h3>12. Instrument transformer includes</h3>
<label><input type="radio" name="q12" value="A"> Power Transformer</label>
<label><input type="radio" name="q12" value="B"> Distribution Transformer</label>
<label><input type="radio" name="q12" value="C"> Auto Transformer</label>
<label><input type="radio" name="q12" value="D"> CT and PT</label>
</div>

<div class="question">
<h3>13. CT stands for</h3>
<label><input type="radio" name="q13" value="A"> Current Transformer</label>
<label><input type="radio" name="q13" value="B"> Control Transformer</label>
<label><input type="radio" name="q13" value="C"> Circuit Transformer</label>
<label><input type="radio" name="q13" value="D"> Central Transformer</label>
</div>

<div class="question">
<h3>14. PT stands for</h3>
<label><input type="radio" name="q14" value="A"> Power Terminal</label>
<label><input type="radio" name="q14" value="B"> Potential Transformer</label>
<label><input type="radio" name="q14" value="C"> Phase Terminal</label>
<label><input type="radio" name="q14" value="D"> Power Tool</label>
</div>

<div class="question">
<h3>15. Oscilloscope displays</h3>
<label><input type="radio" name="q15" value="A"> Temperature</label>
<label><input type="radio" name="q15" value="B"> Pressure</label>
<label><input type="radio" name="q15" value="C"> Waveforms</label>
<label><input type="radio" name="q15" value="D"> Speed</label>
</div>

<div class="question">
<h3>16. Accuracy of an instrument indicates</h3>
<label><input type="radio" name="q16" value="A"> Speed</label>
<label><input type="radio" name="q16" value="B"> Size</label>
<label><input type="radio" name="q16" value="C"> Weight</label>
<label><input type="radio" name="q16" value="D"> Closeness to True Value</label>
</div>

<div class="question">
<h3>17. Multimeter can measure</h3>
<label><input type="radio" name="q17" value="A"> Voltage, Current and Resistance</label>
<label><input type="radio" name="q17" value="B"> Only Voltage</label>
<label><input type="radio" name="q17" value="C"> Only Current</label>
<label><input type="radio" name="q17" value="D"> Only Resistance</label>
</div>

<div class="question">
<h3>18. Electronic instruments generally have</h3>
<label><input type="radio" name="q18" value="A"> Low Accuracy</label>
<label><input type="radio" name="q18" value="B"> High Accuracy</label>
<label><input type="radio" name="q18" value="C"> No Accuracy</label>
<label><input type="radio" name="q18" value="D"> Fixed Accuracy</label>
</div>

<div class="question">
<h3>19. Calibration is done to</h3>
<label><input type="radio" name="q19" value="A"> Increase Weight</label>
<label><input type="radio" name="q19" value="B"> Reduce Size</label>
<label><input type="radio" name="q19" value="C"> Improve Appearance</label>
<label><input type="radio" name="q19" value="D"> Ensure Accurate Measurement</label>
</div>

<div class="question">
<h3>20. Measurement system is used for</h3>
<label><input type="radio" name="q20" value="A"> Accurate Monitoring and Control</label>
<label><input type="radio" name="q20" value="B"> Decoration</label>
<label><input type="radio" name="q20" value="C"> Painting</label>
<label><input type="radio" name="q20" value="D"> Advertising</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

