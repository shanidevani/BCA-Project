<?php
error_reporting(0);
//  $id = $_GET['s_id'];
include '../application/config/config.php';


    //data stor in variable's
    if(isset($_POST['update']))
    {

        $c_id = $_POST['c_id'];
        echo $c_id;
        $name = $_POST['courses'];
    echo $name;
    

    $qry = "UPDATE `courses` SET `name`='$name' WHERE `courses_id`='$c_id'";
    $data = mysqli_query($con, $qry);
    if($data)
    {
      echo '<script>alert("data updated into database.")</script>';
    }
    else
    {
      echo '<script>alert("data not updated into database.")</script>';
    }
  
}else{
  echo "nore";
}

header("Location: all_courses.php");
exit();
?>
