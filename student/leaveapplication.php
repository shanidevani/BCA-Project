
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
    <link rel="stylesheet" href="css/leaveapplication.css">
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
              <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bxs-graduation'></i>
                <span class="link_name">Techers</span>
              </a>
              <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Teachers</a></li>
              <li><a href="#">Subjest</a></li>
              <li><a href="#">Class Schedule</a></li>
    
            </ul>
          </li>
    
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-bookmarks'></i>
                <span class="link_name">Leave Application</span>
              </a>
              <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Leave Application</a></li>
    
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
              <li><a class="link_name" href="assigment.php">Assigment</a></li>
    
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
    
    
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-book-heart'></i>
                <span class="link_name">Exam Master</span>
              </a>
              <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Exam Master</a></li>
    
              <li><a href="#">Exam Schedule</a></li>
              <!-- <li><a href="#">Report Card</a></li> -->
    
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
                  $lname = $result['last_name'];
                  $gender = $result['gender'];
                  $sem = $result['semester'];
                  $p_no = $result['mobile_no'];
                  $add = $result['c_address'];
                }
              }
        ?>
       <a href="profile.php"> <img src="<?php echo $photo;?>" alt="profileImg"></a>
              </div>
              <div class="name-job">
              <div class="profile_name"><a href="profile.php"><?php echo $_SESSION['user']; ?></a></div>
              </div>
              <a href="logout.php"><i class='bx bx-log-out'></i></a>
            </div>
          </li>
        </ul>
      </div>
      <section class="home-section">
        <div class="home-content">
          <i class='bx bx-menu'></i>
          <span class="text">Dhruvin </span>
        </div>
         
         
        
  
        <h3>Leave Application </h3><br>
        <div class="container">
            <form action="insert_application.php" method="post">
              <label for="fname">First Name</label>
              <input type="text" id="fname" value="<?php echo $name; ?>" name="firstname" placeholder="Your name.." readonly>
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lastname" value="<?php echo $lname; ?>" placeholder="Your last name.." readonly>
          
            

              <label for="sem">Semester</label>
              <select id="sem" name="sem" readonly>
                <option value="australia"
                <?php
                  if($sem == "Select")
                  {
                    echo "selected";
                  }
                ?>
                >Select</option>  
                <option value="Sem-1"
                <?php
                  if($sem == "Sem-1")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-1</option>
                <option value="Sem-2"
                <?php
                  if($sem == "Sem-2")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-2</option>
                <option value="Sem-3"
                <?php
                  if($sem == "Sem-3")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-3 </option>
                <option value="Sem-4"
                <?php
                  if($sem == "Sem-4")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-4</option>
                <option value="Sem-5"
                <?php
                  if($sem == "Sem-5")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-5 </option>
                <option value="Sem-6"
                <?php
                  if($sem == "Sem-6")
                  {
                    echo "selected";
                  }
                ?>
                >Sem-6</option>
              </select>
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
          
        
         
        
          </div>
      </section>
      <script src="js/script.js"></script>




   
</body>
</html>