<?php
error_reporting(0);
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
    <link rel="stylesheet" href="../assets/css/edit_student.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
       
input[type=text], select, textarea {
    width: 20%;
}

input[type=submit] {
    width: 10%;
    margin-left: 2%;
    padding: 0.5% 0.5% 0.5% 0.5%;
}

       tr td,tr th
       {
        padding: 15px;
        border: 5px;
        text-align: center;
       size: 5px;
       }
       </style>
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
      <span class="text">shani</span>
    </div>
    <div class="student_list">
     <!-- search box -->
      <div class="search_box">
        <form action="" method="post">
        <?php
            include '../application/config/config.php';

            
            $qry = "SELECT * FROM courses";

            $data = mysqli_query($con, $qry);
            $total = mysqli_num_rows($data);

            if($total)
            {
                ?>
 <label>courses</label>
 <select name="courses">
<option>select</option>
<?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                            echo "<option>".$result['name']."</option>";
                        }
                      }
                      mysqli_close($con);
                        ?>

</select>

          <input type="submit" name="submit" value="search" id="submit">
      </form>
      </div>
      <?php
            include '../application/config/config.php';
            
            if(isset($_POST['submit']))
            {
              $qry = "SELECT * FROM `courses` WHERE `name`= '".$_POST['courses']."'";
    $data = mysqli_query($con, $qry);
    
    $total = mysqli_num_rows($data);
  
              if($total)
              {
                while ($result = mysqli_fetch_assoc($data)) 
                {
                  $courses =  $result['courses_id'];
                }
              }
              else
              {
                  echo '<script>alert("no data found.")</script>';
              }
    //  echo $courses;
              // $id = $_POST['courses'];
              
            }
                ?>          
  <?php
 
          $query = "SELECT * FROM `teacher` WHERE `courses`='$courses'";
          $data = mysqli_query($con, $query);
          $total = mysqli_num_rows($data);

          if($total)
          {
                ?>
                <table class="container">
                    <tr>
                        <th>Edit</th>
                        <th>Teacher id</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>religion</th>
                        <th>Blood Group</th>
                        <th>Birthdate</th>
                        <th>Mobile No</th>
                        <th>Present address</th>
                        <th>Permanent address</th>
                        <th>Profile Picture</th>  
                        <th>courses</th>
                        <th>subject</th>                    
                        <th>Email</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
                        <th>Create at</th>
                        <th>updated at</th>
                    </tr>
                    <?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                            echo "<tr>
                                    <td><a href='edit_teach.php?s_id=$result[teacher_id]'>Edit</a></td>
                                    <td> ".$result['teacher_id']."</td>
                                    <td> ".$result['name']."</td>
                                    <td> ".$result['gender']."</td>
                                    <td> ".$result['religion']."</td>
                                    <td> ".$result['blood_group']."</td>
                                    <td> ".$result['date_of_birth']."</td>
                                    <td> ".$result['mobile_no']."</td>
                                    <td> ".$result['present_address']."</td>
                                    <td> ".$result['permanent_address']."</td>
                                    <td> ".$result['profile_picture']."</td>
                                    <td> ".$result['courses']."</td>
                                    <td> ".$result['subject']."</td>
                                    <td> ".$result['email']."</td>
                                    <td> ".$result['password']."</td>
                                    <td> ".$result['confirm_password']."</td>
                                    <td> ".$result['create_at']."</td>
                                    <td> ".$result['update_at']."</td>
                                 </tr>";
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