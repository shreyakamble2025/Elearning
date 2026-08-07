<?php
include "connection.php" ;

$sql = "SELECT * FROM study_material 
        WHERE material_type = 'syllabus' 
        AND semester = 'Semester 4'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Semester 4 Syllabus - LearnHub</title>

<style>
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

  .header {
    width: 100%;
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(16px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 30px 20px;
    text-align: center;
  }

  .header h1 {
    font-size: 2rem;
    font-weight: 800;
    background: linear-gradient(135deg, #38bdf8, #818cf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .container {
    width: min(95%, 900px);
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 100%;
    background: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 24px;
    padding: 30px;
  }

  h2 {
    text-align: center;
    font-size: 1.5rem;
    color: #f8fafc;
    margin-bottom: 25px;
  }

  .table-responsive {
    width: 100%;
    overflow-x: auto;
  }

  .syllabus-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    text-align: left;
  }

  .syllabus-table th, 
  .syllabus-table td {
    padding: 16px 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .syllabus-table th {
    background: rgba(56, 189, 248, 0.1);
    color: #38bdf8;
    font-size: 0.95rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .syllabus-table tr:hover {
    background: rgba(255, 255, 255, 0.03);
  }

  .btn-view {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    background: rgba(56, 189, 248, 0.15);
    border: 1px solid rgba(56, 189, 248, 0.4);
    border-radius: 8px;
    color: #38bdf8;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.9rem;
    transition: 0.3s;
  }

  .btn-view:hover {
    background: #38bdf8;
    color: #0f172a;
    box-shadow: 0 4px 12px rgba(56, 189, 248, 0.3);
  }

  .no-data {
    text-align: center;
    color: #94a3b8;
    padding: 20px;
  }
  .back-container{
   width: min(95%,900px);
    margin: 20px auto 0;
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
    <a href="syllabus.php" class="back-btn">&#8592; Back</a>
</div>
  <h1>Semester 4 Syllabus List</h1>
</header>

<main class="container">
  <div class="card">
    <h2>Available Subject Syllabus</h2>

    <div class="table-responsive">
      <table class="syllabus-table">
        <thead>
          <tr>
            <th>Sr.no</th>
            <th>Subject Name</th>
            <th>Semester</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result && mysqli_num_rows($result) > 0) {
              $sr_no = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  $subject_name = !empty($row['subject_name']) ? $row['subject_name'] : $row['subject'];
                  $semester = !empty($row['semester']) ? $row['semester'] : 'Sem 4';
                  $id = $row['id'];
				  
				  $syllabus_query = mysqli_query($conn, "SELECT * FROM study_material WHERE subject ='$subject_name' LIMIT 1");
					$syllabus_row = mysqli_fetch_assoc($syllabus_query);

				if ($syllabus_row && !empty($syllabus_row['material_link'])) 
				{
						$syllabus_link = "uploads/" . $syllabus_row['material_link'];
				} 
				else 
				{
						$syllabus_link = "#";
				}
				

                  ?>
                  <tr>
                    <td><?php echo $sr_no++; ?></td>
                    <td><?php echo htmlspecialchars($subject_name); ?></td>
                    <td><?php echo htmlspecialchars($semester); ?></td>
                    <td>
                      <a href="<?php echo $syllabus_link; ?>" target="_blank" class="btn-view">
                        &#128203; View PDF
                      </a>
                    </td>
                  </tr>
                  <?php
              }
          } else {
              ?>
              <tr>
                <td colspan="4" class="no-data">No syllabus PDFs found for Semester 4 in database.</td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>

  </div>
</main>

</body>
</html>