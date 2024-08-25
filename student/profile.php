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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/desboard.css">
   
  
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  



  
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
            <div class="profile-details" >
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
                }
              }
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
          <span class="text">Profile </span>
        </div>
    
        <div class="dhruvin">
      <div class="img">
        <a target="_blank" href="<?php echo $photo; ?>">
          <img src="<?php echo $photo; ?>" hight="300px" widht="400px" alt="Cinque Terre">
        </a>
        <!-- <div class="desc">Dhruvin</div> -->
      </div>
    </div>

    <div class="detail">
      <table>
        <tr>
          <td><label for="">Name :- </label></td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td><label for="">Genter :- </label></td>
          <td><?php echo $gender; ?></td>
        </tr>
        <tr>
          <td><label for="">Phone :-</label></td>
          <td><?php echo $p_no; ?></td>
        </tr>
        <tr>
          <td><label for="">Address :-</label></td>
          <td><?php echo $add; ?></td>
        </tr>
      </table>
     

    </div>
      </section>
      <script src="js/script.js"></script>




   
</body>
</html>