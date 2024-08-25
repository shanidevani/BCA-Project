<?php
            include "application/config/config.php";


            if(isset($_POST['submit']))
            {
              $name = $_POST['fullname'];
              $email = $_POST['email'];
              $p_no = $_POST['pnumber'];
              $subject = $_POST['subject'];

              if($name != "" && $email != "" && $p_no != "" && $subject != "")
              {
                $qry = "INSERT INTO `contact` (`name`, `email`, `mobile_no`, `subject`) VALUE ('$name','$email','$p_no','$subject')";
                $data = mysqli_query($con, $qry);

                if($data)
                {
                  echo '<script>alert("data inserted into database.")</script>';
                }
                else
                {
                  echo '<script>alert("data not inserted into database.")</script>';
                }
              }
            }
            header("Location: contact_us.php");
            exit();
        ?>