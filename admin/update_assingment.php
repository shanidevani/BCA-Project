<?php
// error_reporting(0);

include '../application/config/config.php';

if(isset($_POST['update']))
{
  
    $s_id = $_POST['c_id'];
    echo $s_id;

   $title = $_POST['title'];
   echo $title;

   $type = $_POST['type'];
   echo $type;


   $remarks = $_POST['remarks'];
   echo $remarks;

   $file = $_FILES['photo']['name'];    

              $tempname = $_FILES['photo']['tmp_name'];
                
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


   $date = $_POST['date'];
   echo $date;

   $submition = $_POST['submition'];
   echo $submition;
    


    if($title != "" && $type != "" && $submition != "")
    {
        $qry = "UPDATE `assingment` SET   `title`=' $title', `type`='$type',  `remarks`='$remarks', `date`='$date', `submition_date`=' $submition',`file`='$filename' WHERE `assingment_id`='$s_id'";
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