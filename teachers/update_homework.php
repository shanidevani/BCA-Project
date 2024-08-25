<?php
// error_reporting(0);

include '../application/config/config.php';

if(isset($_POST['update']))
{

            $h_id = $_POST['h_id'];
            echo $h_id;
              $doh = $_POST['h_date'];
              echo $doh;
              $dos = $_POST['s_date'];
              echo $dos;
              $homework = $_POST['homework'];
              echo $homework;
              //photo
$filename = $_FILES["photo"]["name"];
// echo $filename;
  $tempname = $_FILES["photo"]["tmp_name"];
//echo $tempname;
  $folder = "../assets/img/profile/student/".$filename;
echo $folder;

  //move file into student folder
  move_uploaded_file($tempname, $folder);
  //  echo '<img src="$folder" width="100" height="100">';

              if($doh != "" && $dos != "")
              {
                  $qry = "UPDATE `homework` SET `homework`='$homework', `doh`='$doh', `dos`='$dos',`homework_file`='$folder'  WHERE `homework_id`='$h_id'";
                  $data = mysqli_query($con , $qry);

                  if($data)
        {
          
          echo '<script>alert("data updated into database.")</script>';
        }
        else
        {
          echo '<script>alert("data not updates into database.")</script>';
        }
    }
    else
    {
        echo '<script>alert("plz enter all data.")</script>';
    }
}
header("Location: all_homework.php");
exit();
            ?>