<?php
include("connection.php");

$message = "";

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $qualification = $_POST['qualification'];
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $check = "SELECT * FROM teacherrg WHERE username='$username'";
    $result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) > 0)
    {
        $message = "Username Already Exists!";
    }
    else
    {
        $sql = "INSERT INTO teacherrg
                (name,email,mobile,qualification,username,password)
                VALUES
                ('$name','$email','$mobile','$qualification','$username','$password')";

        if(mysqli_query($conn,$sql))
        {
            $message = "Teacher Registration Successful!";
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
    <title>Teacher Registration</title>

    <style>
        body{
            font-family:Arial;
            background:#f2f2f2;
        }

        .container{
            width:450px;
            margin:50px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        h2{
            text-align:center;
            color:blue;
        }

        input, textarea{
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
    </style>

</head>
<body>

<div class="container">

    <h2>Teacher Registration</h2>

    <div class="msg">
        <?php echo $message; ?>
    </div>

    <form method="post">

        <input type="text" name="name" placeholder="Enter Name" required>

        <input type="email" name="email" placeholder="Enter Email" required>

        <input type="number" name="mobile" placeholder="Enter Mobile Number" required>

        <input type="text" name="qualification" placeholder="Enter Qualification" required>

        <input type="text" name="username" placeholder="Enter Username" required>

        <input type="password" name="password" placeholder="Enter Password" required>

        <input type="submit" name="register" value="Register" class="btn">

    </form>

</div>

</body>
</html>