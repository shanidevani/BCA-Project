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
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../assets/css/table.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/box.css">
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
                  $name  = $result['name'];
                }
              }
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
      <span class="text">Student List</span>
    </div>
    <div class="student_list">
    <div class="search_box" style="    text-align: right;">
        <form action="add_student.php" method="post">
          <input type="submit"  name="insert_student" value="insert student" id="submit">
      </form>
      <br>
      </div>
        <?php
            include '../application/config/config.php';

            $qry = "SELECT * FROM `student`";

            $data = mysqli_query($con, $qry);
            $total = mysqli_num_rows($data);

            if($total)
            {
                ?>
                <table style="border: 2px solid #000;" class="container">
                    <tr>
                        <th colspan="2">Oparation</th>
                        <th>Student id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Blood Group</th>
                        <th>Current address</th>
                        <th>Mobile No</th>
                        <th>Perent id</th>
                        <th>Photo</th>
                        <th>courses</th>
                        <th>Admission Date</th>
                    </tr>
                  
                    <?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                          $folder = "../assets/img/profile/student/".$result['photo'];
                            echo "<tr>
                            <td><a href='edit.php?s_id=$result[student_id]'class= container>Edit</a></td>
                            <td ><a href='delete.php?s_id=$result[student_id]'class= container>Delete</a></td>
                                    <td> ".$result['student_id']."</td>
                                    <td> ".$result['first_name']."</td>
                                    <td> ".$result['last_name']."</td>
                                    <td> ".$result['gender']."</td>
                                    <td> ".$result['birthdate']."</td>
                                    <td> ".$result['blood']."</td>
                                    <td> ".$result['c_address']."</td>
                                    <td> ".$result['mobile_no']."</td>
                                    <td> ".$result['parent_id']."</td>
                                    <td><img src=".$folder." width='100px' height='100px' ></td>
                                    <td> ".$result['courses_id']."</td>
                                    <td> ".$result['admission_date']."</td>
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
  
  <script src="js/index.js"></script>


</body>

</html>