<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/contact us.css">
  <link rel="stylesheet" href="assets/css/hader.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/team.css">
  <link rel="stylesheet" href="assets/css/gallery.css">
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
            <li><a href="team.php">OUR TEAM</a></li>
            <li><a href="gallery.php">GALLERY</a></li>
            <li><a class="active" href="contact_us.php">CONTACT US</a></li>
    </ul>
    <!-- <div class="login">
    <button class="button button1">Login</button>
</div> -->
  </nav>






  <div class="textgallery">
    <div class="G">C</div>
    <div class="llery">ONCACT&nbsp;</div>
    <div class="G">U</div>
    <div class="llery">S</div>
</div>





<div class="logogallery">
    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
</div>




</div>
      <p></p>
    </div>
    <div class="row">
      <div class="column">
        <img src="assets/img/contact us/vit.jpg" style="width:100%">
      </div>
      <div class="column">
        <form action="insert_contact.php" method="post">
          <label for="fname">Full Name</label>
          <input type="text" id="fname" name="fullname" placeholder="Your full name..">
          <label for="lname">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email..">
          <label for="country">Phone Number</label>
          <input type="text" id="pnumber" name="pnumber" placeholder="Your Phone Number..">
          <label for="subject">Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
          <input type="submit" name="submit" id="submit" value="Submit">
          <input type="submit" value="Login">
        </form>
        
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