<?php
    error_reporting(0);
    include '../application/config/config.php';

    $id = $_GET['s_id'];

    echo $id;

    $qry = "DELETE FROM `teacher` WHERE `teacher_id`='$id'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data deleted into database.")</script>';
    }
    else
    {
        echo '<script>alert("data not deleted into database.")</script>';
    }
    header("Location: all_teacher.php");
    exit();
?>