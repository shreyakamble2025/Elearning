<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Electronics & Computer Engineering Department - LearnHub</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 35%,#311042 70%,#0f172a 100%);
    background-attachment:fixed;
    color:#f8fafc;
    min-height:100vh;
}

.header{
    width:100%;
    height:70px;
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(16px);
    border-bottom:1px solid rgba(255,255,255,0.1);
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 40px;
    position:fixed;
    top:0;
    left:0;
    z-index:1000;
}

.header h2{
    font-size:1.6rem;
    font-weight:800;
    background:linear-gradient(135deg,#38bdf8,#818cf8);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.header input{
    width:300px;
    padding:10px 16px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.15);
    border-radius:30px;
    color:white;
    outline:none;
}

.container{
    display:flex;
    margin-top:70px;
}

.sidebar{
    width:260px;
    height:calc(100vh - 70px);
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(16px);
    border-right:1px solid rgba(255,255,255,0.08);
    overflow-y:auto;
    position:fixed;
    top:70px;
    left:0;
}

.sidebar h3{
    padding:20px;
    background:linear-gradient(135deg,rgba(56,189,248,0.15),rgba(129,140,248,0.15));
    border-bottom:1px solid rgba(255,255,255,0.1);
    color:#38bdf8;
}

.sidebar a{
    display:block;
    padding:12px 20px;
    text-decoration:none;
    color:#cbd5e1;
    border-bottom:1px solid rgba(255,255,255,0.04);
    transition:.3s;
}

.sidebar a:hover{
    background:rgba(255,255,255,0.08);
    color:#38bdf8;
    padding-left:25px;
}

.main{
    margin-left:260px;
    padding:40px;
    width:calc(100% - 260px);
}

.banner{
    width:100%;
    height:280px;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:20px;
    overflow:hidden;
}

.banner img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.content{
    margin-top:35px;
}

.content h1{
    font-size:2rem;
    margin-bottom:15px;
}

.dept-description{
    color:#94a3b8;
    line-height:1.8;
}

.card{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    padding:30px;
    margin-top:25px;
    border-radius:20px;
}

.card h2{
    color:#38bdf8;
    margin-bottom:15px;
}

.card p{
    line-height:2;
    color:#cbd5e1;
}

button{
    margin-top:20px;
    padding:12px 28px;
    background:linear-gradient(135deg,#0d6efd,#0284c7);
    color:white;
    border:none;
    border-radius:30px;
    cursor:pointer;
}

.footer{
    margin-top:50px;
    text-align:center;
    padding:25px;
    color:white;
}

@media(max-width:900px){
    .sidebar{
        width:200px;
    }

    .main{
        margin-left:200px;
        width:calc(100% - 200px);
        padding:20px;
    }
}

@media(max-width:700px){
    .sidebar{
        display:none;
    }

    .main{
        margin-left:0;
        width:100%;
    }
}
</style>
</head>
<body>

<div class="header">
    <h2>LearnHub</h2>
    <input type="text" placeholder="Search Courses...">
</div>

<div class="container">

<div class="sidebar">
    <h3>ECO Dept</h3>

    <a href="eco.php">Home</a>
    <a href="eco_sem1.php">Semester 1</a>
    <a href="eco_sem2.php">Semester 2</a>
    <a href="eco_sem3.php">Semester 3</a>
    <a href="eco_sem4.php">Semester 4</a>
    <a href="eco_sem5.php">Semester 5</a>
    <a href="eco_sem6.php">Semester 6</a>

    <a href="syllabus.php">Syllabus</a>
    <a href="eco_notes.php">Notes</a>
    <a href="eco_questionpaper.php">Question Papers</a>
    <a href="eco_quiz.php">Quiz</a>
    <a href="certificate.php">Certificate</a>
    <a href="faq.php">FAQ</a>
    <a href="review.php">Review</a>
</div>

<div class="main">

<div class="banner">
    <img src="images/eco.jpg" alt="Electronics & Computer Engineering">
</div>

<div class="content">

<h1>Electronics & Computer Engineering Department</h1>

<p class="dept-description">
Welcome to the Electronics & Computer Engineering Department of LearnHub.
Here you can access semester-wise notes, video lectures, assignments,
MCQ tests, practical files, syllabus and previous year question papers.
</p>

<div class="card">
    <h2>Semester Wise Learning</h2>

    <p>
    ✔ Semester 1 Notes<br>
    ✔ Semester 2 Notes<br>
    ✔ Semester 3 Notes<br>
    ✔ Semester 4 Notes<br>
    ✔ Semester 5 Notes<br>
    ✔ Semester 6 Notes
    </p>

    <a href="semester1.php">
        <button>Start Learning</button>
    </a>
</div>

<div class="card">
    <h2>Resources</h2>

    <p>
    • PDF Notes<br>
    • Video Tutorials<br>
    • Previous Year Question Papers<br>
    • Assignments<br>
    • MCQ Tests<br>
    • Practical Files
    </p>

    <a href="notes.php">
        <button>View Resources</button>
    </a>
</div>

</div>

<div class="footer">
© 2026 LearnHub E-Learning Management System
</div>

</div>
</div>

</body>
</html>