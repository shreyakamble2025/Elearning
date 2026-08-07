<?php
session_start();

$_SESSION['subject'] = "Advanced Microcontroller";
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

<title>Advanced Microcontroller Quiz - LearnHub</title>

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
Semester 5 - Advanced Microcontroller Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">


<div class="question">
<h3>1. Microcontroller is a combination of</h3>
<label><input type="radio" name="q1" value="A"> Only CPU</label>
<label><input type="radio" name="q1" value="B"> CPU, Memory and I/O Devices</label>
<label><input type="radio" name="q1" value="C"> Only Memory</label>
<label><input type="radio" name="q1" value="D"> Only Input Device</label>
</div>


<div class="question">
<h3>2. Which is a popular microcontroller family?</h3>
<label><input type="radio" name="q2" value="A"> ARM</label>
<label><input type="radio" name="q2" value="B"> HTML</label>
<label><input type="radio" name="q2" value="C"> SQL</label>
<label><input type="radio" name="q2" value="D"> CSS</label>
</div>


<div class="question">
<h3>3. ARM stands for</h3>
<label><input type="radio" name="q3" value="A"> Advanced Register Machine</label>
<label><input type="radio" name="q3" value="B"> Automatic Random Memory</label>
<label><input type="radio" name="q3" value="C"> Advanced RISC Machine</label>
<label><input type="radio" name="q3" value="D"> Advanced Relay Machine</label>
</div>


<div class="question">
<h3>4. Microcontroller uses which memory?</h3>
<label><input type="radio" name="q4" value="A"> RAM Only</label>
<label><input type="radio" name="q4" value="B"> ROM Only</label>
<label><input type="radio" name="q4" value="C"> Cache Only</label>
<label><input type="radio" name="q4" value="D"> RAM and ROM</label>
</div>


<div class="question">
<h3>5. GPIO stands for</h3>
<label><input type="radio" name="q5" value="A"> General Purpose Input Output</label>
<label><input type="radio" name="q5" value="B"> General Program Input Output</label>
<label><input type="radio" name="q5" value="C"> Graphic Port Input Output</label>
<label><input type="radio" name="q5" value="D"> General Power Input Output</label>
</div>


<div class="question">
<h3>6. Embedded systems use</h3>
<label><input type="radio" name="q6" value="A"> Computers only</label>
<label><input type="radio" name="q6" value="B"> Microcontrollers</label>
<label><input type="radio" name="q6" value="C"> Printers only</label>
<label><input type="radio" name="q6" value="D"> Monitors only</label>
</div>


<div class="question">
<h3>7. ADC converts</h3>
<label><input type="radio" name="q7" value="A"> Digital to Analog</label>
<label><input type="radio" name="q7" value="B"> Data to Signal</label>
<label><input type="radio" name="q7" value="C"> Analog to Digital</label>
<label><input type="radio" name="q7" value="D"> Power to Voltage</label>
</div>


<div class="question">
<h3>8. DAC converts</h3>
<label><input type="radio" name="q8" value="A"> Analog to Digital</label>
<label><input type="radio" name="q8" value="B"> Digital to Digital</label>
<label><input type="radio" name="q8" value="C"> Voltage to Current</label>
<label><input type="radio" name="q8" value="D"> Digital to Analog</label>
</div>


<div class="question">
<h3>9. Timer is used for</h3>
<label><input type="radio" name="q9" value="A"> Time Delay Generation</label>
<label><input type="radio" name="q9" value="B"> Data Storage</label>
<label><input type="radio" name="q9" value="C"> Printing</label>
<label><input type="radio" name="q9" value="D"> Networking</label>
</div>


<div class="question">
<h3>10. Interrupt is used for</h3>
<label><input type="radio" name="q10" value="A"> Memory Expansion</label>
<label><input type="radio" name="q10" value="B"> Immediate Response</label>
<label><input type="radio" name="q10" value="C"> Data Deletion</label>
<label><input type="radio" name="q10" value="D"> Program Removal</label>
</div>


<div class="question">
<h3>11. UART is used for</h3>
<label><input type="radio" name="q11" value="A"> Storage</label>
<label><input type="radio" name="q11" value="B"> Power Supply</label>
<label><input type="radio" name="q11" value="C"> Serial Communication</label>
<label><input type="radio" name="q11" value="D"> Cooling</label>
</div>


<div class="question">
<h3>12. SPI is a type of</h3>
<label><input type="radio" name="q12" value="A"> Memory</label>
<label><input type="radio" name="q12" value="B"> Processor</label>
<label><input type="radio" name="q12" value="C"> Sensor</label>
<label><input type="radio" name="q12" value="D"> Communication Protocol</label>
</div>


<div class="question">
<h3>13. I2C is used for</h3>
<label><input type="radio" name="q13" value="A"> Serial Communication</label>
<label><input type="radio" name="q13" value="B"> Power Control</label>
<label><input type="radio" name="q13" value="C"> Cooling</label>
<label><input type="radio" name="q13" value="D"> Storage</label>
</div>


<div class="question">
<h3>14. Flash memory is</h3>
<label><input type="radio" name="q14" value="A"> Volatile Memory</label>
<label><input type="radio" name="q14" value="B"> Non-Volatile Memory</label>
<label><input type="radio" name="q14" value="C"> Temporary Memory</label>
<label><input type="radio" name="q14" value="D"> Cache Memory</label>
</div>


<div class="question">
<h3>15. Embedded system is designed for</h3>
<label><input type="radio" name="q15" value="A"> General Purpose Work</label>
<label><input type="radio" name="q15" value="B"> Gaming</label>
<label><input type="radio" name="q15" value="C"> Specific Application</label>
<label><input type="radio" name="q15" value="D"> Internet Only</label>
</div>


<div class="question">
<h3>16. RTOS stands for</h3>
<label><input type="radio" name="q16" value="A"> Real Time Operating System</label>
<label><input type="radio" name="q16" value="B"> Random Time OS</label>
<label><input type="radio" name="q16" value="C"> Remote Transfer OS</label>
<label><input type="radio" name="q16" value="D"> Real Time Operating System</label>
</div>


<div class="question">
<h3>17. Microcontrollers are used in</h3>
<label><input type="radio" name="q17" value="A"> Washing Machines</label>
<label><input type="radio" name="q17" value="B"> Books</label>
<label><input type="radio" name="q17" value="C"> Paper</label>
<label><input type="radio" name="q17" value="D"> Furniture</label>
</div>


<div class="question">
<h3>18. Embedded C is used for programming</h3>
<label><input type="radio" name="q18" value="A"> Websites</label>
<label><input type="radio" name="q18" value="B"> Microcontrollers</label>
<label><input type="radio" name="q18" value="C"> Databases</label>
<label><input type="radio" name="q18" value="D"> Documents</label>
</div>


<div class="question">
<h3>19. Microcontroller contains</h3>
<label><input type="radio" name="q19" value="A"> Monitor</label>
<label><input type="radio" name="q19" value="B"> Keyboard</label>
<label><input type="radio" name="q19" value="C"> Processor and Memory</label>
<label><input type="radio" name="q19" value="D"> Printer</label>
</div>


<div class="question">
<h3>20. Main advantage of microcontroller is</h3>
<label><input type="radio" name="q20" value="A"> Low Cost and Compact Size</label>
<label><input type="radio" name="q20" value="B"> Large Size</label>
<label><input type="radio" name="q20" value="C"> High Power Consumption</label>
<label><input type="radio" name="q20" value="D"> Slow Operation</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>