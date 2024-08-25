<?php
    include "../application/config/config.php";

    //error_reporting(0);

    if(isset($_POST['save']))
    {
        $name = $_POST['subeject_name'];
        $qry1 = "SELECT * FROM `subject` WHERE `subject_name`='$name'";
              $data1 = mysqli_query($con, $qry1);

              $total1 = mysqli_num_rows($data1);

              if($total1)
              {
                while ($result1 = mysqli_fetch_assoc($data1))
                {
                  $subject_id = $result1['subject_id'];
                }
              }
        $remark = $_POST['remark'];
        
        $file = $_FILES['file']['name'];    

  $tempname = $_FILES['file']['tmp_name'];
    
$file_ext = explode('.',$file);
$file_ext_check = strtolower(end($file_ext));
$valid_file_ext = array('pdf');
if(in_array($file_ext_check,$valid_file_ext))
{
  $folder="../assets/documents/book/".$file;
  echo $folder; 
  move_uploaded_file($tempname,$folder);
  $filename = $file;

}
else
{
  echo "this file extation is invalid plz anter valid file.";
}
$sem = $_POST['sem'];
if($file != "" && $name != "" && $sem != "")
{
    $qry = "INSERT INTO `book` (`subjectname`, `remark`, `file`,`sem`) VALUE ('$subject_id','$remark','$file','$sem')";

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
else
    {
        echo '<script>alert("plz enter all data.")</script>';
    }

    }
    header("Location: all_book.php");
exit();

?>