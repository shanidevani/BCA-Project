<?php
// error_reporting(0);

include '../application/config/config.php';

if(isset($_POST['save']))
{

    $qry = "SELECT * FROM `subject` WHERE `subject_name`= '".$_POST['subject']."'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $subject =  $result['subject_id'];
                  $sem = $result['sem'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
              $doh = $_POST['h_date'];
              echo $doh;
              $dos = $_POST['s_date'];
              echo $dos;
              $homework = $_POST['homework'];
              echo $homework;
              //photo
              $file = $_FILES['file']['name'];    

              $tempname = $_FILES['file']['tmp_name'];
                
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
              if($subject != "" && $doh != "" && $dos != "" && $filename != "")
              {
                  $qry = "INSERT INTO `homework` (`subject`, `homework`, `doh`, `dos`, `homework_file`,`sem`) VALUE ('$subject','$homework','$doh','$dos','$filename','$sem')";
                  $data = mysqli_query($con , $qry);

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
header("Location: all_homework.php");
exit();
            ?>