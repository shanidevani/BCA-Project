<?php

if($_POST['psw'] == $_POST['cpsw'])
{
    $pass = $_POST['cpsw'];
    $username = $_POST['uname'];
    $qry = "UPDATE `admin` SET `password`='$pass' WHERE `username`='$username'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data inserted into database.")</script>';
    }
    else
        {
          echo '<script>alert("data not inserted into database.")</script>';
        }
}
else{
    $error = "plase enter same password witch you enterd new password field.";
}

  ?>