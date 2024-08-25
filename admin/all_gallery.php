<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}

?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> dashboard </title>
    <link rel="stylesheet" href="../assets/css/Dashboard.css">
    <link rel="stylesheet" href="../assets/css/dashmenu.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <link rel="stylesheet" href="../assets/css/add_student.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <li><a href="add_student.php">Add Student</a></li>
          <li><a href="all_student.php">Student List</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bx-male' ></i>
          <span class="link_name">Teachers </span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Teachers </a></li>
          <li><a href="add_teacher.php">Add Teachers</a></li>
          <li><a href="all_teacher.php">Teachers List</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-bookmarks'></i>
          <span class="link_name">Academic</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Academic</a></li>
          <li><a href="insert_class.php">Create Courses</a></li>
          <li><a href="create_subject.php">Create Subject</a></li>
          <li><a href="all_courses.php">Courses List </a></li>
          <li><a href="all_subject.php">Subject List</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="create_assingment.php">
            <i class='bx bx-book-content'></i>
            <span class="link_name">Assigment</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="create_assingment.php">Assigment</a></li>
          <li><a href="create_assingment.php">Create Assigment</a></li>
          <li><a href="all_assingment.php">Assigment list</a></li>
          
         
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
        <a href="add_homework.php">
          <i class='bx bx-book-alt'></i>
          <span class="link_name">Homework</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="add_homework.php">Homework</a></li>
          <li><a href="add_homework.php">Homework</a></li>
          <li><a href="all_homework.php">Homework List</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
        <a href="add_admin.php">
        <i class='bx bxs-user'></i>
          <span class="link_name">Admin</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="add_admin.php">Admin</a></li>
          <li><a href="add_admin.php">Add Admin</a></li>
          <li><a href="all_admin.php">All Admin</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="contac_list.php">
        <i class='bx bxs-contact'></i>
          <span class="link_name">Contact</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="contac_list.php">Contact</a></li>
          <li><a href="contac_list.php">All Request</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bx-notepad'></i>
          <span class="link_name">pages</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">pages</a></li>
          <li><a href="add_slider.php">home</a></li>
          <li><a href="ourteam.php">Our Team</a></li>
          <li><a href="gallery.php">gallery</a></li>
          <li><a href="all_slider.php">All Slider</a></li>
          <li><a href="all_team.php">All Team</a></li>
          <li><a href="all_gallery.php">All Gallery</a></li>
        </ul>
      </li>
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
      <a href="logout.php"><i class='bx bx-log-out' ></i></a>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">GALLERY</span>
    </div>
    
    <div class="add-student-form" style="text-align:center;">
    <form action="gallery.php" method="post">
        <input type="submit" name="add_gallery" id="add_gallery" value="INSERT GALLERY">
      </form>
    <?php
        $qry1 = "SELECT * FROM `gallery`";
        $data1 = mysqli_query($con, $qry1);

        $total1 = mysqli_num_rows($data1);
        if($total1)
        {
            ?>
            <table class="container">
            <tr>
                <th>File 1</th>
                <th>File 2</th>
                <th>File 3</th>
                <th>File 4</th>
                <th>File 5</th>
                <th>File 6</th>
                <th>File 7</th>
                <th>file 8</th>
                <th>File 9</th>
                <th>Oparation</th>
            </tr>
            <?php
            while ($result1 = mysqli_fetch_assoc($data1))
            {
                $file = "../assets/img/gallery/";
                $file1 = $file.$result1['file1'];
                $file2 = $file.$result1['file2'];
                $file3 = $file.$result1['file3'];
                $file4 = $file.$result1['file4'];
                $file5 = $file.$result1['file5'];
                $file6 = $file.$result1['file6'];
                $file7 = $file.$result1['file7'];
                $file8 = $file.$result1['file8'];
                $file9 = $file.$result1['file9'];
                echo "
                <tr>
            <td><img src=".$file1."  width='100px' height='100px'></td>
            <td><img src=".$file2."  width='100px' height='100px'></td>
            <td><img src=".$file3."  width='100px' height='100px'></td>
            <td><img src=".$file4."  width='100px' height='100px'></td>
            <td><img src=".$file5."  width='100px' height='100px'></td>
            <td><img src=".$file6."  width='100px' height='100px'></td>
            <td><img src=".$file7."  width='100px' height='100px'></td>
            <td><img src=".$file8."  width='100px' height='100px'></td>
            <td><img src=".$file9."  width='100px' height='100px'></td>

            <td ><a href='delete_gallery.php?g_id=$result1[id]'class=containerx>Delete</a></td>
        </tr>
                ";
            }
        
    ?>
        
        
        </table>
        <?php
            }
            else
            {
                echo '<script>alert("no data found.")</script>';
            }
            ?>
    </div>


  </section>
  

  <script src="../assets/js/script.js"></script>

</body>
</html>
