<?php
include "connection.php";

$sql = "SELECT * FROM study_material
        WHERE material_type='question paper'
        AND semester='Semester 5'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Semester 5 Question Papers - LearnHub</title>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}
body{
    background:linear-gradient(135deg,#0f172a,#1e1b4b,#311042,#0f172a);
    color:#fff;
    min-height:100vh;
}
.header{
    position:relative;
    text-align:center;
    padding:30px;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(10px);
}
.header h1{
    color:#38bdf8;
}

.back-btn{
    position:absolute;
    left:20px;
    top:50%;
    transform:translateY(-50%);
    padding:10px 18px;
    background:rgba(56,189,248,.15);
    border:1px solid rgba(56,189,248,.4);
    color:#38bdf8;
    text-decoration:none;
    border-radius:8px;
}

.container{
    width:90%;
    max-width:1000px;
    margin:30px auto;
}

.card{
    background:rgba(255,255,255,.05);
    padding:25px;
    border-radius:15px;
}

h2{
    text-align:center;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    padding:15px;
    border-bottom:1px solid rgba(255,255,255,.1);
    text-align:left;
}

th{
    color:#38bdf8;
}

.btn-view{
    display:inline-block;
    padding:8px 15px;
    background:rgba(56,189,248,.15);
    border:1px solid rgba(56,189,248,.4);
    color:#38bdf8;
    text-decoration:none;
    border-radius:8px;
}

.btn-view:hover{
    background:#38bdf8;
    color:#000;
}

.no-data{
    text-align:center;
    color:#ccc;
}
</style>
</head>

<body>

<header class="header">
    <a href="question_paper.php" class="back-btn">Back</a>
    <h1>Semester 5 Question Papers</h1>
</header>

<div class="container">
    <div class="card">

        <h2>Available Question Papers</h2>

        <table>
            <tr>
                <th>Sr.No</th>
                <th>Subject Name</th>
                <th>Semester</th>
                <th>Action</th>
            </tr>

            <?php
            if(mysqli_num_rows($result) > 0)
            {
                $sr = 1;

                while($row = mysqli_fetch_assoc($result))
                {
                    $subject = $row['subject'];
                    $semester = $row['semester'];

                    $pdf_link = "uploads/" . $row['material_link'];
            ?>
                    <tr>
                        <td><?php echo $sr++; ?></td>
                        <td><?php echo htmlspecialchars($subject); ?></td>
                        <td><?php echo htmlspecialchars($semester); ?></td>
                        <td>
                            <a href="<?php echo $pdf_link; ?>" target="_blank" class="btn-view">
                                ðŸ“„ View PDF
                            </a>
                            </a>
                        </td>
                    </tr>
            <?php
                }
            }
            else
            {
                echo "<tr>
                        <td colspan='4' class='no-data'>
                            No Question Papers Found For Semester 5
                        </td>
                      </tr>";
            }
            ?>
        </table>

    </div>
</div>

</body>
</html>