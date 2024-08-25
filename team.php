<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/team.css">
    <link rel="stylesheet" href="assets/css/hader.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="logo"><a href="#">
            <img src="assets/img/logo/vellore.png">
        </a>
    </div>
    <nav>
        <ul>
        <li><a  href="index.php">HOME</a></li>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="services.php">OUR SERVICES</a></li>
            <li><a class="active" href="team.php">OUR TEAM</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="contact_us.php">CONTACT US</a></li>
        </ul>
        <!-- <div class="login">
            <button class="button button1">Login</button>
        </div> -->
    </nav><br>



    <div class="gallery">

        <div class="textgallery">
            <div class="G">O</div>
            <div class="llery">UR&nbsp;</div>
            <div class="G">T</div>
            <div class="llery">EAM</div>
        </div>

        <div class="logogallery">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        </div>
    </div><br>

<?php
   
   include "application/config/config.php";

    $qry = "SELECT * FROM `ourteam`";

    $data = mysqli_query($con, $qry);
    $total = mysqli_num_rows($data);

    if($total)
    {
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
                                            $subject_id = $result1['subject'];
                                            $folder1 = "assets/img/profile/teacher/".$result1['profile_picture'];
                                            $m_no1 = $result1['mobile_no'];
                                            $qry10 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id'";

                            $data10 = mysqli_query($con, $qry10);
                            $total10 = mysqli_num_rows($data10);

                            if($total10)
                            {
                                while ($result10 = mysqli_fetch_assoc($data10)) 
                                        {
                                            $subject1 = $result10['subject_name'];
                                            $sem1 = $result10['sem'];
                                        }
                                    }
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
                                            $subject_id1 = $result2['subject'];
                                            $folder2 = "assets/img/profile/teacher/".$result2['profile_picture'];
                                            $m_no2 = $result2['mobile_no'];
                                            $qry11 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id1'";

                            $data11 = mysqli_query($con, $qry11);
                            $total11 = mysqli_num_rows($data11);

                            if($total11)
                            {
                                while ($result11 = mysqli_fetch_assoc($data11)) 
                                        {
                                            $subject2 = $result11['subject_name'];
                                            $sem2 = $result11['sem'];
                                        }
                                    }
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
                                            $subject_id2 = $result3['subject'];
                                            $folder3 = "assets/img/profile/teacher/".$result3['profile_picture'];
                                            $m_no3 = $result3['mobile_no'];
                                            $qry12 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id2'";

                            $data12 = mysqli_query($con, $qry12);
                            $total12 = mysqli_num_rows($data12);

                            if($total12)
                            {
                                while ($result12 = mysqli_fetch_assoc($data12)) 
                                        {
                                            $subject3 = $result12['subject_name'];
                                            $sem3 = $result12['sem'];
                                        }
                                    }
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
                                            $subject_id3 = $result4['subject'];
                                            $folder4 = "assets/img/profile/teacher/".$result4['profile_picture'];
                                            $m_no4 = $result4['mobile_no'];
                                            $qry13 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id3'";

                            $data13 = mysqli_query($con, $qry13);
                            $total13 = mysqli_num_rows($data13);

                            if($total13)
                            {
                                while ($result13 = mysqli_fetch_assoc($data13)) 
                                        {
                                            $subject4 = $result13['subject_name'];
                                            $sem4 = $result13['sem'];
                                        }
                                    }
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
                                            $subject_id4 = $result5['subject'];
                                            $folder5 = "assets/img/profile/teacher/".$result5['profile_picture'];
                                            $m_no5= $result5['mobile_no'];
                                            $qry14 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id4'";

                            $data14 = mysqli_query($con, $qry14);
                            $total14 = mysqli_num_rows($data14);

                            if($total14)
                            {
                                while ($result14 = mysqli_fetch_assoc($data14)) 
                                        {
                                            $subject5 = $result14['subject_name'];
                                            $sem5 = $result14['sem'];
                                        }
                                    }
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
                                            $subject_id5 = $result6['subject'];
                                            $folder6 = "assets/img/profile/teacher/".$result6['profile_picture'];
                                            $m_no6= $result6['mobile_no'];
                                            $qry15 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id5'";

                            $data15 = mysqli_query($con, $qry15);
                            $total15 = mysqli_num_rows($data15);

                            if($total15)
                            {
                                while ($result15 = mysqli_fetch_assoc($data15)) 
                                        {
                                            $subject6 = $result15['subject_name'];
                                            $sem6 = $result15['sem'];
                                        }
                                    }
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
                                            $subject_id6 = $result7['subject'];
                                            $folder7 = "assets/img/profile/teacher/".$result7['profile_picture'];
                                            $m_no7= $result7['mobile_no'];
                                            $qry16 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id6'";

                            $data16 = mysqli_query($con, $qry16);
                            $total16 = mysqli_num_rows($data16);

                            if($total16)
                            {
                                while ($result16 = mysqli_fetch_assoc($data16)) 
                                        {
                                            $subject7 = $result16['subject_name'];
                                            $sem7 = $result16['sem'];
                                        }
                                    }
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
                                            $subject_id7 = $result8['subject'];
                                            $folder8 = "assets/img/profile/teacher/".$result8['profile_picture'];
                                            $m_no8= $result8['mobile_no'];
                                            $qry17 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id7'";

                            $data17 = mysqli_query($con, $qry17);
                            $total17 = mysqli_num_rows($data17);

                            if($total17)
                            {
                                while ($result17 = mysqli_fetch_assoc($data17)) 
                                        {
                                            $subject8 = $result17['subject_name'];
                                            $sem8 = $result17['sem'];
                                        }
                                    }
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
                                            $subject_id8 = $result9['subject'];
                                            $folder9 = "assets/img/profile/teacher/".$result9['profile_picture'];
                                            $m_no9= $result9['mobile_no'];
                                            $qry18 = "SELECT * FROM `subject` WHERE `subject_id`='$subject_id8'";

                            $data18 = mysqli_query($con, $qry18);
                            $total18 = mysqli_num_rows($data18);

                            if($total18)
                            {
                                while ($result18 = mysqli_fetch_assoc($data18)) 
                                        {
                                            $subject9 = $result18['subject_name'];
                                            $sem9 = $result18['sem'];
                                        }
                                    }
                                        }
                            }
                            else
                            {
                                echo '<script>alert("no data found9.")</script>';
                            }
                        }
                    }
                    else
                    {
                        echo '<script>alert("no data found.")</script>';
                    }
