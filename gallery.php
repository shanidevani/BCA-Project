<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/hader.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
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
            <li><a href="team.php">OUR TEAM</a></li>
            <li><a class="active" href="gallery.php">GALLERY</a></li>
            <li><a href="contact_us.php">CONTACT US</a></li>
        </ul>
        <!-- <div class="login">
            <button class="button button1">Login</button>
        </div> -->
    </nav><br>
    <div class="gallery">

        <div class="textgallery">
            <div class="G">G</div>
            <div class="llery">ALLERY</div>
        </div>





        <div class="logogallery">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        </div>
    </div>
    <?php
    include "application/config/config.php";
        $qry1 = "SELECT * FROM `gallery`";
        $data1 = mysqli_query($con, $qry1);

        $total1 = mysqli_num_rows($data1);
        if($total1)
        {
            while ($result1 = mysqli_fetch_assoc($data1))
            {
                $file = "assets/img/gallery/";
                $file1 = $file.$result1['file1'];
                $file2 = $file.$result1['file2'];
                $file3 = $file.$result1['file3'];
                $file4 = $file.$result1['file4'];
                $file5 = $file.$result1['file5'];
                $file6 = $file.$result1['file6'];
                $file7 = $file.$result1['file7'];
                $file8 = $file.$result1['file8'];
                $file9 = $file.$result1['file9'];
            }
        }
    ?>
    <div class="center">


        <div class="dhruvin">
            <img src="<?php echo $file1; ?>" alt="image loding" class="one">
        </div>

        <div class="dhruvin">

            <img src="<?php echo $file2; ?>" alt="image loding" class="one">

        </div>
        <div class="dhruvin">

            <img src="<?php echo $file3; ?>" alt="image loding" class="one">

        </div>
        <!-- <div class="dhruvin">

            <img src="assets/img/gallery/g4.jpg" alt="image loding" class="one">

        </div> -->
        <!-- <div class="dhruvin">

            <img src="g5.jpg" alt="image loding" class="one">

        </div> -->

    </div>

    <div class="center">


        <div class="dhruvin">
            <img src="<?php echo $file4; ?>" alt="image loding" class="one">
        </div>

        <div class="dhruvin">

            <img src="<?php echo $file5; ?>" alt="image loding" class="one">

        </div>
        <div class="dhruvin">

            <img src="<?php echo $file6; ?>" alt="image loding" class="one">

        </div>
        <!-- <div class="dhruvin">

            <img src="assets/img/gallery/g4.jpg" alt="image loding" class="one">

        </div> -->
        <!-- <div class="dhruvin">

            <img src="g5.jpg" alt="image loding" class="one">

        </div> -->

    </div>
    <div class="center">


        <div class="dhruvin">
            <img src="<?php echo $file7; ?>" alt="image loding" class="one">
        </div>

        <div class="dhruvin">

            <img src="<?php echo $file8; ?>" alt="image loding" class="one">

        </div>
        <div class="dhruvin">

            <img src="<?php echo $file9; ?>" alt="image loding" class="one">

        </div>
        <!-- <div class="dhruvin">

            <img src="assets/img/gallery/g4.jpg" alt="image loding" class="one">

        </div> -->
        <!-- <div class="dhruvin">
 
             <img src="g5.jpg" alt="image loding" class="one">
 
         </div> -->

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