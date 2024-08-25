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
    <link rel="stylesheet" href="../assets/css/add_student.css">
    <link rel="stylesheet" href="../assets/css/table.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>

.container {

border-radius: 5px;
background-color: #ffffff;
padding: 20px;
height: auto;
margin: auto;
width: 60%;
border: 3px solid #11101d;
padding: 10px;
}
.date{
  border-radius: 5px;
background-color: #ffffff;
padding: 20px;
height: auto;
margin: auto;
width: 60%;

padding: 10px;
}
     table
     {
       border: 2px solid #000;
     }
     td{
       border: 1px solid #000;
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

              $qry1 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id'";

              $data1 = mysqli_query($con, $qry1);
              $total1 = mysqli_num_rows($data1);

              if($total1)
              {
                while ($result1 = mysqli_fetch_assoc($data1)) 
                      {
                          $subject_name = $result1['subject_name'];
                          $type = $result1['subject_type'];
                          $sem = $result1['sem'];
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
      <i class='bx bx-menu' ></i>
      <span class="text">ADD HOMEWORK</span>
    </div>
    

<div class="container">
            <form action="insert_homework.php" method="post" enctype="multipart/form-data" >
            
            <label for="">Subject</label>
            <input type="text" name="subject" id="subject" value="<?php echo $subject_name; ?>" readonly>
<br><br>
            
              
    <label>Date Of Homework</label><br>
    <input type="date" name="h_date" id="h_date" class="date" ><br><br>

    <label>Date Of Submition</label><br>
    <input type="date" name="s_date" id="s_date" class="date" ><br><br>

    
    <label>homework</label>
   <input type="text" name="homework" id="homework" placeholder="HOMEWORK"required>
<br><br>


    <label>Attachment File</label>
    <input type="file" name="file" id="file" class="date"required>
<br><br>
  <input type="submit" name="save" id="save" value="SAVE" >
<br><br>

            </form>
          </div>

          </div>

  </section>
  

  <script src="../assets/js/script.js"></script>

</body>
</html>
