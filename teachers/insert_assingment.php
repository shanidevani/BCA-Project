<?php

include "../application/config/config.php";

//error_reporting(0);

if(isset($_POST['upload']))
{
    $title = $_POST['title'];

    $subject_name = $_POST['subject'];

    $qry = "SELECT * FROM `subject` WHERE `subject_name`= '$subject_name'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $subject =  $result['subject_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $type = $_POST['type'];
    $remark = $_POST['remarks'];
    $date = $_POST['date'];
    $sdate = $_POST['submition'];
    $sem = $_POST['sem'];
    $file = $_FILES['file']['name'];    

              $tempname = $_FILES['file']['tmp_name'];
                
            $file_ext = explode('.',$file);
            $file_ext_check = strtolower(end($file_ext));
            $valid_file_ext = array('pdf');
            echo $valid_file_ext;
            if(in_array($file_ext_check,$valid_file_ext))
            {
              $folder="../assets/documents/assingment/".$file;
              echo $folder; 
              move_uploaded_file($tempname,$folder);
              $filename = $file;
            
            }
            else
            {
              echo "this file extation is invalid plz anter valid file.";
            }

            if($file != "" && $sdate != "" && $subject != "")
            {
                $qry = "INSERT INTO `assingment` (`title`, `type`, `subject`, `remarks`, `date`, `submition_date`, `file`, `sem`) VALUE ('$title','$type','$subject','$remark','$date','$sdate','$file','$sem')";

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
header("Location: viewassigment.php");
exit();
?>