<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css2/eventstyle.css">
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
                    <li><a class="link_name" href="#">Assigment</a></li>

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
                    <li><a class="link_name" href="#">Homework</a></li>


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
                    <li><a href="#">Report Card</a></li>

                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-bookmark-alt'></i>
                        <span class="link_name">Attendance</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Attendance</a></li>

                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-conversation'></i>
                        <span class="link_name">Event</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Event</a></li>

                </ul>
            </li>

            <li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <a href="profile.html"> <img src="img/MaleStudent.png" alt="profileImg"></a>
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Dhruvin </div>
                        <div class="job">Gamer</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Dhruvin </span>
        </div>

        <!-- partial:index.partial.html -->
        <div id="calendar"></div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
        <!-- partial -->
        <script src="js/eventscript.js"></script>


    </section>
    <script src="js/script.js"></script>





</body>

</html>