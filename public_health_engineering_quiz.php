<?php
session_start();

$_SESSION['subject'] = "Public Health Engineering";
$_SESSION['semester'] = "Semester 3";

$_SESSION['answers']=array(

1=>'B',
2=>'A',
3=>'D',
4=>'C',
5=>'B',
6=>'A',
7=>'D',
8=>'C',
9=>'B',
10=>'A',
11=>'D',
12=>'C',
13=>'B',
14=>'A',
15=>'D',
16=>'C',
17=>'B',
18=>'A',
19=>'D',
20=>'B'

);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Public Health Engineering Quiz - LearnHub</title>

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
Public Health Engineering Quiz
</h1>

<p class="subheading">
Test your knowledge of Public Health Engineering.
</p>

<div class="card">

<form action="check_quiz.php" method="post">

<div class="question-card">
<div class="question-title">
1. Public Health Engineering mainly deals with
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q1" value="A" required>
Road Construction
</label>

<label class="option-label">
<input type="radio" name="q1" value="B">
Water Supply and Sanitation
</label>

<label class="option-label">
<input type="radio" name="q1" value="C">
Bridge Design
</label>

<label class="option-label">
<input type="radio" name="q1" value="D">
Railway Engineering
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
2. The main source of drinking water is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q2" value="A" required>
Surface Water and Groundwater
</label>

<label class="option-label">
<input type="radio" name="q2" value="B">
Road Drainage
</label>

<label class="option-label">
<input type="radio" name="q2" value="C">
Industrial Waste
</label>

<label class="option-label">
<input type="radio" name="q2" value="D">
Sewage
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
3. Water treatment is required to remove
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q3" value="A" required>
Oxygen
</label>

<label class="option-label">
<input type="radio" name="q3" value="B">
Hydrogen
</label>

<label class="option-label">
<input type="radio" name="q3" value="C">
Nitrogen
</label>

<label class="option-label">
<input type="radio" name="q3" value="D">
Impurities
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
4. The process of killing harmful bacteria in water is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q4" value="A" required>
Sedimentation
</label>

<label class="option-label">
<input type="radio" name="q4" value="B">
Filtration
</label>

<label class="option-label">
<input type="radio" name="q4" value="C">
Disinfection
</label>

<label class="option-label">
<input type="radio" name="q4" value="D">
Aeration
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
5. Which chemical is commonly used for water disinfection?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q5" value="A" required>
Lime
</label>

<label class="option-label">
<input type="radio" name="q5" value="B">
Chlorine
</label>

<label class="option-label">
<input type="radio" name="q5" value="C">
Cement
</label>

<label class="option-label">
<input type="radio" name="q5" value="D">
Sand
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
6. The process of removing suspended particles from water is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q6" value="A" required>
Sedimentation
</label>

<label class="option-label">
<input type="radio" name="q6" value="B">
Chlorination
</label>

<label class="option-label">
<input type="radio" name="q6" value="C">
Distillation
</label>

<label class="option-label">
<input type="radio" name="q6" value="D">
Boiling
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
7. A filter is used to remove
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q7" value="A" required>
Gases
</label>

<label class="option-label">
<input type="radio" name="q7" value="B">
Chemicals
</label>

<label class="option-label">
<input type="radio" name="q7" value="C">
Heat
</label>

<label class="option-label">
<input type="radio" name="q7" value="D">
Fine Suspended Impurities
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
8. Sewerage system is used for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q8" value="A" required>
Water Storage
</label>

<label class="option-label">
<input type="radio" name="q8" value="B">
Road Construction
</label>

<label class="option-label">
<input type="radio" name="q8" value="C">
Collection and Disposal of Sewage
</label>

<label class="option-label">
<input type="radio" name="q8" value="D">
Bridge Construction
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
9. The pipe carrying sewage is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q9" value="A" required>
Water Main
</label>

<label class="option-label">
<input type="radio" name="q9" value="B">
Sewer
</label>

<label class="option-label">
<input type="radio" name="q9" value="C">
Aqueduct
</label>

<label class="option-label">
<input type="radio" name="q9" value="D">
Canal
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
10. Septic tank is used where
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q10" value="A" required>
No Underground Sewer System Exists
</label>

<label class="option-label">
<input type="radio" name="q10" value="B">
Water Treatment Plant Exists
</label>

