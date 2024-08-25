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

    <?php
      include '../application/config/config.php';
        $query2 = "SELECT * FROM  `student` ORDER BY `student_id` DESC LIMIT 1";
        $result2 = mysqli_query($con, $query2);
      
        $row = mysqli_fetch_array($result2);
        $last_id = $row['student_id'];
        if ($last_id == "")
        {
            $customer_ID = "RSNOFS1";
        }
        else
        {
            $customer_ID = substr($last_id, 6);
            $customer_ID = intval($customer_ID);
            $customer_ID = "RSNOFS" . ($customer_ID + 1);
        }
     
    ?>
    <div class="add-student-form" style="text-align:center;">
      <form action="insert.php" method="post" enctype="multipart/form-data" >
        
      <table class="container"  style="">
        <tr>
          <td ><label>ragistration no</label></td>
          <td ><input type="text" name="id" id="id" value="<?php echo $customer_ID; ?>" readonly></td>
          <td><label>First Name</label></td>
          <td> <input type="text" id="fname" name="fname" placeholder="FIRST NAME"required></td>
          <td><label>Last name</label></td>
          <td><input type="text" id="lname" name="lname" placeholder="LAST NAME"required></td>
          
      </tr>
      
<tr>
<td><label>genter<label></td>
  <td>
  <select name="gender">
          <option>selcet</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
</select>
</td>
  <td><label>birth date </label></td>
  <td> <input type="date" id="b_date" name="birthdate"></td>
  <td> <label>religion</label></td>
  <td>  <input type="text" name="religion" id="religion" placeholder="RELIGION"></td>
  
</tr>

<tr>
<td><label>cast</label></td>
  <td>  <input type="text" id="cast" name="cast" placeholder="CAST"></td>
  <td> <label>blood Group</label></td>
  <td>  <select name="b-group">
          <option value="select">selcet</option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="O+">O+</option>
          <option value="AB+">AB+</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="O-">O-</option>
          <option value="AB-">AB-</option>
        </select></td>
  <td> <label>Mother Tongue</label></td>
  <td>  <input type="text" id="m-tongue" name="m-tongue" placeholder="MOTHER TONGUE"></td>
</tr>
<tr>
  <td><label>current address</label></td>
  <td colspan="2"> <textarea type="text" rows = "3" cols = "60" id="c-address" name="c-address"required>
         </textarea></td>
         <td><label>permanent address</label></td>
  <td colspan="2"> <textarea type="text" rows = "3" cols = "60" id="p-address" name="p-address"required>
         </textarea></td>
</tr>

<tr>
  <td><label>city</label></td>
  <td><input type="text" id="city" name="city" placeholder="CITY"></td>
  <td><label>state</label></td>
  <td><input type="text" id="state" name="state" placeholder="STATE"></td>
  <td><label>mobile no</label></td>
  <td><input type="text" name="m-no" id="m-no" placeholder="MOBILE NO"></td>
</tr>

<tr>
  <td colspan="2"><label>profile picture</label></td>
  <td colspan="2"><input type="file" name="photo" id="photo" value="" ></td>
  <td></label>semester</label></td>
  <td><select name="sem">
    <option>Select</option>
    <option value="SEM-1">SEM-1</option>
    <option value="SEM_2">SEM-2</option>
    <option value="SEM-3">SEM-3</option>
    <option value="SEM-4">SEM-4</option>
    <option value="SEM-5">SEM-5</option>
    <option value="SEM-6">SEM-6</option>
      </select></td>
</tr>

<tr>
<?php
            

            $qry = "SELECT * FROM `courses`";

            $data = mysqli_query($con, $qry);
            $total = mysqli_num_rows($data);

            if($total)
            {
                ?>
  <td ><label>courses</label></td>
  <td ><select name="courses">
<option>select</option>
<?php
                        while ($result = mysqli_fetch_assoc($data)) 
                        {
                            echo "<option>".$result['name']."</option>";
                        }
                        ?>
</select></td>
<?php
            }
            else
            {
                echo '<script>alert("no data found.")</script>';
            }
            ?>
            <td><label>school name</label></td>
  <td><input type="text" name="school-name" id="school-name" placeholder="SCHOOL NAME"></td>
  <td><label>Qualification</label></td>
  <td><input type="text" name="quali" id="qualification" placeholder="QUALIFICATION"></td>
</tr>


<tr>
  <td colspan="6"><label>Parent Details</label></tr>
</tr>
<?php
$query2 = "SELECT * FROM  `student` ORDER BY `parent_id` DESC LIMIT 1";
$result2 = mysqli_query($con, $query2);

$row = mysqli_fetch_array($result2);
$last_id = $row['parent_id'];
if ($last_id == "")
{
    $customer_ID = "RSNOFP1";
}
else
{
    $customer_ID = substr($last_id, 6);
    $customer_ID = intval($customer_ID);
    $customer_ID = "RSNOFP" . ($customer_ID + 1);
}

?>
<tr>
  <td><label>parent id</label></td>
  <td><input type="text" name="parent_id" id="parent_id" value="<?php  echo $customer_ID;  ?>" readonly></td>
  <td><label>Name</label></td>
  <td><input type="text" name="p_name" id="p_name"required></td>
  <td><label>Relation</label></td>
  <td><input type="text" name="relation" id="relation" placeholder="RELATION"></td>
</tr>
<tr>
  <td><label>Father Name</label></td>
  <td><input type="text" name="father" id="father" placeholder="FATHER NAME"required></td>
  <td><label>Mother Name</label></td>
  <td><input type="text" name="mother" id="mother" placeholder="MOTHER NAME"required></td>
  <td><label>occupation</label></td>
  <td><input type="text" name="occu" id="occu" placeholder="OCCUPATION"></td>
</tr>
<tr>
  <td><label>income</label></td>
  <td><input type="text" name="income" id="income" placeholder="INCOME"></td>
  <td ><label>education</label></td>
  <td ><input type="text" name="education" id="education" placeholder="EDUCATION"></td>
  <td ><label>mobile no</label></td>
  <td ><input type="text" name="p_no" id="p_no" placeholder="MOBILE NO"required></td>
</tr>

<tr>
  <td colspan="6"><input type="submit" name="save" id="save" value="SAVE"></td>
</tr>

</tabel>

 </form>
 </div>

    </section>
  
  <script src="js/index.js"></script>


</body>

</html>