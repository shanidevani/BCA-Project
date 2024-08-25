<?php

include  "../application/config/config.php";

error_reporting(0);

if(isset($_POST['submit']))
{
    $name = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $sem = $_POST['sem'];
    $subject =  $_POST['subject'];


    if($subject != "")
    {
        $qry = "INSERT INTO `leave_application` (`name`, `lname`, `sem`, `subject`) VALUE ('$name','$lname','$sem','$subject')";

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
}header("Location: dashboard.php");
exit();

?>