?>

    <div class="ourteam">
        <div class="techer">
            <div class="team_img">
                <img src="<?php echo $folder1; ?>" alt="not found.">
                <h5><?php echo $name1; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name1; ?></p>
                    <p>Subject :- <?php echo $subject1;?> </p>
                    <p>Semester :- <?php echo $sem1;?></p>
                    <p>Mobile No:- <?php echo $m_no1;?></p>
                </div>
            </div>
        </div>




        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder2; ?>" alt="not found.">
                <h5><?php echo $name2; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name2; ?></p>
                    <p>Subject :- <?php echo $subject2;?> </p>
                    <p>Semester :- <?php echo $sem2;?></p>
                    <p>Mobile No:- <?php echo $m_no2;?></p>
                </div>
            </div>
        </div>


        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder3; ?>" alt="not found.">
                <h5><?php echo $name3; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name3; ?></p>
                    <p>Subject :- <?php echo $subject3;?> </p>
                    <p>Semester :- <?php echo $sem3;?></p>
                    <p>Mobile No:- <?php echo $m_no3;?></p>
                </div>
            </div>
        </div>



    </div>



    <div class="ourteam2">
        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder4; ?>" alt="not found.">
                <h5><?php echo $name4; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name4; ?></p>
                    <p>Subject :- <?php echo $subject4;?> </p>
                    <p>Semester :- <?php echo $sem4;?></p>
                    <p>Mobile No:- <?php echo $m_no4;?></p>
                </div>
            </div>
        </div>




        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder5; ?>" alt="not found.">
                <h5><?php echo $name5; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name5; ?></p>
                    <p>Subject :- <?php echo $subject5;?> </p>
                    <p>Semester :- <?php echo $sem5;?></p>
                    <p>Mobile No:- <?php echo $m_no5;?></p>
                </div>
            </div>
        </div>


        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder6; ?>" alt="not found.">
                <h5><?php echo $name6; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name6; ?></p>
                    <p>Subject :- <?php echo $subject6;?> </p>
                    <p>Semester :- <?php echo $sem6;?></p>
                    <p>Mobile No:- <?php echo $m_no6;?></p>
                </div>
            </div>
        </div>



    </div>


    <div class="ourteam3">
        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder7; ?>" alt="not found.">
                <h5><?php echo $name7; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name7; ?></p>
                    <p>Subject :- <?php echo $subject7;?> </p>
                    <p>Semester :- <?php echo $sem7;?></p>
                    <p>Mobile No:- <?php echo $m_no7;?></p>
                </div>
            </div>
        </div>




        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder8; ?>" alt="not found.">
                <h5><?php echo $name8; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name8; ?></p>
                    <p>Subject :- <?php echo $subject8;?> </p>
                    <p>Semester :- <?php echo $sem8;?></p>
                    <p>Mobile No:- <?php echo $m_no8;?></p>
                </div>
            </div>
        </div>


        <div class="techer">
            <div class="team_img">
            <img src="<?php echo $folder9; ?>" alt="not found.">
                <h5><?php echo $name9; ?></h5>
                <div class="team_info">
                    <p>Name :- <?php  echo $name9; ?></p>
                    <p>Subject :- <?php echo $subject9;?> </p>
                    <p>Semester :- <?php echo $sem9;?></p>
                    <p>Mobile No:- <?php echo $m_no9;?></p>
                </div>
            </div>
        </div>



    </div>


    <footer>
        <div class="footer-content">
            <h3>Vellore Institute of Technology</h3>
            <p>VIT implements the Fully Flexible Credit System (FFCS) which gives the students flexibility to make their
                own time tables by choosing the subjects and the faculties under whose guidance they want to study.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">Vellore Institute of Technology</a> </p>
            <div class="footer-menu">
                <ul class="f-menu">
                <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">Aboutus </a></li>
                    <li><a href="services.php">OurServices</a></li>
                    <li><a href="team.php">OurTeam </a></li>
                    <li><a href="gallery.php">Gallery </a></li>
                    <li><a href="contact_us.php">Contactus</a></li>
                </ul>

            </div>
        </div>

    </footer>

</body>

</html>