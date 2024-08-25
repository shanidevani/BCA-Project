<?php
// error_reporting(0);

include '../application/config/config.php';

if(isset($_POST['upload']))
{
  
    
   $title = $_POST['title'];
   echo $title;

   $type = $_POST['type'];
   echo $type;

   $subject_id = $_POST['subject'];
   $qry = "SELECT * FROM `subject` WHERE `subject_name`= '$subject_id'";
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

   $remarks = $_POST['remarks'];
   echo $remarks;

   
 $file = $_FILES['pdf']['name'];    

  $tempname = $_FILES['pdf']['tmp_name'];
    
$file_ext = explode('.',$file);
$file_ext_check = strtolower(end($file_ext));
$valid_file_ext = array('pdf');
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
  

      // $sql="INSERT INTO `pdf_file` (`pdf`) values('$pdf_store')";
      // $query=mysqli_query($con,$sql);
// //photo
// $filename = $_FILES["photo"]["name"];
// // echo $filename;
//   $tempname = $_FILES["photo"]["tmp_name"];
// //echo $tempname;
//   $folder = "../../../assets/img/profile/student/".$filename;
// echo $folder;

//   //move file into student folder
//   move_uploaded_file($tempname, $folder);
  //  echo '<img src="$folder" width="100" height="100">';
   $date = $_POST['date'];
   echo $date;

   $submition = $_POST['submition'];
   echo $submition;
  
   
   



    if($title != "" && $type != "" && $submition != "" && $filename != "")
    {
        $qry = "INSERT INTO `assingment` ( `title`, `type`, `subject`, `remarks`,`file`, `date`, `submition_date`,`sem`) VALUES ('$title','$type','$subject','$remarks','$filename','$date','$submition','$sem')";
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
header("Location: all_assingment.php");
exit();

?>