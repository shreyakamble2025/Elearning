<?php
include("connection.php");

$message = "";

if(isset($_POST['register']))
{
    $full_name = $_POST['full_name'];
    $roll_number = $_POST['roll_number'];
    $clg_name = $_POST['clg_name'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = "SELECT * FROM studrg WHERE username='$username'";
    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) > 0)
    {
        $message = "Username Already Exists!";
    }
    else
    {
        $sql = "INSERT INTO studrg(full_name,roll_number,clg_name,department,year,email,mobile_number,username,password)VALUES
                ('$full_name','$roll_number','$clg_name','$department','$year','$email','$mobile_number','$username','$password')";

        if(mysqli_query($conn,$sql))
        {
            $message = "Student Registration Successful!";
        }
        else
        {
            $message = "Error : ".mysqli_error($conn);
        }
    }
}
?>

<html>
<head>
    <title>Student Registration</title>

    <style>
        body{
            font-family:Arial;
            background:#f2f2f2;
        }

        .container{
            width:450px;
            margin:30px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        h2{
            text-align:center;
            color:blue;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:8px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        .btn{
            width:100%;
            background:blue;
            color:white;
            padding:10px;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        .btn:hover{
            background:darkblue;
        }

        .msg{
            text-align:center;
            color:red;
            font-weight:bold;
            margin-bottom:10px;
        }

        .login{
            text-align:center;
            margin-top:10px;
        }

        .login a{
            text-decoration:none;
            color:blue;
            font-weight:bold;
        }
    </style>

</head>
<body>

<div class="container">

    <h2>Student Registration</h2>

    <div class="msg">
        <?php echo $message; ?>
    </div>

    <form method="post">

        <input type="text" name="full_name" placeholder="Enter Full Name" required>

        <input type="number" name="roll_number" placeholder="Enter Roll Number" required>

        <input type="text" name="clg_name" placeholder="Enter College Name" required>

        <input type="text" name="department" placeholder="Enter Department" required>

        <input type="text" name="year" placeholder="Enter Year" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="number" name="mobile_number" placeholder="Enter Mobile Number" required>

        <input type="text" name="username" placeholder="Enter Username" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <input type="submit" name="register" value="Register" class="btn">

    </form>

    <div class="login">
       
        <a href="student_login.php">Login</a>
    </div>

</div>

</body>
</html>