<?php
//error_reporting(0);
//  $id = $_GET['s_id'];
include '../application/config/config.php';


    //data stor in variable's
    if(isset($_POST['update']))
    {

        //    echo "yes";
        $s_id = $_POST['r_no'];
    echo $s_id;
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
   
       
        //data insert into database
   
       
      
           //echo "enter";
           $qry = "UPDATE `teacher` SET `name`='$name' ,`gender`='$gender', `religion`='$religion', `blood_group`='$b_group', `date_of_birth`='$birthdate', `mobile_no`='$m_no', `present_address`='$c_add', `permanent_address`='$p_add' WHERE `teacher_id`='$s_id'";
           $data = mysqli_query($con, $qry);
           if($data)
        {
          echo '<script>alert("data updated into database.")</script>';
         
        }
        else
        {
          echo '<script>alert("data not updated into database.")</script>';
        }
    }
    header("Location: all_teacher.php");
    exit();
     ?>