<?php
include "connection.php";
error_reporting(0);

$syllabus_link = "#";
$notes_link = "#";

$syllabus_query = mysqli_query($conn, "SELECT material_link FROM study_material WHERE material_type='syllabus' LIMIT 1");
if($syllabus_query && mysqli_num_rows($syllabus_query) > 0){
    $row = mysqli_fetch_assoc($syllabus_query);
    $syllabus_link = "uploads/" . $row['material_link'];
}

$notes_query = mysqli_query($conn, "SELECT material_link FROM study_material WHERE material_type='notes' LIMIT 1");
if($notes_query && mysqli_num_rows($notes_query) > 0){
    $row = mysqli_fetch_assoc($notes_query);
    $notes_link = "uploads/" . $row['material_link'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Communication Skills - LearnHub</title>

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
    background:linear-gradient(135deg,#2d4a8a,#5b2c83);
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
    margin-bottom:40px;
}

.banner h1{
    font-size:55px;
}

.header{
    text-align:center;
    margin-bottom:40px;
}

.header h2{
    font-size:60px;
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
    font-size:35px;
}

.header h2{
    font-size:40px;
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
        <h1>Communication Skills</h1>
    </div>

    <div class="header">
        <h2>Communication Skills</h2>
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

        <a href="notes.php" target="_blank" class="item-link">
            <span class="icon">📝</span>
            Notes
        </a>

        <a href="https://youtube.com/playlist?list=PLT3bOBUU3L9gFLFKKpMZXUSm6wrgLGadN&si=RSgbpclBuaQpw8MJ"
           target="_blank" class="item-link">
            <span class="icon">🎥</span>
            Video Lectures
        </a>

        <a href="admin/uploads/math_qp.pdf" target="_blank" class="item-link">
            <span class="icon">📚</span>
            Previous Question Papers
        </a>

        <a href="communication_skills_quiz.php" class="item-link">
            <span class="icon">✍️</span>
            Quiz
        </a>

        <a href="quiz/math_quiz.html" class="item-link">
            <span class="icon">🎓</span>
            Certificate
        </a>

    </div>

</div>

</body>
</html>