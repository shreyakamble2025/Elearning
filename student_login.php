<?php
session_start();
include "connection.php";
$message = "";
if(isset($_POST['Login']))
{
    $username = $_POST['n1'];
    $password = $_POST['n2'];

    $sql = "SELECT * FROM studrg WHERE username='$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $user = mysqli_fetch_assoc($result);

        if($password == $user['password'])
        {
            $_SESSION['username'] = $user['username'];
            $_SESSION['student_name'] = $user['full_name'];

            header("Location: student.php");
            exit();
        }
        else
        {
            $message = "Invalid Password!";
        }
    }
    else
    {
        $message = "Username Not Found!";
    }
}
?>

<html>
<head>
<title>Student Login</title>
<style>

*
{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body
{
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
}

.container
{
    width:400px;
    background:#f8f9fa;
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

h2
{
    text-align:center;
    color:#0d6efd;
    margin-bottom:20px;
}

.msg
{
    text-align:center;
    color:red;
    font-weight:bold;
    margin-bottom:15px;
}

input[type="text"],
input[type="password"]
{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
}

input[type="submit"]
{
    width:100%;
    padding:12px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
}

input[type="submit"]:hover
{
    background:#0b5ed7;
}

input[type="reset"]
{
    width:100%;
    padding:12px;
    margin-top:10px;
    background:#6c757d;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
}

input[type="reset"]:hover
{
    background:#5a6268;
}

.register
{
    text-align:center;
    margin-top:15px;
}

.register h4
{
    color:#333;
    margin-bottom:8px;
}

.register a
{
    text-decoration:none;
    color:#0d6efd;
    font-weight:bold;
}

.register a:hover
{
    text-decoration:underline;
}

</style>

</head>

<body>

<div class="container">

<h2>Student Login</h2>
<div class="msg">
<?php echo $message; ?></div>
	<form method="POST">
		<input type="text" name="n1" placeholder="Enter Username" required>
		<input type="password" name="n2" placeholder="Enter Password" required>
		<input type="submit" name="Login" value="Login">
		<input type="reset" value="Reset">
	</form>

	<div class="register">
    <h4>Don't have an account?</h4>
    <a href="student.php">Register Here</a>
    </div>

</div>
</body>
</html>