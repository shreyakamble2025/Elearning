<?php
include "connection.php";
error_reporting(0);

$subject = "Switchgear And Protection";

$syllabus_link = "#";
$notes_link = "#";

$syllabus_query = mysqli_query($conn,
"SELECT material_link FROM study_material
WHERE material_type='syllabus'
AND subject='$subject'
LIMIT 1");

if($syllabus_query && mysqli_num_rows($syllabus_query)>0){

    $row = mysqli_fetch_assoc($syllabus_query);
    $syllabus_link = "uploads/".$row['material_link'];

}

$notes_query = mysqli_query($conn,
"SELECT material_link FROM study_material
WHERE material_type='notes'
AND subject='$subject'
LIMIT 1");

if($notes_query && mysqli_num_rows($notes_query)>0){

    $row = mysqli_fetch_assoc($notes_query);
    $notes_link = "uploads/".$row['material_link'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Switchgear And Protection - LearnHub</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
min-height:100vh;
background:linear-gradient(135deg,#0f172a,#1e1b4b,#311042);
color:white;
}

.container{
width:90%;
max-width:1100px;
margin:auto;
padding:30px 0;
}

.topbar{
display:flex;
justify-content:center;
margin-bottom:30px;
}

.search-box{
width:350px;
padding:14px 20px;
border:none;
border-radius:30px;
background:rgba(255,255,255,.08);
color:white;
outline:none;
}

.banner{
height:250px;
border-radius:25px;
background:linear-gradient(135deg,#2563eb,#9333ea);
display:flex;
justify-content:center;
align-items:center;
text-align:center;
margin-bottom:40px;
}

.banner h1{
font-size:50px;
padding:20px;
}

.header{
text-align:center;
margin-bottom:40px;
}

.header h2{
font-size:50px;
color:#38bdf8;
margin-bottom:15px;
}

.header p{
font-size:22px;
color:#d1d5db;
}

.card{
background:rgba(255,255,255,.05);
border-radius:25px;
padding:30px;
backdrop-filter:blur(15px);
}

.card h3{
text-align:center;
color:#38bdf8;
font-size:35px;
margin-bottom:25px;
}

.item-link{
display:flex;
align-items:center;
gap:15px;
padding:18px 20px;
margin-bottom:15px;
text-decoration:none;
color:white;
background:rgba(255,255,255,.05);
border-left:5px solid #38bdf8;
border-radius:12px;
transition:.3s;
}

.item-link:hover{
transform:translateX(8px);
background:rgba(56,189,248,.15);
}

.icon{
font-size:24px;
}

@media(max-width:768px){

.banner h1{
font-size:28px;
}

.header h2{
font-size:32px;
}

.search-box{
width:100%;
}

}

</style>

</head>

<body>

<div class="container">

<div class="topbar">
<input type="text" class="search-box" placeholder="Search Materials...">
</div>

<div class="banner">
<h1>Switchgear And Protection</h1>
</div>

<div class="header">
<h2>Switchgear And Protection</h2>
<p>
Access syllabus, notes, video lectures,
previous question papers, quizzes and certificates.
</p>
</div>

<div class="card">

<h3>Study Materials</h3>

<a href="<?php echo $syllabus_link; ?>" target="_blank" class="item-link">
<span class="icon">📄</span>
Syllabus
</a>

<a href="<?php echo $notes_link; ?>" target="_blank" class="item-link">
<span class="icon">📝</span>
Notes
</a>

<a href="https://youtube.com/" target="_blank" class="item-link">
<span class="icon">🎥</span>
Video Lectures
</a>

<a href="uploads/sap_qp.pdf" target="_blank" class="item-link">
<span class="icon">📚</span>
Previous Question Papers
</a>

<a href="sap_quiz.php" class="item-link">
<span class="icon">✍️</span>
Quiz
</a>

<a href="sap_certificate.php" class="item-link">
<span class="icon">🎓</span>
Certificate
</a>

</div>

</div>

</body>

</html>