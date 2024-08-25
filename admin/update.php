<?php
error_reporting(0);
//  $id = $_GET['s_id'];
include '../application/config/config.php';


    //data stor in variable's
    if(isset($_POST['update']))
    {
        
    echo "yes";
    $s_id = $_POST['id'];

    $fname = $_POST['fname'];
  

    $lname = $_POST['lname'];
 
    $gender = $_POST['gender'];
   
    $birthdate = $_POST['birthdate'];
  
    $religion = $_POST['religion'];
  
    $cast = $_POST['cast'];
  
    $b_group = $_POST['b-group'];
 
    $m_tongue = $_POST['m-tongue'];
 
    $c_add = $_POST['c-address'];
   
    $p_add = $_POST['p-address'];
 
    $city = $_POST['city'];

    $state = $_POST['state'];
 
    $m_no = $_POST['m-no'];

                             

    //data insert into database

       echo "enter";
        $qry = "UPDATE `student` SET `first_name`='$fname', `last_name`='$lname', `gender`='$gender', `birthdate`='$birthdate', `religion`='$religion', `cast`='$cast', `blood`='$b_group', `mother_tongue`='$m_tongue', `c_address`='$c_add', `p_address`='$p_add', `city`='$city', `state`='$state', `mobile_no`='$m_no' WHERE `student_id`='$s_id'";
        $data = mysqli_query($con, $qry);
        if($data)
        {
          echo '<script>alert("data updated into database.")</script>';
        }
        else
        {
          echo '<script>alert("data not updated into database.")</script>';
        }
      
    }else{
      echo "nore";
    }
   
    header("Location: all_student.php");
    exit();
  ?> 