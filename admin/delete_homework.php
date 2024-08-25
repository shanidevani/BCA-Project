<?php

error_reporting(0);
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}

    include '../application/config/config.php';

    $id = $_GET['h_id'];
if($id != null)
{
  echo $id;
}
else
{
 echo "exit";
}

    echo $id;

    $qry = "DELETE FROM `homework` WHERE `homework_id`='$id'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data deleted into database.")</script>';
    }
    else
    {
        echo '<script>alert("data not deleted into database.")</script>';
    }
    header("Location: all_homework.php");
    exit();
?>