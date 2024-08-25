<?php

session_start();

if(!isset($_SESSION['loggedin1']) || $_SESSION['loggedin1']!=true)
{
  header("location: index.php");
  exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/desboard.css">
  <link rel="stylesheet" href="css/student.css">
  <link rel="stylesheet" href="css/dashmenu.css">
  <link rel="stylesheet" href="css/main.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/box.css">
</head>

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-book-bookmark'></i>
      <span class="logo_name">vellor</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-graduation'></i>
            <span class="link_name">Student Details</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="add_student.php">Student Details</a></li>
          <li><a href="add_student.php">Insert Student</a></li>
          <li><a href="Studentlist.php">Students list</a></li>
         

        </ul>
      </li>

  
      <li>
        <div class="iocn-link">
          <a href="">
            <i class='bx bx-book-content'></i>
            <span class="link_name">Assigment</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="attachassigment.php">Assigment</a></li>
          <li><a href="attachassigment.php">Attach Assigment</a></li>
          <li><a href="viewassigment.php">View all Assigment</a></li>
          <li><a href="submited_assingment.php">Submited</a></li>


        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-content'></i>
            <span class="link_name">Homework</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="add_homework.php">Homework</a></li>
          <li><a href="add_homework.php">Attach Homework</a></li>
          <li><a href="all_homework.php">View all Homework</a></li>
          <li><a href="submited_homework.php">Submited</a></li>

        </ul>
      </li>
     
      
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-bookmark-alt'></i>
            <span class="link_name">Attachments Book</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Attachments Book</a></li>
          <li><a href="Attachbook.php">Attach Subject Book</a></li>
          <li><a href="all_book.php">All Book</a></li>
         
        </ul>
      </li>
     

      <li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <!-- profile code -->
          <?php
              include "../application/config/config.php";

              $user = $_SESSION['usern'];

              $qry = "SELECT * FROM `teacher` WHERE `teacher_id`='$user'";
              $data = mysqli_query($con, $qry);

              $total = mysqli_num_rows($data);

              if($total)
              {
                while ($result = mysqli_fetch_assoc($data))
                {
                  $photo = "../assets/img/profile/teacher/".$result['profile_picture'];
                  $name = $result['name'];
                  $gender = $result['gender'];
                  $p_no = $result['mobile_no'];
                  $add = $result['present_address'];
                  $subject_id = $result['subject'];
                }
              }

              $qry1 = "SELECT * FROM `assingment` WHERE `subject`='$subject_id'";

              $data1 = mysqli_query($con, $qry1);

              $total1 = mysqli_num_rows($data1);

              $qry2 = "SELECT * FROM `book`";

              $data2 = mysqli_query($con, $qry2);

              $total2 = mysqli_num_rows($data2);


        ?>
           <a href="profile.php"><img src="<?php echo $photo;?>" alt="profileImg"></a> 
          </div>
          <div class="name-job">
            <div class="profile_name"><a href="profile.php"><?php echo $name; ?></a> </div>
            <!-- profile code -->
            <!-- <div class="job">Gamer</div> -->
          </div>
          <a href="logout.php"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Dashboard </span>
    </div>

   

    <!-- <div class="box">
      <div class="box1">
        <a href="#">
          <i class="fa fa-calendar-check-o" href="#" style="font-size:24px;color:red"></i><br>
        </a>
        <h>Present</h>
      </div>
      <div class="box1">
        <a href="#">
          <i class="fa fa-calendar-times-o" href="#" style="font-size:24px;color:red"></i><br>
        </a>
        <h>Absent</h>
      </div>
      <div class="box1">
        <a href="#">
          <i class="fa fa-cloud-upload" href="#" style="font-size:24px;color:red"></i><br>
        </a>
        <h>Attachments</h>
      </div>
      <div class="box1">
        <a href="#">
          <i class="fa fa-bullhorn" style="font-size:24px;color:red"></i><br>
        </a>
        <h>Events</h>
      </div>
    </div> -->

    <div class="all">
    <div class="center">
        <div class="img">
            <img src="img/student-64.png" alt="" srcset="">
        </div>
        <div class="studenttext">
            <b> All Students </b><br><br>
            <b><?php echo $total; ?></b>
        </div>
    </div>

    <div class="center">
        <div class="img">
            <img src="img/assigment.png" alt="" srcset="">
        </div>
        <div class="studenttext">
            <b> Assigment </b><br><br>
            <b><?php echo $total1;?></b>
        </div>
    </div>
    <div class="center">
        <div class="img">
            <img src="img/book.png" alt="" srcset="">
        </div>
        <div class="studenttext">
            <b> ALL Subject book </b><br><br>
            <b><?php echo $total2;?></b>
        </div>
    </div><br><br>

</div>
      






    
        
  </section>
  <script src="js/index.js"></script>


</body>

</html>