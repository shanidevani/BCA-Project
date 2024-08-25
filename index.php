<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/hader.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
    <link rel="stylesheet" href="assets/css/welcome.css">
    <link rel="stylesheet" href="assets/css/map.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="logo"><a href="index.php">
            <img src="assets/img/logo/vellore.png">
        </a>
    </div>
    <nav>
        <ul>
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="about_us.php">ABOUT US</a></li>
            <li><a href="services.php">OUR SERVICES</a></li>
            <li><a href="team.php">OUR TEAM</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a href="contact_us.php">CONTACT US</a></li>
        </ul>
        <!-- <div class="login">
            <button class="button button1">Login</button>
        </div> -->
    </nav>
    <div class="slideshow-container">
    <?php
            include 'application/config/config.php';

            $qry = "SELECT * FROM `slider`";

            $data = mysqli_query($con, $qry);
            $total = mysqli_num_rows($data);

            if($total)
            {while ($result = mysqli_fetch_assoc($data)) 
                
                {$folder = "assets/img/home slider/".$result['photo'];
                    echo "
        <div class='mySlides fade'>
            <div class='numbertext'>1 / 3</div>
            <img src='".$folder."' style='width:100%'>
            <div class='text'></div>
        </div>";
    }
}
else
{
    echo '<script>alert("no data found.")</script>';
}
?>

        <!-- <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="assets/img/home slider/campus-banner.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="assets/img/home slider/campus-banner.jpg" style="width:100%">
            <div class="text"></div>
        </div> -->
    </div>




    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>



    <!-- home page  -->
    <div class="weltext">
        <div class="w">W<div class="come">elcome</div>
            <!-- <div class="come">elcome</div> -->

        </div>
    </div>
    <div class="welcome">

        <hr color="red">

        <br>

        <!-- home page ma je welcome che tena text mate -->
        <div class="aboutwel">
            <h2>Vellore Institute of Technology</h2><br>
            <hr color="yellow"><br>
            Makanbhai Parmar was born in Karanj, Village of Mandvi Taluka. He was kind hearted and believed in
            simplicity. He strictly followed the thoughts of Mahatma Gandhi. He used to wear dhoti, kurta and
            white
            cap on head. He was always ready to help needy people. He was humble and courteous. He believed
            that,
            education is the only foundation of development, then and then the development of village and
            village
            life would go on the right path..
            <br> <br> <br> <br> <br> <br> <br> <br>


        </div>
        <!-- home page ma je welcome che tena image  mate -->
        <div class="aboutimg">
            <img src="assets/img/Vellore-Institute-of-Technology.jpg" alt="Girl in a jacket" width="400" height="400">
        </div>

    </div>
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.529227144704!2d72.87359431396956!3d21.21085258691501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f7350edb74f%3A0xfd1246e6a5910fb7!2sKargil%20Chowk%2C%20Near%20Kargil%20Chowk%2C%20Punagam%2C%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1643601989174!5m2!1sen!2sin"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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


    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>


</body>

</html>