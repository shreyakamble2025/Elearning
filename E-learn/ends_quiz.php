<?php
session_start();

$_SESSION['subject'] = "Entrepreneurship Development And Startups";
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

<title>Entrepreneurship Development And Startups Quiz - LearnHub</title>

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
Semester 6 - Entrepreneurship Development And Startups Quiz
</h1>

<div class="card">

<form action="quiz1.php" method="post">

<div class="question">
<h3>1. An entrepreneur is a person who</h3>
<label><input type="radio" name="q1" value="A"> Starts and Manages a Business</label>
<label><input type="radio" name="q1" value="B"> Only Invests Money</label>
<label><input type="radio" name="q1" value="C"> Works as Employee Only</label>
<label><input type="radio" name="q1" value="D"> Teaches in School</label>
</div>

<div class="question">
<h3>2. Startup means</h3>
<label><input type="radio" name="q2" value="A"> Government Office</label>
<label><input type="radio" name="q2" value="B"> New Business Venture</label>
<label><input type="radio" name="q2" value="C"> Factory Building</label>
<label><input type="radio" name="q2" value="D"> Bank Account</label>
</div>

<div class="question">
<h3>3. Business plan is</h3>
<label><input type="radio" name="q3" value="A"> Advertisement</label>
<label><input type="radio" name="q3" value="B"> Report Card</label>
<label><input type="radio" name="q3" value="C"> Roadmap for Business</label>
<label><input type="radio" name="q3" value="D"> Tax Receipt</label>
</div>

<div class="question">
<h3>4. Market research helps in</h3>
<label><input type="radio" name="q4" value="A"> Playing Games</label>
<label><input type="radio" name="q4" value="B"> Decoration</label>
<label><input type="radio" name="q4" value="C"> Travelling</label>
<label><input type="radio" name="q4" value="D"> Understanding Customer Needs</label>
</div>

<div class="question">
<h3>5. Innovation means</h3>
<label><input type="radio" name="q5" value="A"> New Ideas and Improvements</label>
<label><input type="radio" name="q5" value="B"> Copying Others</label>
<label><input type="radio" name="q5" value="C"> Avoiding Changes</label>
<label><input type="radio" name="q5" value="D"> Selling Assets</label>
</div>

<div class="question">
<h3>6. Capital is required for</h3>
<label><input type="radio" name="q6" value="A"> Entertainment</label>
<label><input type="radio" name="q6" value="B"> Starting Business Operations</label>
<label><input type="radio" name="q6" value="C"> Holidays</label>
<label><input type="radio" name="q6" value="D"> Sports</label>
</div>

<div class="question">
<h3>7. Risk-taking is a quality of</h3>
<label><input type="radio" name="q7" value="A"> Teacher</label>
<label><input type="radio" name="q7" value="B"> Doctor</label>
<label><input type="radio" name="q7" value="C"> Entrepreneur</label>
<label><input type="radio" name="q7" value="D"> Clerk</label>
</div>

<div class="question">
<h3>8. SWOT analysis stands for</h3>
<label><input type="radio" name="q8" value="A"> Sales, Work, Office, Trade</label>
<label><input type="radio" name="q8" value="B"> Strong, Weak, Open, Trend</label>
<label><input type="radio" name="q8" value="C"> Start, Work, Operate, Train</label>
<label><input type="radio" name="q8" value="D"> Strengths, Weaknesses, Opportunities, Threats</label>
</div>

<div class="question">
<h3>9. Profit is</h3>
<label><input type="radio" name="q9" value="A"> Income Minus Expenses</label>
<label><input type="radio" name="q9" value="B"> Only Sales</label>
<label><input type="radio" name="q9" value="C"> Only Expenses</label>
<label><input type="radio" name="q9" value="D"> Tax</label>
</div>

<div class="question">
<h3>10. Marketing helps to</h3>
<label><input type="radio" name="q10" value="A"> Reduce Customers</label>
<label><input type="radio" name="q10" value="B"> Promote Products and Services</label>
<label><input type="radio" name="q10" value="C"> Close Business</label>
<label><input type="radio" name="q10" value="D"> Increase Losses</label>
</div>

