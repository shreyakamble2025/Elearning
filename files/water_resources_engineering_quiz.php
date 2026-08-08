<?php
session_start();

$_SESSION['subject'] = "Water Resources Engineering";
$_SESSION['semester'] = "Semester 3";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'C',
4=>'D',
5=>'B',
6=>'A',
7=>'C',
8=>'D',
9=>'B',
10=>'A'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Water Resources Engineering Quiz - LearnHub</title>

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
margin-bottom:10px;
}

.subheading{
text-align:center;
color:#cbd5e1;
margin-bottom:30px;
}

.card{
background:rgba(255,255,255,0.06);
backdrop-filter:blur(15px);
padding:30px;
border-radius:20px;
}

.question-card{
background:rgba(255,255,255,0.05);
padding:20px;
margin-bottom:20px;
border-radius:15px;
}

.question-title{
color:#38bdf8;
margin-bottom:15px;
font-size:18px;
}

.options-grid{
display:flex;
flex-direction:column;
gap:10px;
}

.option-label{
display:block;
padding:10px;
background:rgba(255,255,255,0.05);
border-radius:10px;
cursor:pointer;
}

.option-label input{
margin-right:10px;
}

.btn-submit{
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
Water Resources Engineering Quiz
</h1>


<p class="subheading">
Test your knowledge of Water Resources Engineering.
</p>


<div class="card">


<form action="check_quiz.php" method="post">


<div class="question-card">

<div class="question-title">
1. Water Resources Engineering deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Building Construction
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Management of water resources
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Road Design
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Railway Engineering
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
2. Hydrology is the study of
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Water occurrence and movement
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Steel structures
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Road traffic
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Building materials
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
3. A dam is constructed for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Road transport
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Building work
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Storage of water
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Railway work
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
4. Rainfall measurement is done by using
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Thermometer
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Barometer
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Speedometer
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Rain gauge
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
5. Irrigation means
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Flood control only
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Artificial supply of water to crops
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Road maintenance
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Building construction
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
6. Canal is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Carrying irrigation water
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Transporting vehicles
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Storing cement
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Building houses
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
7. Groundwater is obtained from
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Clouds
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Rivers only
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Underground aquifers
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Sea waves
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
8. Flood control is achieved by
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Buildings
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Roads
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Railways
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Dams and reservoirs
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
9. Reservoir is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Road construction
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Water storage
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Steel production
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Building painting
</label>

</div>
</div>



<div class="question-card">

<div class="question-title">
10. Watershed management aims to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
Conserve water and soil
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Increase pollution
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Destroy resources
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Reduce rainfall
</label>

</div>
</div>

<div class="question-card">

<div class="question-title">
11. The process of removing excess water from land is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Drainage
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Irrigation
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Storage
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Filtration
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
12. The main purpose of a dam is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Water storage and control
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Road construction
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Building houses
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Railway work
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
13. The study of rivers is known as
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Hydrology
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Geology
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Traffic Engineering
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Structural Engineering
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
14. A spillway is provided in a dam to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Release excess water
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Store cement
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Build roads
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Measure temperature
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
15. The instrument used to measure water level is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Staff gauge
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Rain gauge
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Thermometer
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Barometer
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
16. Hydroelectric power is generated using
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Water energy
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Coal only
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Petrol only
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Gas only
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
17. An aquifer stores
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Groundwater
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Air
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Soil only
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Oil
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
18. Water conservation helps to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Save water resources
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Increase wastage
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Increase pollution
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Reduce storage
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
19. Irrigation is mainly required for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Agriculture
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Road construction
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Building design
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Railway track
</label>

</div>
</div>


<div class="question-card">

<div class="question-title">
20. The main objective of water resources engineering is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Efficient management of water resources
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Increase pollution
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Destroy water sources
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Only road construction
</label>

</div>
</div>


<input type="hidden" name="subject" value="Water Resources Engineering">

<input type="hidden" name="semester" value="Semester 3">


<button type="submit" class="btn-submit">
Submit Quiz
</button>


</form>

</div>

</div>

</body>

</html>