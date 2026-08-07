<?php
include "connection.php";

// 1. Get the subject from the URL parameter, or set default
$selected_subject = isset($_GET['subject']) ? $_GET['subject'] : 'Electrical And Electronic Measurement';

// Escaping the input to prevent SQL injection
$selected_subject_clean = mysqli_real_escape_string($conn, $selected_subject);

// 2. Fetch records dynamically based on the selected subject
$sql = "SELECT * FROM study_material 
        WHERE material_type = 'Previous Question Paper' 
        AND subject = '$selected_subject_clean'
        ORDER BY semester ASC";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($selected_subject); ?> Question Papers - LearnHub</title>
    <style>
        /* --- Global Styles --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            /* Dark vibrant blue-purple gradient matching LearnHub theme */
             background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 35%, #311042 70%, #0f172a 100%);
    background-attachment: fixed;
    color: #f8fafc;
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navigation Link */
        .back-link {
            display: inline-block;
            align-self: flex-start;
            max-width: 900px;
            margin: 0 auto 20px auto;
            width: 100%;
            text-decoration: none;
            color: #38bdf8;
            font-weight: 600;
            font-size: 15px;
            transition: color 0.2s ease;
        }

        .back-link:hover {
            color: #60a5fa;
            text-decoration: underline;
        }

        /* Page Header */
        h2 {
            font-size: 26px;
            font-weight: 800;
           background: linear-gradient(135deg, #38bdf8, #818cf8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: -0.5px;
        }

        /* --- Dark Glassmorphism Table Container --- */
        .table-container {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background: rgba(255, 255, 255, 0.04);
            color: #38bdf8; /* Vibrant cyan header text */
            font-size: 14px;
            font-weight: 700;
            padding: 14px 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
            color: #cbd5e1;
            font-size: 14px;
            font-weight: 500;
        }

        tr:hover {
            background: rgba(255, 255, 255, 0.02);
        }

        /* Action View Button */
        .btn-view {
            display: inline-block;
            padding: 6px 16px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: #ffffff;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
            transition: all 0.2s ease;
        }

        .btn-view:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(16, 185, 129, 0.4);
        }

        .no-data {
            text-align: center;
            color: #94a3b8;
            padding: 20px;
        }

        /* Custom Scrollbar for overflow table */
        .table-container::-webkit-scrollbar {
            height: 6px;
        }
        .table-container::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div style="width: 100%; max-width: 900px;">
        <h2>Question Papers for: <?php echo htmlspecialchars($selected_subject); ?></h2>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Sr. No.</th>
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
                        $subject = !empty($row['subject_name']) ? $row['subject_name'] : $row['subject'];
                        $semester = !empty($row['semester']) ? $row['semester'] : 'N/A';
                        $link = !empty($row['material_link']) ? "uploads/" . $row['material_link'] : "#";
                        ?>
                        <tr>
                            <td><?php echo $sr_no++; ?></td>
                            <td><?php echo htmlspecialchars($subject); ?></td>
                            <td><?php echo htmlspecialchars($semester); ?></td>
                            <td>
                                <a href="<?php echo htmlspecialchars($link); ?>" target="_blank" class="btn-view">View PDF</a>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4" class="no-data">No question papers found for <?php echo htmlspecialchars($selected_subject); ?>.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>