<div class="question">
<h3>11. Startup India is an initiative of</h3>
<label><input type="radio" name="q11" value="A"> Private Company</label>
<label><input type="radio" name="q11" value="B"> NGO</label>
<label><input type="radio" name="q11" value="C"> Government of India</label>
<label><input type="radio" name="q11" value="D"> School</label>
</div>

<div class="question">
<h3>12. Financial planning helps in</h3>
<label><input type="radio" name="q12" value="A"> Wasting Money</label>
<label><input type="radio" name="q12" value="B"> Increasing Debt Only</label>
<label><input type="radio" name="q12" value="C"> Ignoring Expenses</label>
<label><input type="radio" name="q12" value="D"> Managing Business Funds</label>
</div>

<div class="question">
<h3>13. Business opportunity means</h3>
<label><input type="radio" name="q13" value="A"> Chance to Start or Expand Business</label>
<label><input type="radio" name="q13" value="B"> Holiday Trip</label>
<label><input type="radio" name="q13" value="C"> Government Tax</label>
<label><input type="radio" name="q13" value="D"> Business Loss</label>
</div>

<div class="question">
<h3>14. Leadership is important for</h3>
<label><input type="radio" name="q14" value="A"> Avoiding Work</label>
<label><input type="radio" name="q14" value="B"> Managing Team Effectively</label>
<label><input type="radio" name="q14" value="C"> Increasing Errors</label>
<label><input type="radio" name="q14" value="D"> Closing Business</label>
</div>

<div class="question">
<h3>15. Customer satisfaction leads to</h3>
<label><input type="radio" name="q15" value="A"> Business Failure</label>
<label><input type="radio" name="q15" value="B"> Complaints Only</label>
<label><input type="radio" name="q15" value="C"> Business Growth</label>
<label><input type="radio" name="q15" value="D"> Market Loss</label>
</div>

<div class="question">
<h3>16. Entrepreneurship creates</h3>
<label><input type="radio" name="q16" value="A"> Unemployment</label>
<label><input type="radio" name="q16" value="B"> Losses</label>
<label><input type="radio" name="q16" value="C"> Inflation Only</label>
<label><input type="radio" name="q16" value="D"> Employment Opportunities</label>
</div>

<div class="question">
<h3>17. A successful entrepreneur should be</h3>
<label><input type="radio" name="q17" value="A"> Creative and Confident</label>
<label><input type="radio" name="q17" value="B"> Lazy</label>
<label><input type="radio" name="q17" value="C"> Unorganized</label>
<label><input type="radio" name="q17" value="D"> Irresponsible</label>
</div>

<div class="question">
<h3>18. Business ethics means</h3>
<label><input type="radio" name="q18" value="A"> Breaking Rules</label>
<label><input type="radio" name="q18" value="B"> Following Moral Principles in Business</label>
<label><input type="radio" name="q18" value="C"> Avoiding Customers</label>
<label><input type="radio" name="q18" value="D"> Increasing Costs</label>
</div>

<div class="question">
<h3>19. Startup funding can come from</h3>
<label><input type="radio" name="q19" value="A"> Customers Only</label>
<label><input type="radio" name="q19" value="B"> Employees Only</label>
<label><input type="radio" name="q19" value="C"> Investors and Banks</label>
<label><input type="radio" name="q19" value="D"> Schools Only</label>
</div>

<div class="question">
<h3>20. Entrepreneurship contributes to</h3>
<label><input type="radio" name="q20" value="A"> Economic Development</label>
<label><input type="radio" name="q20" value="B"> Business Closure</label>
<label><input type="radio" name="q20" value="C"> Unemployment</label>
<label><input type="radio" name="q20" value="D"> Market Decline</label>
</div>

<input type="submit" class="submit" value="Submit Quiz">

</form>

</div>

</div>

</body>
</html>

