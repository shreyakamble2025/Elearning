<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Semester 2 - LearnHub</title>

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
    letter-spacing:-0.5px;
  }

  .container{
    width:min(90%,1100px);
    padding:40px 20px 60px;
    display:flex;
    flex-direction:column;
    align-items:center;
  }

  h2{
    text-align:center;
    font-size:1.4rem;
    color:#cbd5e1;
    font-weight:600;
    margin-bottom:35px;
    position:relative;
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
    width:100%;
  }

  .card{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(16px);
    -webkit-backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    box-shadow:0 8px 32px rgba(0,0,0,0.37);
    border-radius:20px;
    padding:35px 25px;
    text-align:center;
    transition:all 0.3s ease;
    display:flex;
    justify-content:center;
    align-items:center;
    position:relative;
    overflow:hidden;
  }

  .card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:radial-gradient(circle at top right,rgba(56,189,248,0.15),transparent 70%);
    opacity:0;
    transition:opacity .3s ease;
  }

  .card:hover{
    transform:translateY(-6px);
    border-color:rgba(56,189,248,.4);
    box-shadow:0 12px 40px rgba(0,0,0,.5),
               0 0 20px rgba(56,189,248,.2);
  }

  .card:hover::before{
    opacity:1;
  }

  .card a{
    text-decoration:none;
    color:#f8fafc;
    font-size:1.2rem;
    font-weight:700;
    z-index:1;
    transition:.3s;
    width:100%;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
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
  <h1>Electronics & Computer Engineering - Semester 2</h1>
</header>

<main class="container">

  <h2>Select Subject</h2>

  <div class="subjects">

    <div class="card">
      <a href="Applied_mathematics.php">
        Applied Mathematics
      </a>
    </div>

    <div class="card">
      <a href="Applied_science.php">
        Applied Science
      </a>
    </div>

    <div class="card">
      <a href="Basic_electrical_and_electronics.php">
        Basic Electrical & Electronics Engineering
      </a>
    </div>

    <div class="card">
      <a href="Programming_in_C.php">
        Programming in C
      </a>
    </div>

    

  </div>

</main>

</body>
</html>