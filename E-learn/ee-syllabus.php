<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Syllabus - LearnHub</title>

<style>
  /* --- CSS RESET & BASE STYLES --- */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
  }

  body {
    background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 35%, #311042 70%, #0f172a 100%);
    background-attachment: fixed;
    color: #f8fafc;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* --- HEADER BAR --- */
  .header {
    width: 100%;
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 30px 20px;
    text-align: center;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  }

  .header h1 {
    font-size: 2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #38bdf8, #818cf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -0.5px;
  }

  /* --- MAIN CONTAINER --- */
  .container {
    width: min(90%, 1100px);
    padding: 40px 20px 60px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  /* --- SYLLABUS GRID --- */
  .syllabus-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
    width: 100%;
    margin-top: 10px;
  }

  /* --- GLASS CARDS --- */
  .card {
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    border-radius: 20px;
    padding: 30px 24px;
    text-align: center;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    position: relative;
    overflow: hidden;
  }

  .card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at top right, rgba(56, 189, 248, 0.12), transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .card:hover {
    transform: translateY(-6px);
    border-color: rgba(56, 189, 248, 0.4);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5), 0 0 20px rgba(56, 189, 248, 0.15);
  }

  .card:hover::before {
    opacity: 1;
  }

  .card h3 {
    font-size: 1.35rem;
    color: #f8fafc;
    font-weight: 700;
    margin-bottom: 20px;
    z-index: 1;
  }

  /* --- ACTION BUTTON --- */
  .card a {
    display: inline-block;
    width: 100%;
    padding: 12px 20px;
    background: linear-gradient(135deg, #0d6efd, #0284c7);
    color: white;
    text-decoration: none;
    border-radius: 30px;
    font-size: 0.95rem;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
    transition: all 0.3s ease;
    z-index: 1;
  }

  .card a:hover {
    background: linear-gradient(135deg, #2563eb, #0369a1);
    box-shadow: 0 6px 20px rgba(13, 110, 253, 0.5);
    transform: translateY(-2px);
  }

  /* --- BACK BUTTON --- */
  .btn-back {
    display: inline-block;
    padding: 12px 28px;
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    color: #cbd5e1;
    text-decoration: none;
    border-radius: 30px;
    font-size: 0.95rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-back:hover {
    background: rgba(255, 255, 255, 0.18);
    color: #ffffff;
    transform: translateY(-2px);
  }

  /* Responsive Adjustments */
  @media(max-width: 600px) {
    .header h1 {
      font-size: 1.5rem;
    }
    .syllabus-grid {
      grid-template-columns: 1fr;
    }
  }
  .back-btn {
    position: absolute;
    left: 25px;
    top: 50%;
    transform: translateY(-50%);
    padding: 10px 20px;
    background: rgba(56, 189, 248, 0.15);
    color: #38bdf8;
    text-decoration: none;
    border: 1px solid rgba(56, 189, 248, 0.4);
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    transition: 0.3s;
}
.back-container{
   width: min(95%,900px);
    margin: 20px auto 0;
}
.back-btn:hover {
    background: #38bdf8;
    color: #0f172a;
    box-shadow: 0 4px 12px rgba(56, 189, 248, 0.4);
}
</style>
</head>
<body>

<header class="header">
	  <div class="back-container">
    <a href="ee.html" class="back-btn">&#8592; Back</a>
</div>
  <h1>Electrical Engineering Syllabus</h1>
</header>

<main class="container">

  <div class="syllabus-grid">

    <div class="card">
      <h3>Semester 1</h3>
      <a href="ee-view-s1.php" target="_blank">View Syllabus</a>
    </div>

    <div class="card">
      <h3>Semester 2</h3>
      <a href="ee-view-s2.php" target="_blank">View Syllabus</a>
    </div>

    <div class="card">
      <h3>Semester 3</h3>
      <a href="ee-view-s3.php" target="_blank">View Syllabus</a>
    </div>

    <div class="card">
      <h3>Semester 4</h3>
      <a href="ee-view-s4.php" target="_blank">View Syllabus</a>
    </div>

    <div class="card">
      <h3>Semester 5</h3>
      <a href="ee-view-s5.php" target="_blank">View Syllabus</a>
    </div>

    <div class="card">
      <h3>Semester 6</h3>
      <a href="ee-view-s6.php" target="_blank">View Syllabus</a>
    </div>

  </div>
</main>

</body>
</html>