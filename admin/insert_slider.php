<?php

//error_reporting(0);

include "../application/config/config.php";

if(isset($_POST['save']))
{
    //photo
    $filename = $_FILES["file"]["name"];
  //  echo $filename;
    $tempname = $_FILES["file"]["tmp_name"];
  //  echo $tempname;
    $folder = "../assets/img/home slider/".$filename;
   // echo $folder;
    //move file into student folder
    move_uploaded_file($tempname, $folder);
    //  echo '<img src="$folder" width="100" height="100">';

    if($folder != "")
    {
        $qry = "INSERT INTO `slider` (`photo`)  VALUE ('$filename')";
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
}
header("Location: all_slider.php");
exit();
?>