<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
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
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Dashboard.css">
    <link rel="stylesheet" href="../assets/css/add_student.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-book-bookmark'></i>
      <span class="logo_name">vellor</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="Dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <!-- <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Student</a></li>
        </ul> -->
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-graduation'></i>
            <span class="link_name">Student</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Student</a></li>
          <li><a href="all_student.php">Student List</a></li>
          <li><a href="add_student.php">add student</a></li>
          <!-- <li><a href="#">edit student</a></li>
          <li><a href="#">delete student</a></li> -->
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bx-male' ></i>
          <!-- <i class='bx bx-female' ></i> -->
          <span class="link_name">teachers </span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">teachers </a></li>
          <li><a href="all_teacher.php">teachers list</a></li>
          <li><a href="add_teacher.php">add teachers</a></li>
          <!-- <li><a href="#">edit teachers</a></li>
          <li><a href="#">delete teachers</a></li> -->
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-bookmarks'></i>
          <span class="link_name">academic</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">academic</a></li>
          <!-- <li><a href="#">control class</a></li> -->
          <li><a href="insert_class.php">create courses</a></li>
          <li><a href="create_subject.php">create subject</a></li>
          <!-- <li><a href="#">subject</a></li> -->
          <li><a href="all_courses.php">courses list </a></li>
          <li><a href="all_subject.php">subject list</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-content'></i>
            <span class="link_name">assigment</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">assigment</a></li>
          <li><a href="assingment/all_assingment.php">assigment list</a></li>
          <li><a href="assingment/create_assingment.php">create assigment</a></li>
         
        </ul>
      </li>
      <!-- <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bxl-google-cloud'></i>
          <span class="link_name">atechment book</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">atechment book</a></li>
          <li><a href="#">uploade content</a></li>
          <li><a href="#">ctreate atechment</a></li>
          <li><a href="#">ctreate atechment type</a></li>
        </ul>
      </li> -->
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt'></i>
          <span class="link_name">homework</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">homework</a></li>
          <li><a href="add_homework.php">homework</a></li>
          <li><a href="all_homework.php">homework list</a></li>
          <li><a href="all_homework.php">homework list</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-heart'></i>
          <span class="link_name">exam</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">exam master</a></li>
          <li><a href="exam master/exam.php">add exam shedual</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bxs-user'></i>
          <span class="link_name">admin</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">admin</a></li>
          <li><a href="add_admin.php">add admin</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bxs-contact'></i>
          <span class="link_name">contact</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">contact</a></li>
          <li><a href="add_admin.php">all request</a></li>
        </ul>
      </li>
      
      <!-- <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bx-notepad'></i>
          <span class="link_name">pages</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">pages</a></li>
          <li><a href="#">home</a></li>
          <li><a href="#">about us</a></li>
          <li><a href="#">gallery</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="#">our team</a></li>
          <li><a href="#">contract us</a></li>
        </ul>
      </li> -->
    <div class="profile-details">
      <div class="profile-content">

      <?php
              include "../application/config/config.php";

              $user = $_SESSION['username'];

              $qry = "SELECT * FROM `admin` WHERE `username`='$user'";
              $data = mysqli_query($con, $qry);

              $total = mysqli_num_rows($data);

              if($total)
              {
                while ($result = mysqli_fetch_assoc($data))
                {
                  $photo = "../assets/img/profile/admin/".$result['profile'];
                }
              }
        ?>
        <img src="<?php echo $photo;?>" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name"><?php echo $_SESSION['username']; ?></div>

      </div>
      
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">create class</span>
    </div>
    
<div class="add-student-form" style="text-align:center;">
        <form action="insert_courses.php" method="post">
            <table class="container">
                <tr>
                    <td><label>Courses</label></td>
                    <td><input type="text" name="courses" id="courses" placeholder="COURSES"></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="save" id="save" value="SAVE"></td>
</tr>
</table>
</form>
    </div>
  </section>
  

  <script src="../assets/js/script.js"></script>

</body>
</html>