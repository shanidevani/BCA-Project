<?php
 include '../application/config/config.php';

 //data stor in variable's
 if(isset($_POST['update']))
 {
    $s_id = $_POST['subject_id'];
    
     $subject_name = $_POST['subject-name'];
     echo $subject_name;
     $subject_code = $_POST['subject-code'];
     echo $subject_code;
     $subject_type = $_POST['subject_type'];
     echo $subject_type;
    $sem = $_POST['sem'];
    echo $sem;
if( $subject_name != "" && $subject_code != "" && $subject_type != "" && $sem != "")
{

    $qry = "UPDATE `subject` SET  `subject_name`='$subject_name', `subject_code`='$subject_code', `subject_type`='$subject_type',`sem`='$sem' WHERE `subject_id`='$s_id'";
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
 else{
    echo "no";
  }

  header("Location: all_subject.php");
    exit();
?>