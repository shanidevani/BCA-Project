<?php
    error_reporting(0);
    include '../application/config/config.php';

    $id = $_GET['c_id'];

    echo $id;

    $qry = "DELETE FROM `courses` WHERE `courses_id`='$id'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data deleted into database.")</script>';
    }
    else
    {
        echo '<script>alert("data not deleted into database.")</script>';
    }
    header("Location: all_courses.php");
    exit();
?>