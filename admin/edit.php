<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: index.php");
  exit;
}

?>


<?php //error_reporting(0); ?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> dashboard </title>
    <link rel="stylesheet" href="../assets/css/Dashboard.css">
    <link rel="stylesheet" href="../assets/css/add_student.css">
    <link rel="stylesheet" href="../assets/css/table.css">
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
      <span class="text">shani</span>
      
    </div>
    <div class="add-student-form" style="text-align:center;">

<!-- update form -->

      <form action="update.php" method="post" enctype="multipart/form-data" >

        <?php

          include '../application/config/config.php';

          $id = $_GET['s_id'];
          if($id != null)
          {
            echo $id;
          }
         else
         {
           echo "exit";
         }
         
          $qry = "SELECT * FROM `student` WHERE `student_id`='$id'";
          $data = mysqli_query($con, $qry);

          $total = mysqli_num_rows($data);
          if($total != 0)
          {
              while($result = mysqli_fetch_assoc($data))
              {
                
                ?>
                  <table class="container">
        <tr>
          <td ><label>ragistration no</label></td>
          <td ><input type="text" name="id" id="id" value="<?php echo $id; ?>" readonly></td>
          <td><label>First Name</label></td>
          <td> <input type="text" id="fname" name="fname" value="<?php echo $result['first_name'];?>" placeholder="FIRST NAME"></td>
          <td><label>Last name</label></td>
          <td><input type="text" id="lname" name="lname"  value="<?php echo $result['last_name'];?>" placeholder="LAST NAME"></td>
          
      </tr>
      
<tr>
<td><label>genter<label></td>
  <td>
  <select name="gender">
  <option
          <?php
            if($result['gender'] == "select")
            {
              echo "selected";
            }
          ?>
          >selcet</option>
          <option name="gender" value="Male" 
          <?php
            if($result['gender'] == "Male")
            {
              echo "selected";
            }
          ?>
          >Male</option>
          <option name="gender" value="Female"
          <?php
            if($result['gender'] == "Female")
            {
              echo "selected";
            }
          ?>
          >Female</option>
          <option name="gender" value="Other"
          <?php
            if($result['gender'] == "Other")
            {
              echo "selected";
            }
          ?>
          >Other</option>
</select>
</td>
  <td><label>birth date </label></td>
  <td> <input type="date" id="b_date" name="birthdate" value="<?php  echo $result['birthdate'];?>"></td>
  <td> <label>religion</label></td>
  <td>  <input type="text" name="religion" id="religion" value="<?php  echo $result['religion'];?>" placeholder="RELIGION"></td>
  
</tr>

<tr>
<td><label>cast</label></td>
  <td>  <input type="text" id="cast" name="cast" placeholder="CAST"></td>
  <td> <label>blood Group</label></td>
  <td>  <select name="b-group">
  <option name="b-group-o" value="select"
          <?php
            if($result['blood'] == "select")
            {
              echo "selected";
            }
          ?>
          >selcet</option>
          <option name="b-group-o" value="A+"
          <?php
            if($result['blood'] == "A+")
            {
              echo "selected";
            }
          ?>
          >A+</option>
          <option name="b-group-o" value="B+"
          <?php
            if($result['blood'] == "B+")
            {
              echo "selected";
            }
          ?>
          >B+</option>
          <option name="b-group-o" value="O+"
          <?php
            if($result['blood'] == "O+")
            {
              echo "selected";
            }
          ?>
          >O+</option>
          <option name="b-group-o" value="AB+"
          <?php
            if($result['blood'] == "AB+")
            {
              echo "selected";
            }
          ?>
          >AB+</option>
          <option name="b-group-o" value="A-"
          <?php
            if($result['blood'] == "A-")
            {
              echo "selected";
            }
          ?>
          >A-</option>
          <option name="b-group-o" value="B-"
          <?php
            if($result['blood'] == "B-")
            {
              echo "selected";
            }
          ?>
          >B-</option>
          <option name="b-group-o" value="O-"
          <?php
            if($result['blood'] == "O-")
            {
              echo "selected";
            }
          ?>
          >O-</option>
          <option name="b-group-o" value="AB-"
          <?php
            if($result['blood'] == "AB-")
            {
              echo "selected";
            }
          ?>
          >AB-</option>
        </select></td>
  <td> <label>Mother Tongue</label></td>
  <td>  <input type="text" id="m-tongue" name="m-tongue" value="<?php  echo $result['mother_tongue'];?>" placeholder="MOTHER TONGUE"></td>
</tr>
<tr>
  <td><label>current address</label></td>
  <td colspan="2"> <textarea type="text" rows = "3" cols = "60" id="c-address" name="c-address">
  <?php  echo $result['c_address'];?>
         </textarea></td>
         <td><label>permanent address</label></td>
  <td colspan="2"> <textarea type="text" rows = "3" cols = "60" id="p-address" name="p-address">
  <?php  echo $result['p_address'];?>
         </textarea></td>
</tr>

<tr>
  <td><label>city</label></td>
  <td><input type="text" id="city" name="city" value="<?php  echo $result['city'];?>" placeholder="CITY"></td>
  <td><label>state</label></td>
  <td><input type="text" id="state" name="state" value="<?php  echo $result['state'];?>" placeholder="STATE"></td>
  <td><label>mobile no</label></td>
  <td><input type="text" name="m-no" id="m-no" value="<?php  echo $result['mobile_no'];?>" placeholder="MOBILE NO"></td>
</tr>
             
<tr>
  <td colspan="6"><input type="submit" name="update" id="update" value="update"></td>
</tr>

</tabel>
<?php
              }
          }
          else
          {
            echo '<script>alert("no data found.")</script>';
          }
        ?>
      

 </form>
 </div>
  </section>


  <script src="../assets/js/script.js"></script>

</body>
</html>
