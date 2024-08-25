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
  <link rel="stylesheet" href="../assets/css/Dashboard.css">
    <link rel="stylesheet" href="../assets/css/add_student.css">
    <link rel="stylesheet" href="../assets/css/table.css">
  <!-- <link rel="stylesheet" href="css/main.css"> -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/newdes.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/box.css">
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
      <span class="text">Submit Assingment</span>
    </div>

    
    <div class="container">
        <?php
        $id = $_GET['c_id'];
        if($id != null)
        {
          // echo $id;
        }
        else
        {
         echo "exit";
        }
  
        $sql3="SELECT * FROM `assingment` WHERE `assingment_id`='$id'";
        $query=mysqli_query($con,$sql3);
        $total3 = mysqli_num_rows($query);

              if($total3)
              {
                while ($result3 = mysqli_fetch_assoc($query))
                {
                    $subject_id = $result3['subject'];
                }
            }
            $qry4 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id'";
            $query1 = mysqli_query($con, $qry4);
            $total4 = mysqli_num_rows($query1);
            if($total4)
            {
                while($result2 = mysqli_fetch_assoc($query1))
                {
                    $subject_name = $result2['subject_name'];
                    $sem = $result2['sem'];
                }
            }
        ?>
        <form action="insert_submited_assingment.php" method="post" enctype="multipart/form-data" >
              <br>

              <label for="id">Assingment Id</label>
              <input type="text" name="id" id="id" value="<?php echo $id;?>" readonly><br><br>
              
              <label for="">Name</label>
              <input type="text" name="name" id="name" value="<?php echo $name; ?>" readonly><br><br>

              <label for="subject">Subject</label>
              <input type="text" name="subject" id="subject" value="<?php echo $subject_name; ?>" readonly><br><br>

              <label for="date">Submition Date</label><br>
              <input type="date" name="sdate" id="sdate" class="date" ><br><br>

            <label for="file">File</label>
            <input type="file" name="file" id="file"><br><br>

            <input type="submit" name="submit" id="submit" value="Submit"><br><br>
        </form>
    </div>
  


  </section>
  <script src="js/script.js"></script>


</body>

</html>