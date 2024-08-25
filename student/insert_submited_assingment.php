<?php

include "../application/config/config.php";

//error_reporting(0);

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $qry1 = "SELECT * FROM `student` WHERE `first_name`='$name'";
    $data1 = mysqli_query($con, $qry1);

    $total = mysqli_num_rows($data1);

    if($total)
    {
      while ($result = mysqli_fetch_assoc($data1))
      {
        $student_id = $result['student_id'];
      }
    }
    $subject = $_POST['subject'];
    $qry2 = "SELECT * FROM `subject` WHERE `subject_name`='$subject'";
    $data2 = mysqli_query($con, $qry2);

    $total1 = mysqli_num_rows($data2);

    if($total1)
    {
      while ($result1 = mysqli_fetch_assoc($data2))
      {
       $subject_id = $result1['subject_id'];
       $sem = $result1['sem'];
      }
    }
    $sdate = $_POST['sdate'];
    $file = $_FILES['file']['name'];    

  $tempname = $_FILES['file']['tmp_name'];
    
$file_ext = explode('.',$file);
$file_ext_check = strtolower(end($file_ext));
$valid_file_ext = array('pdf');
if(in_array($file_ext_check,$valid_file_ext))
{
  $folder="../assets/documents/submited assingment/".$file;
  echo $folder; 
  move_uploaded_file($tempname,$folder);
  $filename = $file;

}
else
{
  echo "this file extation is invalid plz anter valid file.";
}
$id = $_POST['id'];

if($file != "" && $sdate != "")
{
    $qry = "INSERT INTO `submit_assingment` (`name`, `s_id`, `sdate`, `subject_id`, `sem`, `file`,`assingment_id`) VALUE ('$name','$student_id','$sdate','$subject_id','$sem','$file','$id')";

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
header("Location: dashboard.php");
exit();
?>