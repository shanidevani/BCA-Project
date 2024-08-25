<?php
    // error_reporting(0);
    include '../application/config/config.php';

    $id = $_GET['s_id'];

   

    $qry = "DELETE FROM `student` WHERE `student_id`='$id'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data deleted into database.")</script>';
    }
    else
    {
        echo '<script>alert("data not deleted into database.")</script>';
    }
    header("Location: all_student.php");
    exit();
?>