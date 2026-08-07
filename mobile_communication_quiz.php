<?php
session_start();

$_SESSION['subject'] = "Mobile Communication";
$_SESSION['semester'] = "Semester 5";

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

<title>Mobile Communication Quiz - LearnHub</title>

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
Semester 5 - Mobile Communication Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Mobile communication is based on</h3>
<label><input type="radio" name="q1" value="A"> Wire connection</label>
<label><input type="radio" name="q1" value="B"> Wireless communication</label>
<label><input type="radio" name="q1" value="C"> Optical cable</label>
<label><input type="radio" name="q1" value="D"> Satellite only</label>
</div>


<div class="question">
<h3>2. GSM stands for</h3>
<label><input type="radio" name="q2" value="A"> Global System for Mobile Communications</label>
<label><input type="radio" name="q2" value="B"> General Signal Mobile</label>
<label><input type="radio" name="q2" value="C"> Global Service Method</label>
<label><input type="radio" name="q2" value="D"> General System Mode</label>
</div>


<div class="question">
<h3>3. Mobile network uses</h3>
<label><input type="radio" name="q3" value="A"> Wires</label>
<label><input type="radio" name="q3" value="B"> Cables</label>
<label><input type="radio" name="q3" value="C"> Radio Waves</label>
<label><input type="radio" name="q3" value="D"> Printer</label>
</div>


<div class="question">
<h3>4. SIM stands for</h3>
<label><input type="radio" name="q4" value="A"> Signal Identity Module</label>
<label><input type="radio" name="q4" value="B"> System Information Memory</label>
<label><input type="radio" name="q4" value="C"> Subscriber Internet Mode</label>
<label><input type="radio" name="q4" value="D"> Subscriber Identity Module</label>
</div>


<div class="question">
<h3>5. 4G provides</h3>
<label><input type="radio" name="q5" value="A"> High Speed Data</label>
<label><input type="radio" name="q5" value="B"> Low Signal</label>
<label><input type="radio" name="q5" value="C"> No Internet</label>
<label><input type="radio" name="q5" value="D"> Only Voice</label>
</div>


<div class="question">
<h3>6. Base Station is used for</h3>
<label><input type="radio" name="q6" value="A"> Storage</label>
<label><input type="radio" name="q6" value="B"> Wireless Communication</label>
<label><input type="radio" name="q6" value="C"> Printing</label>
<label><input type="radio" name="q6" value="D"> Charging</label>
</div>


<div class="question">
<h3>7. Bluetooth is a</h3>
<label><input type="radio" name="q7" value="A"> Wired Technology</label>
<label><input type="radio" name="q7" value="B"> Optical Technology</label>
<label><input type="radio" name="q7" value="C"> Short Range Wireless Technology</label>
<label><input type="radio" name="q7" value="D"> Storage Device</label>
</div>


<div class="question">
<h3>8. Wi-Fi uses</h3>
<label><input type="radio" name="q8" value="A"> Cable</label>
<label><input type="radio" name="q8" value="B"> Fiber</label>
<label><input type="radio" name="q8" value="C"> Copper Wire</label>
<label><input type="radio" name="q8" value="D"> Radio Frequency</label>
</div>


<div class="question">
<h3>9. IMEI number identifies</h3>
<label><input type="radio" name="q9" value="A"> Mobile Device</label>
<label><input type="radio" name="q9" value="B"> SIM Card Only</label>
<label><input type="radio" name="q9" value="C"> Network Cable</label>
<label><input type="radio" name="q9" value="D"> Battery</label>
</div>


<div class="question">
<h3>10. 5G provides</h3>
<label><input type="radio" name="q10" value="A"> Low Speed</label>
<label><input type="radio" name="q10" value="B"> High Speed Communication</label>
<label><input type="radio" name="q10" value="C"> No Data</label>
<label><input type="radio" name="q10" value="D"> Only SMS</label>
</div>


<div class="question">
<h3>11. Antenna is used for</h3>
<label><input type="radio" name="q11" value="A"> Storage</label>
<label><input type="radio" name="q11" value="B"> Processing</label>
<label><input type="radio" name="q11" value="C"> Transmission and Reception</label>
<label><input type="radio" name="q11" value="D"> Charging</label>
</div>


<div class="question">
<h3>12. CDMA stands for</h3>
<label><input type="radio" name="q12" value="A"> Code Data Mobile Access</label>
<label><input type="radio" name="q12" value="B"> Common Digital Mobile Access</label>
<label><input type="radio" name="q12" value="C"> Communication Data Mode Access</label>
<label><input type="radio" name="q12" value="D"> Code Division Multiple Access</label>
</div>


<div class="question">
<h3>13. Mobile communication allows</h3>
<label><input type="radio" name="q13" value="A"> Communication Anywhere</label>
<label><input type="radio" name="q13" value="B"> Only Home Use</label>
<label><input type="radio" name="q13" value="C"> Only Office Use</label>
<label><input type="radio" name="q13" value="D"> No Mobility</label>
</div>


<div class="question">
<h3>14. Handover means</h3>
<label><input type="radio" name="q14" value="A"> Switching Connection Between Cells</label>
<label><input type="radio" name="q14" value="B"> Switching Off Mobile</label>
<label><input type="radio" name="q14" value="C"> Deleting Data</label>
<label><input type="radio" name="q14" value="D"> Charging Battery</label>
</div>


<div class="question">
<h3>15. LTE is related to</h3>
<label><input type="radio" name="q15" value="A"> 2G</label>
<label><input type="radio" name="q15" value="B"> Bluetooth</label>
<label><input type="radio" name="q15" value="C"> 4G Technology</label>
<label><input type="radio" name="q15" value="D"> FM Radio</label>
</div>


<div class="question">
<h3>16. Mobile communication requires</h3>
<label><input type="radio" name="q16" value="A"> Network Infrastructure</label>
<label><input type="radio" name="q16" value="B"> Printer</label>
<label><input type="radio" name="q16" value="C"> Scanner</label>
<label><input type="radio" name="q16" value="D"> Keyboard</label>
</div>


<div class="question">
<h3>17. SMS stands for</h3>
<label><input type="radio" name="q17" value="A"> Short Message Service</label>
<label><input type="radio" name="q17" value="B"> Signal Mobile System</label>
<label><input type="radio" name="q17" value="C"> Service Message System</label>
<label><input type="radio" name="q17" value="D"> Simple Mobile Service</label>
</div>


<div class="question">
<h3>18. Mobile tower provides</h3>
<label><input type="radio" name="q18" value="A"> Storage</label>
<label><input type="radio" name="q18" value="B"> Signal Coverage</label>
<label><input type="radio" name="q18" value="C"> Battery Power</label>
<label><input type="radio" name="q18" value="D"> Applications</label>
</div>


<div class="question">
<h3>19. NFC is used for</h3>
<label><input type="radio" name="q19" value="A"> Long Distance Communication</label>
<label><input type="radio" name="q19" value="B"> Internet Cable</label>
<label><input type="radio" name="q19" value="C"> Short Range Communication</label>
<label><input type="radio" name="q19" value="D"> Storage</label>
</div>


<div class="question">
<h3>20. Main advantage of mobile communication is</h3>
<label><input type="radio" name="q20" value="A"> Mobility and Connectivity</label>
<label><input type="radio" name="q20" value="B"> Large Size</label>
<label><input type="radio" name="q20" value="C"> High Cost Only</label>
<label><input type="radio" name="q20" value="D"> No Communication</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>

</body>
</html>