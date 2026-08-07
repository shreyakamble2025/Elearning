<?php
session_start();
$_SESSION['subject'] = "Basic Mathematics";
$_SESSION['semester'] ="Semester 1";
$_SESSION['answers'] = array(
    1 => 'B',
    2 => 'B',
    3 => 'B',
    4 => 'B',
    5 => 'A',
    6 => 'C',
    7 => 'B',
    8 => 'B',
    9 => 'A',
    10 => 'B',
    11 => 'C',
    12 => 'B',
    13 => 'A',
    14 => 'B',
    15 => 'C',
    16 => 'A',
    17 => 'B',
    18 => 'C',
    19 => 'B',
    20 => 'A'
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Basic Mathematics Quiz - LearnHub</title>

<style>
{
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
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .container {
    width: min(100%, 750px);
    margin: 0 auto;
  }

  /* --- HEADER GROUP --- */
  .header-group {
    text-align: center;
    margin-bottom: 35px;
  }

  .heading {
    font-size: 2.2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #38bdf8, #818cf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    letter-spacing: -0.5px;
    margin-bottom: 8px;
  }

  .subheading {
    color: #94a3b8;
    font-size: 0.95rem;
  }

  /* --- GLASS CARD CONTAINER --- */
  .card {
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 24px;
    padding: 36px 30px;
    box-shadow: 0 12px 40px 0 rgba(0, 0, 0, 0.45);
  }

  /* --- QUESTION BLOCKS --- */
  .question-card {
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.07);
    border-radius: 16px;
    padding: 22px 20px;
    margin-bottom: 24px;
    transition: all 0.3s ease;
  }

  .question-card:hover {
    border-color: rgba(56, 189, 248, 0.3);
  }

  .question-title {
    font-size: 1.05rem;
    font-weight: 600;
    color: #38bdf8;
    margin-bottom: 16px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
  }

  /* --- CUSTOM RADIO OPTIONS --- */
  .options-grid {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .option-label {
    display: flex;
    align-items: center;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    cursor: pointer;
    font-size: 0.95rem;
    color: #e2e8f0;
    transition: all 0.2s ease;
  }

  .option-label:hover {
    background: rgba(255, 255, 255, 0.08);
    border-color: rgba(129, 140, 248, 0.4);
    color: #f8fafc;
  }

  .option-label input[type="radio"] {
    appearance: none;
    -webkit-appearance: none;
    width: 18px;
    height: 18px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    margin-right: 14px;
    outline: none;
    transition: all 0.2s ease;
    position: relative;
    flex-shrink: 0;
  }

  /* Checked radio button state */
  .option-label input[type="radio"]:checked {
    border-color: #38bdf8;
    background-color: #38bdf8;
    box-shadow: 0 0 10px rgba(56, 189, 248, 0.5);
  }

  .option-label has(input[type="radio"]:checked) {
    background: rgba(56, 189, 248, 0.12);
    border-color: rgba(56, 189, 248, 0.4);
  }

  /* --- SUBMIT BUTTON --- */
  .btn-submit {
    width: 100%;
    margin-top: 10px;
    padding: 16px;
    background: linear-gradient(135deg, #0d6efd, #0284c7);
    color: white;
    border: none;
    border-radius: 30px;
    font-size: 1.05rem;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(13, 110, 253, 0.4);
    transition: all 0.3s ease;
  }

  .btn-submit:hover {
    background: linear-gradient(135deg, #2563eb, #0369a1);
    box-shadow: 0 6px 25px rgba(13, 110, 253, 0.6);
    transform: translateY(-2px);
  }

  @media(max-width: 600px) {
    body {
      padding: 20px 12px;
    }
    .heading {
      font-size: 1.75rem;
    }
    .card {
      padding: 22px 16px;
    }
    .question-card {
      padding: 16px 14px;
    }
  }
</style>
</head>

<body>

<div class="container">

  <div class="header-group">
    <h1 class="heading">Basic Mathematics Quiz</h1>
    <p class="subheading">Test your knowledge across core mathematical concepts.</p>
  </div>

  <div class="card">
    <form action="check_quiz.php" method="post">

      <div class="question-card">
        <div class="question-title">1. Inverse of matrix exists when</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q1" value="A" required> Det = 0</label>
          <label class="option-label"><input type="radio" name="q1" value="B"> Det ≠ 0</label>
          <label class="option-label"><input type="radio" name="q1" value="C"> Always</label>
          <label class="option-label"><input type="radio" name="q1" value="D"> None</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">2. Matrix method used to solve simultaneous equations?</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q2" value="A" required> Graph</label>
          <label class="option-label"><input type="radio" name="q2" value="B"> Matrix Inversion</label>
          <label class="option-label"><input type="radio" name="q2" value="C"> Elimination</label>
          <label class="option-label"><input type="radio" name="q2" value="D"> Substitution</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">3. Partial fractions are used for</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q3" value="A" required> Statistics</label>
          <label class="option-label"><input type="radio" name="q3" value="B"> Rational Functions</label>
          <label class="option-label"><input type="radio" name="q3" value="C"> Geometry</label>
          <label class="option-label"><input type="radio" name="q3" value="D"> Matrices</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">4. tan⁻¹(1) is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q4" value="A" required> 30°</label>
          <label class="option-label"><input type="radio" name="q4" value="B"> 45°</label>
          <label class="option-label"><input type="radio" name="q4" value="C"> 60°</label>
          <label class="option-label"><input type="radio" name="q4" value="D"> 90°</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">5. Which formula belongs to trigonometry?</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q5" value="A" required> Compound Angle Formula</label>
          <label class="option-label"><input type="radio" name="q5" value="B"> Distance Formula</label>
          <label class="option-label"><input type="radio" name="q5" value="C"> Midpoint Formula</label>
          <label class="option-label"><input type="radio" name="q5" value="D"> Section Formula</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">6. The angle between two parallel lines is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q6" value="A" required> 90°</label>
          <label class="option-label"><input type="radio" name="q6" value="B"> 180°</label>
          <label class="option-label"><input type="radio" name="q6" value="C"> 0°</label>
          <label class="option-label"><input type="radio" name="q6" value="D"> 45°</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">7. The derivative of x² is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q7" value="A" required> x²</label>
          <label class="option-label"><input type="radio" name="q7" value="B"> 2x</label>
          <label class="option-label"><input type="radio" name="q7" value="C"> x</label>
          <label class="option-label"><input type="radio" name="q7" value="D"> 1</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">8. Derivative of a constant is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q8" value="A" required> 1</label>
          <label class="option-label"><input type="radio" name="q8" value="B"> 0</label>
          <label class="option-label"><input type="radio" name="q8" value="C"> Constant</label>
          <label class="option-label"><input type="radio" name="q8" value="D"> ∞</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">9. Chain rule is used for</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q9" value="A" required> Composite Functions</label>
          <label class="option-label"><input type="radio" name="q9" value="B"> Matrices</label>
          <label class="option-label"><input type="radio" name="q9" value="C"> Statistics</label>
          <label class="option-label"><input type="radio" name="q9" value="D"> Straight Line</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">10. Equation touching a curve at one point is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q10" value="A" required> Normal</label>
          <label class="option-label"><input type="radio" name="q10" value="B"> Tangent</label>
          <label class="option-label"><input type="radio" name="q10" value="C"> Secant</label>
          <label class="option-label"><input type="radio" name="q10" value="D"> Axis</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">11. Radius of curvature belongs to</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q11" value="A" required> Statistics</label>
          <label class="option-label"><input type="radio" name="q11" value="B"> Algebra</label>
          <label class="option-label"><input type="radio" name="q11" value="C"> Differential Calculus</label>
          <label class="option-label"><input type="radio" name="q11" value="D"> Matrices</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">12. Statistics deals with</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q12" value="A" required> Geometry</label>
          <label class="option-label"><input type="radio" name="q12" value="B"> Collection and Analysis of Data</label>
          <label class="option-label"><input type="radio" name="q12" value="C"> Trigonometry</label>
          <label class="option-label"><input type="radio" name="q12" value="D"> Matrices</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">13. Which is a measure of dispersion?</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q13" value="A" required> Range</label>
          <label class="option-label"><input type="radio" name="q13" value="B"> Mean</label>
          <label class="option-label"><input type="radio" name="q13" value="C"> Median</label>
          <label class="option-label"><input type="radio" name="q13" value="D"> Mode</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">14. Variance measures</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q14" value="A" required> Mean</label>
          <label class="option-label"><input type="radio" name="q14" value="B"> Spread of Data</label>
          <label class="option-label"><input type="radio" name="q14" value="C"> Frequency</label>
          <label class="option-label"><input type="radio" name="q14" value="D"> Probability</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">15. Standard deviation is used to measure</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q15" value="A" required> Position</label>
          <label class="option-label"><input type="radio" name="q15" value="B"> Area</label>
          <label class="option-label"><input type="radio" name="q15" value="C"> Dispersion</label>
          <label class="option-label"><input type="radio" name="q15" value="D"> Volume</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">16. Coefficient of variation is used to</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q16" value="A" required> Compare Data Sets</label>
          <label class="option-label"><input type="radio" name="q16" value="B"> Find Matrix</label>
          <label class="option-label"><input type="radio" name="q16" value="C"> Differentiate Functions</label>
          <label class="option-label"><input type="radio" name="q16" value="D"> Draw Graphs</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">17. Slope of a horizontal line is</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q17" value="A" required> 1</label>
          <label class="option-label"><input type="radio" name="q17" value="B"> 0</label>
          <label class="option-label"><input type="radio" name="q17" value="C"> Undefined</label>
          <label class="option-label"><input type="radio" name="q17" value="D"> ∞</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">18. Equation y = mx + c is called</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q18" value="A" required> Circle</label>
          <label class="option-label"><input type="radio" name="q18" value="B"> Parabola</label>
          <label class="option-label"><input type="radio" name="q18" value="C"> Straight Line</label>
          <label class="option-label"><input type="radio" name="q18" value="D"> Ellipse</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">19. sin²θ + cos²θ = ?</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q19" value="A" required> 0</label>
          <label class="option-label"><input type="radio" name="q19" value="B"> 1</label>
          <label class="option-label"><input type="radio" name="q19" value="C"> 2</label>
          <label class="option-label"><input type="radio" name="q19" value="D"> θ</label>
        </div>
      </div>

      <div class="question-card">
        <div class="question-title">20. log₁₀(100) = ?</div>
        <div class="options-grid">
          <label class="option-label"><input type="radio" name="q20" value="A" required> 2</label>
          <label class="option-label"><input type="radio" name="q20" value="B"> 10</label>
          <label class="option-label"><input type="radio" name="q20" value="C"> 100</label>
          <label class="option-label"><input type="radio" name="q20" value="D"> 1</label>
        </div>
      </div>
	<input type="hidden" name="subject" value="Basic Mathematics">
		<input type="hidden" name="semester" value="Semester 1">
      <button type="submit" class="btn-submit">Submit Quiz</button>

    </form>
  </div>

</div>

</body>
</html>