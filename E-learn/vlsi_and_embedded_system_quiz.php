<?php
session_start();

$_SESSION['subject'] = "VLSI and Embedded System";
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

<title>VLSI and Embedded System Quiz - LearnHub</title>

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
Semester 5 - VLSI and Embedded System Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">


<div class="question">
<h3>1. VLSI stands for</h3>
<label><input type="radio" name="q1" value="A"> Very Large System Integration</label>
<label><input type="radio" name="q1" value="B"> Very Large Scale Integration</label>
<label><input type="radio" name="q1" value="C"> Variable Large Scale Interface</label>
<label><input type="radio" name="q1" value="D"> Virtual Large System Integration</label>
</div>


<div class="question">
<h3>2. VLSI technology is used for</h3>
<label><input type="radio" name="q2" value="A"> Designing Integrated Circuits</label>
<label><input type="radio" name="q2" value="B"> Printing Documents</label>
<label><input type="radio" name="q2" value="C"> Networking Only</label>
<label><input type="radio" name="q2" value="D"> Storage Devices</label>
</div>


<div class="question">
<h3>3. IC stands for</h3>
<label><input type="radio" name="q3" value="A"> Internal Circuit</label>
<label><input type="radio" name="q3" value="B"> Integrated Control</label>
<label><input type="radio" name="q3" value="C"> Integrated Circuit</label>
<label><input type="radio" name="q3" value="D"> Input Circuit</label>
</div>


<div class="question">
<h3>4. Embedded system is designed for</h3>
<label><input type="radio" name="q4" value="A"> General Computing</label>
<label><input type="radio" name="q4" value="B"> Internet Browsing</label>
<label><input type="radio" name="q4" value="C"> Gaming</label>
<label><input type="radio" name="q4" value="D"> Specific Applications</label>
</div>


<div class="question">
<h3>5. FPGA stands for</h3>
<label><input type="radio" name="q5" value="A"> Field Programmable Gate Array</label>
<label><input type="radio" name="q5" value="B"> Fast Program Gate Array</label>
<label><input type="radio" name="q5" value="C"> Field Power Gate Array</label>
<label><input type="radio" name="q5" value="D"> Fixed Programmable Gate Array</label>
</div>


<div class="question">
<h3>6. Embedded systems use</h3>
<label><input type="radio" name="q6" value="A"> Printer</label>
<label><input type="radio" name="q6" value="B"> Microcontroller</label>
<label><input type="radio" name="q6" value="C"> Scanner</label>
<label><input type="radio" name="q6" value="D"> Monitor</label>
</div>


<div class="question">
<h3>7. HDL is used for</h3>
<label><input type="radio" name="q7" value="A"> Database Design</label>
<label><input type="radio" name="q7" value="B"> Web Design</label>
<label><input type="radio" name="q7" value="C"> Hardware Description</label>
<label><input type="radio" name="q7" value="D"> File Management</label>
</div>


<div class="question">
<h3>8. Verilog is a</h3>
<label><input type="radio" name="q8" value="A"> Programming Language</label>
<label><input type="radio" name="q8" value="B"> Database Language</label>
<label><input type="radio" name="q8" value="C"> Markup Language</label>
<label><input type="radio" name="q8" value="D"> Hardware Description Language</label>
</div>


<div class="question">
<h3>9. ASIC stands for</h3>
<label><input type="radio" name="q9" value="A"> Application Specific Integrated Circuit</label>
<label><input type="radio" name="q9" value="B"> Advanced System IC</label>
<label><input type="radio" name="q9" value="C"> Automatic Circuit System</label>
<label><input type="radio" name="q9" value="D"> Analog IC</label>
</div>


<div class="question">
<h3>10. Embedded C is used for</h3>
<label><input type="radio" name="q10" value="A"> Website Development</label>
<label><input type="radio" name="q10" value="B"> Microcontroller Programming</label>
<label><input type="radio" name="q10" value="C"> Database Management</label>
<label><input type="radio" name="q10" value="D"> Image Editing</label>
</div>


<div class="question">
<h3>11. CMOS technology is used in</h3>
<label><input type="radio" name="q11" value="A"> Motors</label>
<label><input type="radio" name="q11" value="B"> Sensors</label>
<label><input type="radio" name="q11" value="C"> IC Fabrication</label>
<label><input type="radio" name="q11" value="D"> Speakers</label>
</div>


<div class="question">
<h3>12. Microprocessor contains</h3>
<label><input type="radio" name="q12" value="A"> Memory Only</label>
<label><input type="radio" name="q12" value="B"> Input Device</label>
<label><input type="radio" name="q12" value="C"> Output Device</label>
<label><input type="radio" name="q12" value="D"> CPU</label>
</div>


<div class="question">
<h3>13. VHDL is used for</h3>
<label><input type="radio" name="q13" value="A"> Digital Circuit Design</label>
<label><input type="radio" name="q13" value="B"> Web Development</label>
<label><input type="radio" name="q13" value="C"> Networking</label>
<label><input type="radio" name="q13" value="D"> Storage</label>
</div>


<div class="question">
<h3>14. EEPROM is</h3>
<label><input type="radio" name="q14" value="A"> Volatile Memory</label>
<label><input type="radio" name="q14" value="B"> Non-Volatile Memory</label>
<label><input type="radio" name="q14" value="C"> Cache Memory</label>
<label><input type="radio" name="q14" value="D"> Temporary Memory</label>
</div>


<div class="question">
<h3>15. Embedded system has</h3>
<label><input type="radio" name="q15" value="A"> Only Software</label>
<label><input type="radio" name="q15" value="B"> Only Hardware</label>
<label><input type="radio" name="q15" value="C"> Hardware and Software</label>
<label><input type="radio" name="q15" value="D"> No Processor</label>
</div>


<div class="question">
<h3>16. FPGA can be</h3>
<label><input type="radio" name="q16" value="A"> Programmed</label>
<label><input type="radio" name="q16" value="B"> Printed</label>
<label><input type="radio" name="q16" value="C"> Deleted Only</label>
<label><input type="radio" name="q16" value="D"> Reconfigured</label>
</div>


<div class="question">
<h3>17. Embedded systems are used in</h3>
<label><input type="radio" name="q17" value="A"> Automotive Systems</label>
<label><input type="radio" name="q17" value="B"> Books</label>
<label><input type="radio" name="q17" value="C"> Paper</label>
<label><input type="radio" name="q17" value="D"> Furniture</label>
</div>


<div class="question">
<h3>18. VLSI reduces</h3>
<label><input type="radio" name="q18" value="A"> Size and Cost</label>
<label><input type="radio" name="q18" value="B"> Speed</label>
<label><input type="radio" name="q18" value="C"> Efficiency</label>
<label><input type="radio" name="q18" value="D"> Reliability</label>
</div>


<div class="question">
<h3>19. ARM is commonly used in</h3>
<label><input type="radio" name="q19" value="A"> Printers</label>
<label><input type="radio" name="q19" value="B"> Speakers</label>
<label><input type="radio" name="q19" value="C"> Embedded Systems</label>
<label><input type="radio" name="q19" value="D"> Keyboard</label>
</div>


<div class="question">
<h3>20. Main advantage of embedded system is</h3>
<label><input type="radio" name="q20" value="A"> High Power Consumption</label>
<label><input type="radio" name="q20" value="B"> Low Cost and Reliability</label>
<label><input type="radio" name="q20" value="C"> Large Size</label>
<label><input type="radio" name="q20" value="D"> Slow Performance</label>
</div>


<input type="submit" class="submit" value="Submit Quiz">


</form>

</div>

</div>

</body>
</html>