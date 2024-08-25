<?php
 include '../application/config/config.php';

 //data stor in variable's
 if(isset($_POST['save']))
 {


    $qry = "SELECT * FROM `courses` WHERE `name`= '".$_POST['courses']."'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $courses =  $result['courses_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
   echo $courses;
     $subject_name = $_POST['subject-name'];
     echo $subject_name;
     $subject_code = $_POST['subject-code'];
     echo $subject_code;
     $subject_type = $_POST['subject_type'];
     echo $subject_type;
     $sem = $_POST['sem'];
     echo $sem;

if($courses != "" && $subject_name != "" && $subject_code != ""  && $subject_type != "" && $sem != "")
{

    $qry = "INSERT INTO `subject` (`courses`, `subject_name`, `subject_code`,  `subject_type`,`sem`) VALUE ('$courses','$subject_name','$subject_code','$subject_type','$sem')";
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