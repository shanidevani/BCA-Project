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
              $file = $_FILES['photo']['name'];    

              $tempname = $_FILES['photo']['tmp_name'];
                
            $file_ext = explode('.',$file);
            $file_ext_check = strtolower(end($file_ext));
            $valid_file_ext = array('pdf');
            echo $valid_file_ext;
            if(in_array($file_ext_check,$valid_file_ext))
            {
              $folder="../assets/documents/homework/".$file;
              echo $folder; 
              move_uploaded_file($tempname,$folder);
              $filename = $file;
            
            }
            else
            {
              echo "this file extation is invalid plz anter valid file.";
            }


              if($doh != "" && $dos != "")
              {
                  $qry = "UPDATE `homework` SET `homework`='$homework', `doh`='$doh', `dos`='$dos',`homework_file`='$filename'  WHERE `homework_id`='$h_id'";
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