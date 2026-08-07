<?php
include "connection.php";

$syllabus_query = mysqli_query($conn, "SELECT material_link FROM study_material WHERE material_type='syllabus' LIMIT 1");
$syllabus_row = mysqli_fetch_assoc($syllabus_query);

if ($syllabus_row && !empty($syllabus_row['material_link'])) {
    $syllabus_link = "uploads/" . $syllabus_row['material_link'];
} else {
    $syllabus_link = "#";
}

$notes_query = mysqli_query($conn, "SELECT material_link FROM study_material WHERE material_type='notes' LIMIT 1");
$notes_row = mysqli_fetch_assoc($notes_query);

if ($notes_row && !empty($notes_row['material_link'])) {
    $notes_link = "uploads/" . $notes_row['material_link'];
} else {
    $notes_link = "#";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seminar And Project Initiation Course - LearnHub</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 35%,#311042 70%,#0f172a 100%);
    min-height:100vh;
    color:#fff;
}

.header{
    width:100%;
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(16px);
    border-bottom:1px solid rgba(255,255,255,0.1);
    padding:30px 20px;
    text-align:center;
}

.header h1{
    font-size:2rem;
    font-weight:800;
    background:linear-gradient(135deg,#38bdf8,#818cf8);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.container{
    width:min(90%,800px);
    margin:auto;
    padding:40px 20px;
}

.card{
    width:100%;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:24px;
    padding:40px 30px;
}

.card h2{
    text-align:center;
    font-size:1.5rem;
    margin-bottom:30px;
}

.materials-grid{
    display:flex;
    flex-direction:column;
    gap:16px;
}

.item-link{
    display:flex;
    align-items:center;
    gap:18px;
    padding:18px 22px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    border-left:4px solid #38bdf8;
    border-radius:14px;
    color:#f8fafc;
    text-decoration:none;
    font-size:1.05rem;
    font-weight:600;
    transition:0.3s;
}

.item-link:hover{
    background:rgba(56,189,248,0.12);
    transform:translateX(6px);
    color:#38bdf8;
}

.item-icon{
    font-size:1.25rem;
}
</style>
</head>

<body>

<header class="header">
    <h1>Seminar And Project Initiation Course</h1>
</header>

<main class="container">
    <div class="card">
        <h2>Study Materials</h2>

        <div class="materials-grid">

            <!-- Syllabus -->
            <a href="<?php echo $syllabus_link; ?>" target="_blank" class="item-link">
                <span class="item-icon">&#128203;</span>
                <span>Syllabus</span>
            </a>

            <!-- Notes -->
            <a href="<?php echo $notes_link; ?>" target="_blank" class="item-link">
                <span class="item-icon">&#128221;</span>
                <span>Notes</span>
            </a>

            <!-- Video Lectures -->
            <a href="https://youtube.com/playlist?list=PLT3bOBUU3L9gFLFKKpMZXUSm6wrgLGadN&si=RSgbpclBuaQpw8MJ" target="_blank" class="item-link">
                <span class="item-icon">&#127916;</span>
                <span>Video Lectures</span>
            </a>

            <!-- Previous Question Papers -->
            <a href="admin/uploads/applied_math_qp.pdf" target="_blank" class="item-link">
                <span class="item-icon">&#10067;</span>
                <span>Previous Question Papers</span>
            </a>

            <!-- Quiz -->
            <a href="spic_quiz.php" class="item-link">
                <span class="item-icon">&#9997;</span>
                <span>Quiz</span>
            </a>

            <!-- Certificate -->
            <a href="quiz/applied_math_certificate.php" class="item-link">
                <span class="item-icon">&#127891;</span>
                <span>Certificate</span>
            </a>

        </div>

    </div>
</main>

</body>
</html>