<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Semester 4 - LearnHub</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
}

body{
    background:linear-gradient(135deg,#0f172a 0%,#1e1b4b 35%,#311042 70%,#0f172a 100%);
    background-attachment:fixed;
    color:#f8fafc;
    min-height:100vh;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.header{
    width:100%;
    background:rgba(255,255,255,0.03);
    backdrop-filter:blur(16px);
    -webkit-backdrop-filter:blur(16px);
    border-bottom:1px solid rgba(255,255,255,0.1);
    padding:30px 20px;
    text-align:center;
    box-shadow:0 4px 20px rgba(0,0,0,0.3);
}

.header h1{
    font-size:2rem;
    font-weight:800;
    background:linear-gradient(135deg,#38bdf8,#818cf8);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.container{
    width:min(90%,1100px);
    padding:40px 20px 60px;
}

h2{
    text-align:center;
    font-size:1.4rem;
    color:#cbd5e1;
    margin-bottom:35px;
}

h2::after{
    content:'';
    display:block;
    width:50px;
    height:3px;
    background:#38bdf8;
    margin:8px auto 0;
    border-radius:2px;
}

.subjects{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.card{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    box-shadow:0 8px 32px rgba(0,0,0,0.37);
    border-radius:20px;
    padding:35px 25px;
    text-align:center;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-6px);
    border-color:rgba(56,189,248,0.4);
    box-shadow:0 12px 40px rgba(0,0,0,0.5),
               0 0 20px rgba(56,189,248,0.2);
}

.card a{
    text-decoration:none;
    color:#f8fafc;
    font-size:1.15rem;
    font-weight:700;
    display:block;
}

.card:hover a{
    color:#38bdf8;
}

@media(max-width:600px){
    .header h1{
        font-size:1.5rem;
    }

    .subjects{
        grid-template-columns:1fr;
    }
}
</style>
</head>

<body>

<header class="header">
    <h1>Electronics & Computer Engineering - Semester 4</h1>
</header>

<main class="container">

    <h2>Select Subject</h2>

    <div class="subjects">

        <div class="card">
            <a href="Microcontroller_and_Applications.php">
                Microcontroller and Applications
            </a>
        </div>

        <div class="card">
            <a href="Analog_Electronics.php">
                Analog Electronics
            </a>
        </div>

        

        

        <div class="card">
            <a href="Object_Oriented_Programming.php">
                Object Oriented Programming
            </a>
        </div>

    </div>

</main>

</body>
</html>