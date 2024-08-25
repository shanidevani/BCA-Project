<?php
// error_reporting(0);
    include '../application/config/config.php';

    //data stor in variable's
    if(isset($_POST['save']))
    {
 //    echo "yes";
    $name = $_POST['name'];
 //echo $name;

    $gender = $_POST['gender'];
//echo $gender;

    $religion = $_POST['religion'];
  //echo $religion;

    $b_group = $_POST['b-group'];
 //echo $b_group;

 $birthdate = $_POST['birthdate'];
//echo $birthdate; 

$m_no = $_POST['m-no'];
//echo $m_no;

    $c_add = $_POST['c-address'];
   // echo $c_add;

    $p_add = $_POST['p-address'];
  //  echo $p_add;

    //photo
    $filename = $_FILES["photo"]["name"];
  // echo $filename;
    $tempname = $_FILES["photo"]["tmp_name"];
 //echo $tempname;
    $folder = "../assets/img/profile/teacher/".$filename;
  // echo $folder;

    //move file into student folder
    move_uploaded_file($tempname, $folder);
    //  echo '<img src="$folder" width="100" height="100">';

    
$r_no = $_POST['r_no'];


   $qry = "SELECT * FROM `subject` WHERE `subject_name`= '".$_POST['subject']."'";
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
  //  echo $subject;
     //data insert into database

    
      if($name != "" && $gender != "" && $birthdate != "" && $c_add != "" && $m_no != "")
      {
        // echo "enter";
        $qry = "INSERT INTO `teacher`(`teacher_id` ,`name`,`gender`, `religion`, `blood_group`, `date_of_birth`, `mobile_no`, `present_address`, `permanent_address`, `profile_picture`, `subject` ) VALUES ('$r_no','$name','$gender','$religion','$b_group','$birthdate','$m_no','$c_add','$p_add','$filename','$subject')";
        // echo $qry;
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
    }else{
      echo "no";
    }
    header("Location: all_teacher.php");
exit();
  ?>
  