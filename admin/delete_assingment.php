<?php
    error_reporting(0);
    include '../application/config/config.php';

    $id = $_GET['c_id'];
if($id != null)
{
  echo $id;
}
else
{
 echo "exit";
}

    echo $id;

    $qry = "DELETE FROM `assingment` WHERE `assingment_id`='$id'";
    $data = mysqli_query($con, $qry);

    if($data)
    {
        echo '<script>alert("data deleted into database.")</script>';
    }
    else
    {
        echo '<script>alert("data not deleted into database.")</script>';
    }
    header("Location: all_assingment.php");
    exit();
?>