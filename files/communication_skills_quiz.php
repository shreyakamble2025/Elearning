<?php
session_start();

$_SESSION['subject'] = "Communication Skills";
$_SESSION['semester'] = "Semester 1";


$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'A',
5=>'A',
6=>'A',
7=>'A',
8=>'A',
9=>'A',
10=>'A',
11=>'A',
12=>'A',
13=>'A',
14=>'A',
15=>'A',
16=>'A',
17=>'A',
18=>'A',
19=>'A',
20=>'A'

);

?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Communication Skills Quiz - LearnHub</title>


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
cursor:pointer;

}



.submit{

width:100%;
padding:15px;
border:none;
border-radius:30px;
background:#0d6efd;
color:white;
font-size:18px;
cursor:pointer;

}


</style>


</head>


<body>


<div class="container">


<h1 class="heading">
Semester 1 - Communication Skills Quiz
</h1>


<div class="card">


<form action="quiz1.php" method="post">


<div class="question">

<h3>1. Communication means</h3>

<label><input type="radio" name="q1" value="A"> Sleeping</label>

<label><input type="radio" name="q1" value="B"> Exchange of Information</label>

<label><input type="radio" name="q1" value="C"> Reading Only</label>

<label><input type="radio" name="q1" value="D"> Writing Only</label>

</div>



<div class="question">

<h3>2. Which is a verbal communication?</h3>

<label><input type="radio" name="q2" value="A"> Speaking</label>

<label><input type="radio" name="q2" value="B"> Gesture</label>

<label><input type="radio" name="q2" value="C"> Sign Board</label>

<label><input type="radio" name="q2" value="D"> Facial Expression</label>

</div>



<div class="question">

<h3>3. Which is a non-verbal communication?</h3>

<label><input type="radio" name="q3" value="A"> Letter</label>

<label><input type="radio" name="q3" value="B"> Speaking</label>

<label><input type="radio" name="q3" value="C"> Body Language</label>

<label><input type="radio" name="q3" value="D"> Email</label>

</div>



<div class="question">

<h3>4. Which one is a formal communication?</h3>

<label><input type="radio" name="q4" value="A"> Office Memo</label>

<label><input type="radio" name="q4" value="B"> Chatting</label>

<label><input type="radio" name="q4" value="C"> Gossip</label>

<label><input type="radio" name="q4" value="D"> Rumours</label>

</div>



<div class="question">

<h3>5. Email is a</h3>

<label><input type="radio" name="q5" value="A"> Written Communication</label>

<label><input type="radio" name="q5" value="B"> Non-Verbal Communication</label>

<label><input type="radio" name="q5" value="C"> Visual Communication</label>

<label><input type="radio" name="q5" value="D"> None</label>

</div>



<div class="question">

<h3>6. Most important communication skill is</h3>

<label><input type="radio" name="q6" value="A"> Listening</label>

<label><input type="radio" name="q6" value="B"> Sleeping</label>

<label><input type="radio" name="q6" value="C"> Running</label>

<label><input type="radio" name="q6" value="D"> Driving</label>

</div>



<div class="question">

<h3>7. Resume is used for</h3>

<label><input type="radio" name="q7" value="A"> Job Application</label>

<label><input type="radio" name="q7" value="B"> Shopping</label>

<label><input type="radio" name="q7" value="C"> Travel</label>

<label><input type="radio" name="q7" value="D"> Banking</label>

</div>



<div class="question">

<h3>8. Barrier of communication is</h3>

<label><input type="radio" name="q8" value="A"> Noise</label>

<label><input type="radio" name="q8" value="B"> Listening</label>

<label><input type="radio" name="q8" value="C"> Reading</label>

<label><input type="radio" name="q8" value="D"> Writing</label>

</div>



<div class="question">

<h3>9. Full form of CV is</h3>

<label><input type="radio" name="q9" value="A"> Curriculum Vitae</label>

<label><input type="radio" name="q9" value="B"> Current Value</label>

<label><input type="radio" name="q9" value="C"> Computer Vision</label>

<label><input type="radio" name="q9" value="D"> Career Version</label>

</div>



<div class="question">

<h3>10. Group discussion improves</h3>

