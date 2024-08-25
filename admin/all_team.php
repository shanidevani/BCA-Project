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
    <link rel="stylesheet" href="../assets/css/table.css">
    <link rel="stylesheet" href="../assets/css/containerx.css">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
       tr td,tr th
       {
        padding: 2px;
        border: 1px solid #000;
        text-align: center;
        /* letter-spacing: 0.1px; */
        /* line-height: 1.8; */
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
      <span class="text">ALL TEAM</span>
    </div>
    <div class="student_list">
    <form action="ourteam.php" method="post">
          <input type="submit"  name="insert_team" value="INSERT OURTEAM" id="submit">
      </form>
    <?php
            include '../application/config/config.php';

            $qry = "SELECT * FROM `ourteam`";

            $data = mysqli_query($con, $qry);
            $total = mysqli_num_rows($data);

            if($total)
            {
                ?>
                <table style="border: 2px solid #000;" class="container">
                    <tr>
                        <th>#</th>

                        <th>Teacher-1</th>
                       <th>Teacher-2</th>
                       <th>Teacher-3</th>
                       <th>Teacher-4</th>
                       <th>Teacher-5</th>
                       <th>Teacher-6</th>
                       <th>Teacher-7</th>
                       <th>Teacher-8</th>
                       <th>Teacher-9</th>
                        <th>Oparation</th>
                        
                    </tr>
                  
                    <?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                            
                          $id1 = $result['teacher_1'];
                        $qry1 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id1'";

                            $data1 = mysqli_query($con, $qry1);
                            $total1 = mysqli_num_rows($data1);

                            if($total1)
                            {
                                while ($result1 = mysqli_fetch_assoc($data1)) 
                                        {
                                            $name1 = $result1['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found1.")</script>';
                            }
                            $id2 = $result['teacher_2'];
                        $qry2 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id2'";

                            $data2 = mysqli_query($con, $qry2);
                            $total2 = mysqli_num_rows($data2);

                            if($total2)
                            {
                                while ($result2 = mysqli_fetch_assoc($data2)) 
                                        {
                                            $name2 = $result2['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found2.")</script>';
                            }
                            $id3 = $result['teacher_3'];
                        $qry3 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id3'";

                            $data3 = mysqli_query($con, $qry3);
                            $total3 = mysqli_num_rows($data3);

                            if($total3)
                            {
                                while ($result3 = mysqli_fetch_assoc($data3)) 
                                        {
                                            $name3 = $result3['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found3.")</script>';
                            }
                            $id4 = $result['teacher_4'];
                        $qry4 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id4'";

                            $data4 = mysqli_query($con, $qry4);
                            $total4 = mysqli_num_rows($data4);

                            if($total4)
                            {
                                while ($result4 = mysqli_fetch_assoc($data4)) 
                                        {
                                            $name4 = $result4['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found4.")</script>';
                            }
                            $id5 = $result['teacher_5'];
                        $qry5 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id5'";

                            $data5 = mysqli_query($con, $qry5);
                            $total5 = mysqli_num_rows($data5);

                            if($total5)
                            {
                                while ($result5 = mysqli_fetch_assoc($data5)) 
                                        {
                                            $name5 = $result5['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found5.")</script>';
                            }
                            $id6 = $result['teacher_6'];
                        $qry6 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id6'";

                            $data6 = mysqli_query($con, $qry6);
                            $total6 = mysqli_num_rows($data6);

                            if($total6)
                            {
                                while ($result6 = mysqli_fetch_assoc($data6)) 
                                        {
                                            $name6 = $result6['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found6.")</script>';
                            }
                            $id7 = $result['teacher_7'];
                        $qry7 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id7'";

                            $data7 = mysqli_query($con, $qry7);
                            $total7 = mysqli_num_rows($data7);

                            if($total7)
                            {
                                while ($result7 = mysqli_fetch_assoc($data7)) 
                                        {
                                            $name7 = $result7['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found7.")</script>';
                            }
                            $id8 = $result['teacher_8'];
                        $qry8 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id8'";

                            $data8 = mysqli_query($con, $qry8);
                            $total8 = mysqli_num_rows($data8);

                            if($total8)
                            {
                                while ($result8 = mysqli_fetch_assoc($data8)) 
                                        {
                                            $name8 = $result8['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found8.")</script>';
                            }
                            $id9 = $result['teacher_9'];
                        $qry9 = "SELECT * FROM `teacher` WHERE `teacher_id`='$id9'";

                            $data9 = mysqli_query($con, $qry9);
                            $total9 = mysqli_num_rows($data9);

                            if($total9)
                            {
                                while ($result9 = mysqli_fetch_assoc($data9)) 
                                        {
                                            $name9 = $result9['name'];
                                            
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found9.")</script>';
                            }
                            echo "<tr>
                                    <td> ".$result['id']."</td>
                                    <td> ".$name1."</td>
                                    <td> ".$name2."</td>
                                    <td> ".$name3."</td>
                                    <td> ".$name4."</td>
                                    <td> ".$name5."</td>
                                    <td> ".$name6."</td>
                                    <td> ".$name7."</td>
                                    <td> ".$name8."</td>
                                    <td> ".$name9."</td>
                                    <td><a href='delete_team.php?o_id=$result[id]'class=container>Delete</a></td>
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