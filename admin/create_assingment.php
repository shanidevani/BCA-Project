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
        <link rel="stylesheet" href="../assets/css/add_student.css">
        <link rel="stylesheet" href="../assets/css/table.css">
        <!-- Boxiocns CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>


  
  input[type=submit] {
    width: 25%;
    margin-left: 8%;
    padding: 0.5% 0.5% 0.5% 0.5%;
}



/* 
  tr td,tr th
  {
   padding: 2px;
   border: 1px solid #000;
   text-align: center;
   /* letter-spacing: 0.1px; */
   line-height: 1.8;
  } */
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
        <span class="text">CREATE ASSINGMENT</span>
        </div>
        <div class="add-student-form" style="text-align:center;">
        <form action="insert_assingment.php" method="post" enctype="multipart/form-data" >
            <table class="container">
                
                
           
    </tr>
    <tr>
        <td><lable>Title</label></td>
        <td><input type="text" name="title" id="title" placeholder="TITLE" ></td>
    </tr>
    <tr>
        
    <?php
    $qry = "SELECT * FROM `subject`";

$data = mysqli_query($con, $qry);
$total = mysqli_num_rows($data);

if($total)
{
    ?>
        <td><label>Subject</label></td>
        <td><select name="subject">
            <option>select</option>
        <?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                            echo "<option>".$result['subject_name']."</option>";
                        }
                      }
                      
                        ?>
    </select></td>
    </tr>
    <tr>
        <td><label>Type</label></td>
        <td><select name="type">
        <option value="select">select</option>
        <option value="Theory">Theory</option>
        <option value="Practical">Practical</option>
        <option value="Mandatory">Mandatory</option>
    </select></td>
    </tr>
    
    <tr>
        <td><label>Remarks</label></td>
        <td><input type="text" name="remarks" id="remarks" placeholder="REMARKS" ></td>
    </tr>
    <tr>
    
    <tr>
        <td><label>Date</label></td>
        <td><input type="date" name="date" id="date" ></td>
</tr>
    <tr>
        <td><label>Submition date</label></td>
        <td><input type="date" name="submition" id="submition" ></td>
    </tr>
    
<tr>
    <td><label for="" >Choose Your PDF File</label></td>
        <td><input id="pdf" type="file" name="pdf" value=""  required ><br></td>
                    </tr>
    <tr>

        <td colspan="2"><input  type="submit" name="upload" id="upload" value="UPLOAD"></td>

    </tr>
    </table>
    </form>
    </div>
    </section>
    

    <script src="../assets/js/script.js"></script>

    </body>
    </html> 
