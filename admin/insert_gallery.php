<?php

include "../application/config/config.php";

//error_reporting(0);

if(isset($_POST['save']))
{
    $filename1 = $_FILES["file1"]["name"];
    $tempname1 = $_FILES["file1"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename1;
    move_uploaded_file($tempname1, $folder);

    $filename2 = $_FILES["file2"]["name"];
    $tempname2 = $_FILES["file2"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename2;
    move_uploaded_file($tempname2, $folder);

    $filename3 = $_FILES["file3"]["name"];
    $tempname3 = $_FILES["file3"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename3;
    move_uploaded_file($tempname3, $folder);

    $filename4 = $_FILES["file4"]["name"];
    $tempname4 = $_FILES["file4"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename4;
    move_uploaded_file($tempname4, $folder);

    $filename5 = $_FILES["file5"]["name"];
    $tempname5 = $_FILES["file5"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename5;
    move_uploaded_file($tempname5, $folder);

    $filename6 = $_FILES["file6"]["name"];
    $tempname6 = $_FILES["file6"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename6;
    move_uploaded_file($tempname6, $folder);

    $filename7 = $_FILES["file7"]["name"];
    $tempname7 = $_FILES["file7"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename7;
    move_uploaded_file($tempname7, $folder);

    $filename8 = $_FILES["file8"]["name"];
    $tempname8 = $_FILES["file8"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename8;
    move_uploaded_file($tempname8, $folder);

    $filename9 = $_FILES["file9"]["name"];
    $tempname9 = $_FILES["file9"]["tmp_name"];
    $folder = "../assets/img/gallery/".$filename9;
    move_uploaded_file($tempname9, $folder);

    if($filename1 != "" && $filename2 != "" && $filename3 != "" && $filename4  != "" && $filename5  != "" && $filename6 != "" && $filename7 != "" && $filename8 != "" && $filename9 != "")
    {
        $qry = "INSERT INTO `gallery` (`file1`, `file2`, `file3`, `file4`, `file5`, `file6`, `file7`, `file8`, `file9`) VALUE ('$filename1','$filename2','$filename3','$filename4','$filename5','$filename6','$filename7','$filename8','$filename9')";

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
header("Location: all_gallery.php");
exit();
?>