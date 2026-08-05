<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Notes - LearnHub</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{

    background:linear-gradient(135deg,#0f172a,#1e1b4b,#311042,#0f172a);
    min-height:100vh;
    color:white;
}


.header{

    width:100%;
    padding:35px 20px;
    text-align:center;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(15px);
    border-bottom:1px solid rgba(255,255,255,0.1);
}


.header h1{

    font-size:35px;
    font-weight:800;

    background:linear-gradient(135deg,#38bdf8,#818cf8);
    -webkit-background-clip:text;
    color:transparent;

}


.container{

    width:90%;
    max-width:900px;
    margin:50px auto;

}


.card{

    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(20px);
    padding:35px;
    border-radius:25px;
    border:1px solid rgba(255,255,255,0.15);

}



h2{

    text-align:center;
    margin-bottom:30px;
    font-size:25px;

}



.semester-box{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;

}



.sem-btn{

    text-decoration:none;
    color:#38bdf8;

    background:rgba(56,189,248,0.12);

    border:1px solid rgba(56,189,248,0.4);

    padding:25px;

    text-align:center;

    border-radius:18px;

    font-size:20px;

    font-weight:700;

    transition:0.3s;

}



.sem-btn:hover{

    background:#38bdf8;
    color:#0f172a;

    transform:translateY(-5px);

    box-shadow:0 10px 25px rgba(56,189,248,0.4);

}



.back-btn{

    position:absolute;
    left:25px;
    top:35px;

    padding:10px 20px;

    color:#38bdf8;

    text-decoration:none;

    border:1px solid rgba(56,189,248,0.4);

    border-radius:10px;

}


.back-btn:hover{

    background:#38bdf8;
    color:#0f172a;

}


</style>

</head>


<body>


<header class="header">

<a href="home.php" class="back-btn">
← Back
</a>


<h1>📚 LearnHub Notes</h1>


</header>



<div class="container">


<div class="card">


<h2>Select Semester Notes</h2>


<div class="semester-box">


<a href="semester1_notes.php" class="sem-btn">
📘 Semester 1 Notes
</a>


<a href="semester2_notes.php" class="sem-btn">
📗 Semester 2 Notes
</a>


<a href="semester3_notes.php" class="sem-btn">
📙 Semester 3 Notes
</a>


<a href="semester4_notes.php" class="sem-btn">
📕 Semester 4 Notes
</a>


<a href="semester5_notes.php" class="sem-btn">
📒 Semester 5 Notes
</a>


<a href="semester6_notes.php" class="sem-btn">
📔 Semester 6 Notes
</a>


</div>


</div>


</div>


</body>
</html>