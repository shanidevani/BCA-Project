<?php
 

    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        include "../application/config/config.php";
        $username = $_POST['username'];
        $password = $_POST['Password'];

        $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
        $data = mysqli_query($con, $qry);

        $num = mysqli_num_rows($data);
        if($num == 1)
        {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: dashboard.php");
            exit;
        }
        else
        {
            echo "password do not macch.";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/loginpage.css">
</head>
<body>

<h2>Login Form</h2>

<form action="index.php" method="post">
    <div class="login">
  <div class="imgcontainer">
    <img src="../assets/img/1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter your id witch given by college." name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="your password is your birsthdate."  name="Password" required>
        
    <button type="submit">Login</button>
    
  </div>

  
</div>
</form>

</body>
</html>
