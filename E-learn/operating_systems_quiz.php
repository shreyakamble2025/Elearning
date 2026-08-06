<?php
session_start();

$_SESSION['subject'] = "Operating Systems";
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

<title>Operating Systems Quiz - LearnHub</title>

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
Semester 5 - Operating Systems Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. Operating System acts as</h3>
<label><input type="radio" name="q1" value="A"> Compiler</label>
<label><input type="radio" name="q1" value="B"> Interface between User and Hardware</label>
<label><input type="radio" name="q1" value="C"> Database</label>
<label><input type="radio" name="q1" value="D"> Antivirus</label>
</div>

<div class="question">
<h3>2. Example of Operating System</h3>
<label><input type="radio" name="q2" value="A"> Windows</label>
<label><input type="radio" name="q2" value="B"> MS Word</label>
<label><input type="radio" name="q2" value="C"> Excel</label>
<label><input type="radio" name="q2" value="D"> Photoshop</label>
</div>

<div class="question">
<h3>3. CPU scheduling is related to</h3>
<label><input type="radio" name="q3" value="A"> Memory</label>
<label><input type="radio" name="q3" value="B"> Files</label>
<label><input type="radio" name="q3" value="C"> Process Management</label>
<label><input type="radio" name="q3" value="D"> Networking</label>
</div>

<div class="question">
<h3>4. Which is not an Operating System?</h3>
<label><input type="radio" name="q4" value="A"> Linux</label>
<label><input type="radio" name="q4" value="B"> Android</label>
<label><input type="radio" name="q4" value="C"> Windows</label>
<label><input type="radio" name="q4" value="D"> MS PowerPoint</label>
</div>

<div class="question">
<h3>5. OS manages</h3>
<label><input type="radio" name="q5" value="A"> Hardware Resources</label>
<label><input type="radio" name="q5" value="B"> Only Keyboard</label>
<label><input type="radio" name="q5" value="C"> Only Monitor</label>
<label><input type="radio" name="q5" value="D"> Only Printer</label>
</div>

<div class="question">
<h3>6. RAM is</h3>
<label><input type="radio" name="q6" value="A"> Permanent Memory</label>
<label><input type="radio" name="q6" value="B"> Primary Memory</label>
<label><input type="radio" name="q6" value="C"> Optical Memory</label>
<label><input type="radio" name="q6" value="D"> Secondary Memory</label>
</div>

<div class="question">
<h3>7. File management is handled by</h3>
<label><input type="radio" name="q7" value="A"> Browser</label>
<label><input type="radio" name="q7" value="B"> Compiler</label>
<label><input type="radio" name="q7" value="C"> Operating System</label>
<label><input type="radio" name="q7" value="D"> Database</label>
</div>

<div class="question">
<h3>8. Deadlock occurs when</h3>
<label><input type="radio" name="q8" value="A"> CPU Stops</label>
<label><input type="radio" name="q8" value="B"> Power Fails</label>
<label><input type="radio" name="q8" value="C"> Memory Full</label>
<label><input type="radio" name="q8" value="D"> Processes Wait Forever</label>
</div>

<div class="question">
<h3>9. Linux is</h3>
<label><input type="radio" name="q9" value="A"> Open Source OS</label>
<label><input type="radio" name="q9" value="B"> Antivirus</label>
<label><input type="radio" name="q9" value="C"> Database</label>
<label><input type="radio" name="q9" value="D"> Browser</label>
</div>

<div class="question">
<h3>10. Process is</h3>
<label><input type="radio" name="q10" value="A"> Program in Execution</label>
<label><input type="radio" name="q10" value="B"> Hardware Device</label>
<label><input type="radio" name="q10" value="C"> Storage Unit</label>
<label><input type="radio" name="q10" value="D"> File</label>
</div>

<div class="question">
<h3>11. Main memory is also called</h3>
<label><input type="radio" name="q11" value="A"> Hard Disk</label>
<label><input type="radio" name="q11" value="B"> SSD</label>
<label><input type="radio" name="q11" value="C"> RAM</label>
<label><input type="radio" name="q11" value="D"> DVD</label>
</div>

<div class="question">
<h3>12. Which scheduling algorithm executes first arrived process first?</h3>
<label><input type="radio" name="q12" value="A"> Round Robin</label>
<label><input type="radio" name="q12" value="B"> Priority</label>
<label><input type="radio" name="q12" value="C"> SJF</label>
<label><input type="radio" name="q12" value="D"> FCFS</label>
</div>

<div class="question">
<h3>13. Android is based on</h3>
<label><input type="radio" name="q13" value="A"> Linux Kernel</label>
<label><input type="radio" name="q13" value="B"> DOS</label>
<label><input type="radio" name="q13" value="C"> UNIX Only</label>
<label><input type="radio" name="q13" value="D"> BIOS</label>
</div>

<div class="question">
<h3>14. Virtual Memory is</h3>
<label><input type="radio" name="q14" value="A"> Physical RAM</label>
<label><input type="radio" name="q14" value="B"> Extension of Main Memory</label>
<label><input type="radio" name="q14" value="C"> CPU Register</label>
<label><input type="radio" name="q14" value="D"> Cache Memory</label>
</div>

<div class="question">
<h3>15. GUI stands for</h3>
<label><input type="radio" name="q15" value="A"> General User Interface</label>
<label><input type="radio" name="q15" value="B"> Graphic Utility Interface</label>
<label><input type="radio" name="q15" value="C"> Graphical User Interface</label>
<label><input type="radio" name="q15" value="D"> General Utility Input</label>
</div>

<div class="question">
<h3>16. DOS is</h3>
<label><input type="radio" name="q16" value="A"> GUI OS</label>
<label><input type="radio" name="q16" value="B"> Network OS</label>
<label><input type="radio" name="q16" value="C"> Real-Time OS</label>
<label><input type="radio" name="q16" value="D"> Command Line OS</label>
</div>

<div class="question">
<h3>17. OS provides</h3>
<label><input type="radio" name="q17" value="A"> Security</label>
<label><input type="radio" name="q17" value="B"> Resource Management</label>
<label><input type="radio" name="q17" value="C"> User Interface</label>
<label><input type="radio" name="q17" value="D"> All of These</label>
</div>

<div class="question">
<h3>18. Context Switching occurs between</h3>
<label><input type="radio" name="q18" value="A"> Files</label>
<label><input type="radio" name="q18" value="B"> Processes</label>
<label><input type="radio" name="q18" value="C"> Folders</label>
<label><input type="radio" name="q18" value="D"> Databases</label>
</div>

<div class="question">
<h3>19. UNIX is a</h3>
<label><input type="radio" name="q19" value="A"> Programming Language</label>
<label><input type="radio" name="q19" value="B"> Database</label>
<label><input type="radio" name="q19" value="C"> Operating System</label>
<label><input type="radio" name="q19" value="D"> Browser</label>
</div>

<div class="question">
<h3>20. Main purpose of OS is</h3>
<label><input type="radio" name="q20" value="A"> Manage Computer Resources</label>
<label><input type="radio" name="q20" value="B"> Create Documents</label>
<label><input type="radio" name="q20" value="C"> Design Graphics</label>
<label><input type="radio" name="q20" value="D"> Browse Internet</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>