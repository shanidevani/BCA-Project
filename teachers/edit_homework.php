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
        <!-- <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Student</a></li>
        </ul> -->
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
          <li><a href="#">Student List</a></li>
          <li><a href="#">add student</a></li>
          <li><a href="#">edit student</a></li>
          <li><a href="#">delete student</a></li>
        </ul>
      </li>
      <!-- <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-male' ></i>
            <span class="link_name">Perents</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Perents</a></li>
          <li><a href="#">perents list</a></li>
          <li><a href="#">add perents</a></li>
          <li><a href="#">edit perents</a></li>
          <li><a href="#">delete perents</a></li>
        </ul>
      </li> -->
      
      <li>
        <div class="iocn-link">
        <a href="#">
        <i class='bx bx-male' ></i>
          <!-- <i class='bx bx-female' ></i> -->
          <span class="link_name">teachers </span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">teachers </a></li>
          <li><a href="#">teachers list</a></li>
          <li><a href="#">add teachers</a></li>
          <li><a href="#">edit teachers</a></li>
          <li><a href="#">delete teachers</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-bookmarks'></i>
          <span class="link_name">academic</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">academic</a></li>
          <!-- <li><a href="#">control class</a></li> -->
          <li><a href="#">create class</a></li>
          <li><a href="#">ctreate section</a></li>
          <!-- <li><a href="#">subject</a></li> -->
          <li><a href="#">subject list </a></li>
          <li><a href="#">create subject</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-content'></i>
            <span class="link_name">assigment</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">assigment</a></li>
          <li><a href="#">assigment list</a></li>
          <li><a href="#">create assigment</a></li>
          <li><a href="#">teacher assigment list</a></li>
          <li><a href="#">create assigment</a></li>
          <li><a href="#">class schedule</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bxl-google-cloud'></i>
          <span class="link_name">atechment book</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">atechment book</a></li>
          <li><a href="#">uploade content</a></li>
          <li><a href="#">ctreate atechment</a></li>
          <li><a href="#">ctreate atechment type</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt'></i>
          <span class="link_name">homework</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">homework</a></li>
          <li><a href="#">homework</a></li>
          <li><a href="#">evaluation report</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-heart'></i>
          <span class="link_name">exam</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">exam master</a></li>
          <li><a href="#">exam term</a></li>
          <li><a href="#">exam hall</a></li>
          <li><a href="#">mark distribution</a></li>
          <li><a href="#">exam satup</a></li>
          <li><a href="#">exam list</a></li>
          <li><a href="#">create exam</a></li>
          <li><a href="#">exam schedule</a></li>
          <li><a href="#">add schedule</a></li>
          <li><a href="#">mark entries</a></li>
          <li><a href="#">grade range</a></li>
          <li><a href="#">create grade range</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-bookmark-alt' ></i>
          <span class="link_name">attendance</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">attendance</a></li>
          <li><a href="#">student</a></li>
          <li><a href="#">employee </a></li>
          <li><a href="#">teachers</a></li>
          <li><a href="#">exam</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-conversation'></i>
          <span class="link_name">event</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">event</a></li>
          <li><a href="#">event type</a></li>
          <li><a href="#">event list</a></li>
          <li><a href="#">create event</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
        <a href="#">
          <i class='bx bx-list-check'></i>
          <span class="link_name">report</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">report</a></li>
          <li><a href="#">student report</a></li>
          <li><a href="#">employee report</a></li>
          <li><a href="#">teachers report</a></li>
          <li><a href="#">exam report</a></li>
          <li><a href="#">leave report</a></li>
          <li><a href="#">report card</a></li>
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
          <li><a href="#">home</a></li>
          <li><a href="#">about us</a></li>
          <li><a href="#">gallery</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="#">our team</a></li>
          <li><a href="#">contract us</a></li>
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

      <i class='bx bx-log-out' ></i>
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
      <form action="update_homework.php" method="post" enctype="multipart/form-data" >
      <?php

include '../application/config/config.php';

$id = $_GET['h_id'];
if($id != null)
{
  echo $id;
}
else
{
 echo "exit";
}

$qry = "SELECT * FROM `homework` WHERE `homework_id`='$id'";
$data = mysqli_query($con, $qry);

$total = mysqli_num_rows($data);
if($total != 0)
{
    while($result = mysqli_fetch_assoc($data))
    {
      
      ?>
        <tabel>
     <tr>
         <td><label>homework id</label></td>
         <td><input type="text" name="h_id" id="h_id" value="<?php echo $result['homework_id']; ?>" readonly ></td>
    </tr>
        <tr>
    <td><label>homework</label></td>
    <td><input type="text" name="homework" id="homework" value="<?php echo $result['homework']; ?>" placeholder="HOMEWORK"></td>
</tr>
<tr>
    <td><label>date of homework</label></td>
    <td><input type="date" name="h_date" id="h_date" value="<?php echo $result['doh']; ?>" ></td>
</tr>

<tr>
    <td><label>date of submition</label></td>
    <td><input type="date" name="s_date" id="_date" value="<?php echo $result['dos']; ?>" ></td>
</tr>


<tr>
    <td><label>attachment file</label></td>
    <td><input type="file" name="photo" id="file" ></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" name="update" id="update" value="UPDATE" ></td> 
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