<label class="option-label">
<input type="radio" name="q10" value="C">
Dam Exists
</label>

<label class="option-label">
<input type="radio" name="q10" value="D">
Bridge Exists
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
11. Ventilation helps in
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q11" value="A" required>
Water Purification
</label>

<label class="option-label">
<input type="radio" name="q11" value="B">
Sewage Treatment
</label>

<label class="option-label">
<input type="radio" name="q11" value="C">
Road Construction
</label>

<label class="option-label">
<input type="radio" name="q11" value="D">
Providing Fresh Air
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
12. Rainwater harvesting is done to
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q12" value="A" required>
Waste Water
</label>

<label class="option-label">
<input type="radio" name="q12" value="B">
Increase Pollution
</label>

<label class="option-label">
<input type="radio" name="q12" value="C">
Conserve Water
</label>

<label class="option-label">
<input type="radio" name="q12" value="D">
Reduce Air Quality
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
13. Water borne diseases spread through
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q13" value="A" required>
Air
</label>

<label class="option-label">
<input type="radio" name="q13" value="B">
Contaminated Water
</label>

<label class="option-label">
<input type="radio" name="q13" value="C">
Sound
</label>

<label class="option-label">
<input type="radio" name="q13" value="D">
Light
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
14. Example of water borne disease is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q14" value="A" required>
Cholera
</label>

<label class="option-label">
<input type="radio" name="q14" value="B">
Asthma
</label>

<label class="option-label">
<input type="radio" name="q14" value="C">
Diabetes
</label>

<label class="option-label">
<input type="radio" name="q14" value="D">
Cancer
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
15. Manhole is provided in sewer line for
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q15" value="A" required>
Decoration
</label>

<label class="option-label">
<input type="radio" name="q15" value="B">
Water Storage
</label>

<label class="option-label">
<input type="radio" name="q15" value="C">
Road Crossing
</label>

<label class="option-label">
<input type="radio" name="q15" value="D">
Inspection and Cleaning
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
16. Water supply system includes
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q16" value="A" required>
Collection, Treatment and Distribution
</label>

<label class="option-label">
<input type="radio" name="q16" value="B">
Road Construction
</label>

<label class="option-label">
<input type="radio" name="q16" value="C">
Bridge Maintenance
</label>

<label class="option-label">
<input type="radio" name="q16" value="D">
Building Painting
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
17. The process of adding chlorine to water is called
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q17" value="A" required>
Filtration
</label>

<label class="option-label">
<input type="radio" name="q17" value="B">
Chlorination
</label>

<label class="option-label">
<input type="radio" name="q17" value="C">
Aeration
</label>

<label class="option-label">
<input type="radio" name="q17" value="D">
Sedimentation
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
18. Which structure stores treated water?
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q18" value="A" required>
Overhead Tank
</label>

<label class="option-label">
<input type="radio" name="q18" value="B">
Manhole
</label>

<label class="option-label">
<input type="radio" name="q18" value="C">
Septic Tank
</label>

<label class="option-label">
<input type="radio" name="q18" value="D">
Drain
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
19. The main purpose of sanitation is
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q19" value="A" required>
Increase Pollution
</label>

<label class="option-label">
<input type="radio" name="q19" value="B">
Improve Public Health
</label>

<label class="option-label">
<input type="radio" name="q19" value="C">
Reduce Water Supply
</label>

<label class="option-label">
<input type="radio" name="q19" value="D">
Increase Waste
</label>

</div>
</div>

<div class="question-card">
<div class="question-title">
20. Public Health Engineering aims to provide
</div>

<div class="options-grid">

<label class="option-label">
<input type="radio" name="q20" value="A" required>
Safe Water and Proper Sanitation
</label>

<label class="option-label">
<input type="radio" name="q20" value="B">
Road Networks Only
</label>

<label class="option-label">
<input type="radio" name="q20" value="C">
Bridge Construction Only
</label>

<label class="option-label">
<input type="radio" name="q20" value="D">
Railway Services
</label>

</div>
</div>

<input type="hidden" name="subject" value="Public Health Engineering">
<input type="hidden" name="semester" value="Semester 3">

<button type="submit" class="btn-submit">
Submit Quiz
</button>

</form>

</div>

</div>

</body>
</html>