<?php

//error_reporting(0);

include "../application/config/config.php";

if(isset($_POST['submit']))
{
    $user = $_POST['uname'];
    $psw = $_POST['psw'];
    //photo
    $filename = $_FILES["file"]["name"];
  //  echo $filename;
    $tempname = $_FILES["file"]["tmp_name"];
  //  echo $tempname;
    $folder = "../assets/img/profile/admin/".$filename;
   // echo $folder;
    //move file into student folder
    move_uploaded_file($tempname, $folder);


    if($user != "" && $psw != "" && $filename != "" )
    {
        $qry = "INSERT INTO `admin` (`username`, `password`, `profile`) VALUE ('$user','$psw','$filename')";
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
header("Location: add_admin.php");
exit();
?>