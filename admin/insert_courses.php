<?php
error_reporting(0);

include '../application/config/config.php';

if(isset($_POST['save']))
{
    $name = $_POST['courses'];
    echo $name;
    


    if($name != "")
    {
        $qry = "INSERT INTO `courses` (`name`) VALUES ('$name')";
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
    else
    {
        echo '<script>alert("plz enter all data.")</script>';
    }
}
header("Location: all_courses.php");
exit();

?>