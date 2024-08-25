<?php
error_reporting(0);
    include '../application/config/config.php';

    //data stor in variable's
    if(isset($_POST['save']))
    {
 //    echo "yes";
 $student_id = $_POST['id'];
 // echo $student_id;
 $fname = $_POST['fname'];
   // echo $fname;
    $lname = $_POST['lname'];
 //   echo $lname;
    $gender = $_POST['gender'];
  //  echo $gender;
    $birthdate = $_POST['birthdate'];
  //  echo $birthdate;
    $religion = $_POST['religion'];
  //  echo $religion;
    $cast = $_POST['cast'];
  //  echo $cast;
    $b_group = $_POST['b-group'];
  //  echo $b_group;
    $m_tongue = $_POST['m-tongue'];
  //  echo $m_tongue;
    $c_add = $_POST['c-address'];
  //  echo $c_add;
    $p_add = $_POST['p-address'];
   // echo $p_add;
    $city = $_POST['city'];
   // echo $city;
    $state = $_POST['state'];
   // echo $state;

   if(preg_match("/^([0-9]{10})$/",$_POST['m-no']))
   {
    $m_no = $_POST['m-no'];
    echo $m_no;
   }
    else
    {
      echo "plz enter valid mobile no.";
    }
    
    //photo
    $file = $_FILES["photo"]["name"];
  //  echo $filename;
    $tempname = $_FILES["photo"]["tmp_name"];
  //  echo $tempname;


  $file_ext = explode('.',$file);
  $file_ext_check = strtolower(end($file_ext));
  $valid_file_ext = array('png','jpg','jpeg');

    if(in_array($file_ext_check, $valid_file_ext))
    {
      $folder = "../assets/img/profile/student/".$file;
   // echo $folder;
    //move file into student folder
    move_uploaded_file($tempname, $folder);

    $filename = $file;
    //  echo '<img src="$folder" width="100" height="100">';
    }
    else
    {
      echo "file extation not valid plg uploade valid file.";
    }
    //$class = $_POST['courses'];
    //echo $class;
    $sem = $_POST['sem'];
    //echo $sem;
    
    $school = $_POST['school-name'];
    // echo $school;
    $quali = $_POST['quali'];
    // echo $quali;
    $parent_id = $_POST['parent_id'];
    // echo $parent_id;
    $p_name = $_POST['p_name'];
    $relation = $_POST['relation'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $occu = $_POST['occu'];
    $income = $_POST['income'];
    $education = $_POST['education'];
    if(preg_match("/^([0-9]{10})$/",$_POST['p_no']))
   {
    $p_no  = $_POST['p_no'];
   }
   else
   {
     echo "plz enter valid mobile no.";
   }
      $courses = $_POST['courses'];
      echo $courses;

    $qry = "SELECT * FROM `courses` WHERE `name`= '$courses'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $class =  $result['courses_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
   echo $class;
    //data insert into database

    
      if($fname != "" && $lname != "" && $gender != "" && $birthdate != "" && $c_add != "" && $m_no != ""  && $filename != "")
      {
        // echo "enter";
        $qry = "INSERT INTO `student`(`student_id`, `first_name`, `last_name`, `gender`, `birthdate`, `religion`, `cast`, `blood`, `mother_tongue`, `c_address`, `p_address`, `city`, `state`, `mobile_no`, `photo`, `courses_id`, `semester`, `school_name`, `qualification`, `admission_date`, `parent_id`, `name`, `relation`, `father_name`, `mother_name`, `occupation`, `income`, `education`, `phone_no`) VALUES ('$student_id','$fname','$lname','$gender','$birthdate','$religion','$cast','$b_group','$m_tongue','$c_add','$p_add','$city','$state','$m_no','$filename','$class','$sem','$school','$quali',now(),'$parent_id','$p_name','$relation','$father','$mother','$occu','$income','$education','$p_no')";
        echo $qry;
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
    header("Location: all_student.php");
exit();
  ?>
