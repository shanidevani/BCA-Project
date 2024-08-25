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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/desboard.css">
  <link rel="stylesheet" href="css/student.css">
 
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/newdes.css">
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
        <a href="Dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-content'></i>
            <span class="link_name">Assigment</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="assingment.php">Assigment</a></li>
        <li><a href="assingment.php">Assigment</a></li>
        
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt'></i>
            <span class="link_name">Homework</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="homework.php">Homework</a></li>
        <li><a href="homework.php">Homework</a></li>
      
        </ul>
      </li>
      
      <li>
        <div class="iocn-link">
          <a href="all_book.php">
            <i class='bx bx-book-heart'></i>
            <span class="link_name">Book</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="all_book.php">Book</a></li>

          <li><a href="all_book.php">All Book</a></li>
          

        </ul>
      </li>
      
      <li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
          <?php
              include "../application/config/config.php";

              $user = $_SESSION['user'];

              $qry = "SELECT * FROM `student` WHERE `student_id`='$user'";
              $data = mysqli_query($con, $qry);

              $total = mysqli_num_rows($data);

              if($total)
              {
                while ($result = mysqli_fetch_assoc($data))
                {
                  $photo = "../assets/img/profile/student/".$result['photo'];
                  $name = $result['first_name'];
                  $gender = $result['gender'];
                  $p_no = $result['mobile_no'];
                  $add = $result['c_address'];
                  $sem = $result['semester'];
                }
              }

              $qry1 = "SELECT * FROM `homework` WHERE `sem`='$sem'";
              $data1 = mysqli_query($con, $qry1);

              $total1 = mysqli_num_rows($data1);

              $qry2 = "SELECT * FROM `assingment` WHERE `sem`='$sem'";
              $data2 = mysqli_query($con, $qry2);

              $total2 = mysqli_num_rows($data2);
        ?>
       <a href="profile.php"> <img src="<?php echo $photo;?>" alt="profileImg"></a>
          </div>
          <div class="name-job">
            <div class="profile_name"><a href="profile.php"><?php echo $_SESSION['user']; ?></a></div>
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
      <span class="text">DASHBOARD</span>
    </div>

    <div class="all">
    <div class="center">
        <div class="img">
            <img src="img/homework.png" alt="" srcset="">
        </div>
        <div class="studenttext">
            <b> Homework </b><br><br>
            <b><?php echo $total1; ?></b>
        </div>
    </div>

   
    <div class="center">
        <div class="img">
            <img src="img/assigment.png" alt="" srcset="">
        </div>
        <div class="studenttext">
            <b> Assigment</b><br><br>
            <b><?php  echo $total2; ?></b>
        </div>
    </div><br><br>

</div>


  </section>
  <script src="js/script.js"></script>


</body>

</html>