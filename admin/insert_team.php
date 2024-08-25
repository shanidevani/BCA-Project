<?php

//error_reporting(0);

include "../application/config/config.php";

if(isset($_POST['save']))
{
    $teacher_I = $_POST['teacher1'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_I'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_1 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_2 = $_POST['teacher2'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_2'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_2 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_3 = $_POST['teacher3'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_3'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_3 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_4 = $_POST['teacher4'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_4'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_4 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_5 = $_POST['teacher5'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_5'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_5 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_6 = $_POST['teacher6'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_6'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_6 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_7 = $_POST['teacher7'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_7'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_7 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_8 = $_POST['teacher8'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_8'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_8 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    $teacher_9 = $_POST['teacher9'];
    $qry = "SELECT * FROM `teacher` WHERE `name`= '$teacher_9'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $teacher_9 =  $result['teacher_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }

    if($teacher_1 != "" && $teacher_2 != "" && $teacher_3 != "" && $teacher_4 != "" && $teacher_5 != "" && $teacher_6 != "" && $teacher_7 != "" && $teacher_8 != "" && $teacher_9 != "") 
    {
        $qry = "INSERT INTO `ourteam` (`teacher_1`, `teacher_2`, `teacher_3`, `teacher_4`, `teacher_5`, `teacher_6`, `teacher_7`, `teacher_8`, `teacher_9`) VALUES ('$teacher_1','$teacher_2','$teacher_3','$teacher_4','$teacher_5','$teacher_6','$teacher_7','$teacher_8','$teacher_9')";
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
header("Location: all_team.php");
exit();
?>