<label><input type="radio" name="q10" value="A"> Communication Skills</label>

<label><input type="radio" name="q10" value="B"> Drawing Skills</label>

<label><input type="radio" name="q10" value="C"> Typing Speed</label>

<label><input type="radio" name="q10" value="D"> Memory Only</label>

</div>

<div class="question">

<h3>11. Example of written communication is</h3>

<label>
<input type="radio" name="q11" value="A">
Letter
</label>

<label>
<input type="radio" name="q11" value="B">
Speech
</label>

<label>
<input type="radio" name="q11" value="C">
Gesture
</label>

<label>
<input type="radio" name="q11" value="D">
Eye Contact
</label>

</div>



<div class="question">

<h3>12. Good communication requires</h3>

<label>
<input type="radio" name="q12" value="A">
Clarity
</label>

<label>
<input type="radio" name="q12" value="B">
Confusion
</label>

<label>
<input type="radio" name="q12" value="C">
Anger
</label>

<label>
<input type="radio" name="q12" value="D">
Silence
</label>

</div>



<div class="question">

<h3>13. Interview is a type of</h3>

<label>
<input type="radio" name="q13" value="A">
Formal Communication
</label>

<label>
<input type="radio" name="q13" value="B">
Informal Communication
</label>

<label>
<input type="radio" name="q13" value="C">
Rumour
</label>

<label>
<input type="radio" name="q13" value="D">
Gossip
</label>

</div>



<div class="question">

<h3>14. Example of visual communication is</h3>

<label>
<input type="radio" name="q14" value="A">
Chart
</label>

<label>
<input type="radio" name="q14" value="B">
Phone Call
</label>

<label>
<input type="radio" name="q14" value="C">
Speech
</label>

<label>
<input type="radio" name="q14" value="D">
Conversation
</label>

</div>



<div class="question">

<h3>15. Telephone communication is</h3>

<label>
<input type="radio" name="q15" value="A">
Verbal
</label>

<label>
<input type="radio" name="q15" value="B">
Written
</label>

<label>
<input type="radio" name="q15" value="C">
Visual
</label>

<label>
<input type="radio" name="q15" value="D">
None
</label>

</div>



<div class="question">

<h3>16. Body language is</h3>

<label>
<input type="radio" name="q16" value="A">
Non-Verbal Communication
</label>

<label>
<input type="radio" name="q16" value="B">
Written Communication
</label>

<label>
<input type="radio" name="q16" value="C">
Formal Letter
</label>

<label>
<input type="radio" name="q16" value="D">
Email
</label>

</div>



<div class="question">

<h3>17. Listening skill includes</h3>

<label>
<input type="radio" name="q17" value="A">
Paying Attention
</label>

<label>
<input type="radio" name="q17" value="B">
Ignoring
</label>

<label>
<input type="radio" name="q17" value="C">
Sleeping
</label>

<label>
<input type="radio" name="q17" value="D">
Talking Continuously
</label>

</div>



<div class="question">

<h3>18. Communication cycle starts with</h3>

<label>
<input type="radio" name="q18" value="A">
Sender
</label>

<label>
<input type="radio" name="q18" value="B">
Receiver
</label>

<label>
<input type="radio" name="q18" value="C">
Noise
</label>

<label>
<input type="radio" name="q18" value="D">
Feedback
</label>

</div>



<div class="question">

<h3>19. Feedback helps to</h3>

<label>
<input type="radio" name="q19" value="A">
Confirm Understanding
</label>

<label>
<input type="radio" name="q19" value="B">
Increase Noise
</label>

<label>
<input type="radio" name="q19" value="C">
End Communication
</label>

<label>
<input type="radio" name="q19" value="D">
Avoid Discussion
</label>

</div>



<div class="question">

<h3>20. Communication without words is</h3>

<label>
<input type="radio" name="q20" value="A">
Non-Verbal Communication
</label>

<label>
<input type="radio" name="q20" value="B">
Written Communication
</label>

<label>
<input type="radio" name="q20" value="C">
Formal Communication
</label>

<label>
<input type="radio" name="q20" value="D">
Verbal Communication
</label>

</div>



<input type="submit" class="submit" value="Submit Quiz">


</form>


</div>

</div>


</body>

</html>