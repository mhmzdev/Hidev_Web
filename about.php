<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <!-- For Mobile responsive -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Make Beautiful Apps - Hidev</title>
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="contact.css">

    <!-- Required for AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Media Query Files -->
    <link rel="stylesheet" href="aboutMQ/576px_XS.css">
    <link rel="stylesheet" href="aboutMQ/768px_992px_M.css">
    <link rel="stylesheet" href="aboutMQ/992px_1200px_L.css">
    <link rel="stylesheet" href="aboutMQ/1200px_XL.css">

    <!-- For Footer Styling -->
    <link rel="stylesheet" href="indexMQ/576px_XS.css">
    <link rel="stylesheet" href="indexMQ/992px_1200px_L.css">
    <link rel="stylesheet" href="indexMQ/1200px_XL.css">

    <!-- For Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Other scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>


    <!-- For Scroll on Top Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- For 'fa' font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar Code -->
    <nav id="navBar" class="navbar navbar-expand-sm navbar-light myNavBar">
        <!-- Brand Name -->
        <a href="index.php" class="navbar-brand">Hidev</a>
        <!-- Collapse Button -->
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Nav Buttons on left side -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <!-- Portfolio Dropdown -->
                <li class="nav-item">
                    <a href="#" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>

                    <div aria-labelledby="dropdownMenuLink" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a id="nameLink" class="dropdown-item" href="https://github.com/m-hamzashakeel">Hamza</a>
                        <a id="nameLink" class="dropdown-item" href="https://talhafarooq.artstation.com/">Talha</a>
                    </div>
                </li>
                <!-- Admin dropdown -->
                <?php if (isset($_SESSION['admin']) == 'admin') { ?>
                    <li class="nav-item">
                        <a href="#" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>

                        <div aria-labelledby="dropdownMenuLink" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a id="nameLink" class="dropdown-item" href="message.php">Messages</a>
                            <div style="border-top: 1px white solid; margin-top: 5%;"></div>
                            <a id="nameLink" class="dropdown-item" href="newStory.php">New Story</a>
                            <div style="border-top: 1px white solid; margin-bottom: 5%;"></div>
                            <a id="logOutLink" class="dropdown-item" href="admin.php?loggedOut=0">Logout</a>
                        </div>
                    </li>
                <?php     } ?>
            </ul>
        </div>
    </nav>

    <!-- Header Mobile Images -->
    <div class="container-fluid" style="position: absolute;">
        <div class="row">
            <div class="mobileImage col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" style="margin-top: 8%;">
                <img src="images/svg/fourMobile.svg" width="100%">
            </div>
            <div class="solutionImage col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <img src="images/svg/mobileSolutoin.svg" width="100%">
            </div>
        </div>
    </div>

    <!-- Blue Wave Image on Top -->
    <div class="blueWaveImage">
        <img src="images/svg/blueWave.svg" width="100%">
    </div>

    <!-- Aboute Me & Stats Body-->
    <section class="container-fluid">
        <div class="row">
            <aside class="col-1 col-sm-1 col-md-1 col-lg-1"></aside>
            <!-- About Me Section -->
            <div class="aboutMeContainer col-10 col-sm-10 col-md-11 col-lg-10">
                <!-- 'About Me' Heading -->
                <h1 id="blogHeading">About Me</h1>
                <!-- About Me Information -->
                <div class="container-fluid aboutMe">
                    <div class="row">
                        <div class="col-4 col-lg-1 col-xl-1"></div>
                        <!-- My Picture -->
                        <div class="myPicture col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                            <img id="pic" src="images/about/myPic.png">
                        </div>
                        <!-- My Information -->
                        <div class="aboutMeDiv col-12 col-sm-12 col-md-11 col-lg-8 col-xl-8">
                            <p id="aboutMeText">Founder to Hidev and Flutter
                                Islamabad,
                                Pakistan. Self-taught flutter developer. Writing
                                technical blogs on Medium and open source contributor on GitHub. Loves to help and share
                                knowledge regarding technology like Flutter, Dart, Firebase, HTML, CSS, Bootstrap etc.
                                <br><br> Enjoy and Happy Fluttering :)</p>
                            <div class="row medInGit">
                                <div class="medium col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1">
                                    <a href="#"><i id="iconBout" class="fa fa-medium" aria-hidden="true"></i></a>
                                </div>
                                <div class="linkedIn col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1">
                                    <a href="#"><i id="iconBout" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                </div>
                                <div class="linkedIn col-3 col-sm-2 col-md-2 col-lg-2 col-xl-1">
                                    <a href="#"><i id="iconBout" class="fa fa-github" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services -->
                <div class="container-fluid services" style="text-align: center;">
                    <p style="color: gray;">My Services :)</p> <br>
                    <div class="row">
                        <div class="flutterS other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="250">
                            <img id="ppImg" src="images/services/flutter.svg">
                            <p id="serviceName">Flutter</p>
                        </div>
                        <div class="dartS other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="200">
                            <img id="ppImg" src="images/services/dart.svg">
                            <p id="serviceName">Dart</p>
                        </div>
                        <div class="firebaseS other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="150">
                            <img id="ppImg" src="images/services/firebase.svg">
                            <p id="serviceName">Firebase</p>
                        </div>
                        <div class="html other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="100">
                            <i id="devicons" class="devicon-html5-plain colored"></i>
                            <p>HTML5</p>
                        </div>
                        <div class="css other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="100">
                            <i id="devicons" class="devicon-css3-plain colored"></i>
                            <p>CSS</p>
                        </div>
                        <div class="bootstrap other service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="150">
                            <i id="devicons" class="devicon-bootstrap-plain colored"></i>
                            <p>Bootstrap</p>
                        </div>
                        <div class="pp service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="200">
                            <img id="ppXD" src="images/services/pp.svg">
                            <p id="serviceName">Premier Pro</p>
                        </div>
                        <div class="xd service col-4 col-sm-4 col-md-4 col-lg-3 col-xl-1" data-aos="fade-in" data-aos-delay="250">
                            <img id="ppXD" src="images/services/xd.svg">
                            <p id="serviceName">Adobe XD</p>
                        </div>
                    </div>
                </div>

                <!-- Flutter Logo -->
                <div class="animated animatedFadeInUp fadeInUp flutterBackImage">
                    <img id="flutterLogo" src="images/services/flutter.svg">
                </div>
                <!-- Experience/Work/Projects etc -->
                <div class="container statsContainer">
                    <div class="row">
                        <div class="statsType col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <h3 class="value" id="statsCounter">8</h3>
                            <p id="statsDescription">Open Source Project</p>
                        </div>
                        <div class="statsType col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <h3 class="value" id="statsCounter">9</h3>
                            <p id="statsDescription">Technical Post</p>
                        </div>
                        <div class="statsType col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <h3 class="value" id="statsCounter">1</h3>
                            <p id="statsDescription">Real World App</p>
                        </div>
                        <div class="statsType col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <span id="exp">Months</span>
                            <h3 class="value" id="statsCounter">8</h3>
                            <p id="statsDescription">Flutter Experience</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blue Wave Image at middle -->
    <div class="myOfferingBack">
        <img id="offerBlueBack" src="images/about/aboutBack.png">
    </div>

    <!-- Offerings Body -->
    <div class="container-fluid myOfferings">
        <!-- My offerings & Tagline text -->
        <div class="offeringsText col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="text-align: center;">
            <h3 id="MyOfferings">My Offerings</h3>
            <p id="description">I am not a professional flutter developer but I can be of some help to you.</p>
        </div>

        <!-- Offerings -->
        <div class="container-fluid offerings">
            <div class="row">
                <!-- UI/UX -->
                <div class="offeringContainer uiux col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div style="text-align: center;" data-aos="fade-in" data-aos-delay="120"><img src="images/offerings/ui.svg" width="15%"></div><br>
                    <p id="offeringType">UI/UX Designing</p>
                    <p id="offeringDesc">Although I mainly a flutter developer but I do care about the UI/UX for my
                        client. Hence, I also
                        do UI designing for applications.
                        So, feel free to ask me for getting you UI/UX for your apps</p>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1"></div>
                <!-- App Development -->
                <div class="offeringContainer appDevelopment col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <div style="text-align: center;" data-aos="fade-in" data-aos-delay="120"><img src="images/offerings/app.svg" width="15%"></div><br>
                    <p id="offeringType">Full App Development</p>
                    <p id="offeringDesc">For now, I can only develop Android Apps using Flutter, that's because I don't
                        own a MacBook right now so can't test or debug apps for iOS.
                        Hopefully this missing piece will be filled in future :)</p>
                </div>
                <div class="col-lg-3"></div>
                <!-- Portotype -->
                <div class="offeringContainer prototype col-12 col-sm-12 col-md-11 col-lg-6 col-xl-6">
                    <div style="text-align: center;" data-aos="fade-in" data-aos-delay="120"><img src="images/offerings/prototype.svg" width="15%"></div>
                    <p id="offeringType">Rapid Prototyping</p>
                    <p id="offeringDesc">Having a startup idea? Or maybe just want a prototype for your clients? With
                        Flutter I can get you basic version of your app in no time and you are good to go for your
                        project in future.</p>
                </div>
            </div>
        </div>

        <!-- Social Links for Connection -->
        <div class="container socialLinks">
            <div style="margin-top: 2%; text-align: center;">
                <h5>Wanna Connect?</h5><br>
                <a id="mediaLinks" target="_blank" href="https://facebook.com/hamza.maddog" data-aos="fade-in" data-aos-delay="80">
                    <i id="mediaIcon" class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>
                <a id="mediaLinks" target="_blank" href="https://instagram.com/m_hamzashakeel" data-aos="fade-in" data-aos-delay="100">
                    <i id="mediaIcon" class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a id="mediaLinks" target="_blank" href="https://linkedin.com/in/m-hamzashakeel" data-aos="fade-in" data-aos-delay="150">
                    <i id="mediaIcon" class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
                <a id="mediaLinks" target="_blank" href="https://twitter.com/m_hamzashakeel" data-aos="fade-in" data-aos-delay="200">
                    <i id="mediaIcon" class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a id="mediaLinks" target="_blank" href="https://reddit.com/user/m_hamzashakeel" data-aos="fade-in" data-aos-delay="250">
                    <i id="mediaIcon" class="fa fa-reddit" aria-hidden="true"></i>
                </a>
                <a id="mediaLinks" target="_blank" href="https://github.com/m-hamzashakeel" data-aos="fade-in" data-aos-delay="300">
                    <i id="mediaIcon" class="fa fa-github" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid footerContainer">
        <div class="row">
            <!-- Flutter Islamabad Link -->
            <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 FlutterIslamabadPakistan">
                <a style="text-decoration: none;" target="_blank" href="https://facebook.com/FlutterIslamabadPakistan">
                    <img id="flutterICTImage" src="images/flutterIsl.png">
                </a>
            </div>
            <!-- Copyright Text -->
            <div class="copyrightDiv col-8 col-sm-5 col-md-5 col-lg-6" style="text-align: center;">
                <p id="copyright">&copy;Hidev | Muhammad Hamza | 2020</p>
            </div>
            <!-- Other Links on right -->
            <div class="headerLinks col-10 col-sm-4 col-md-4 col-lg-4">
                <a id="headLink" target="_blank" href="https://medium.com/@hamza.6.shakeel">
                    <i id="footerIcon" class="fa fa-medium" aria-hidden="true"></i>
                </a>
                <a id="headLink" target="_blank" href="https://www.linkedin.com/in/m-hamzashakeel/">

                    <i id="footerIcon" class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
                <a id="headLink" target="_blank" href="https://github.com/m-hamzashakeel">
                    <i id="footerIcon" class="fa fa-github" aria-hidden="true"></i>
                </a>
            </div>
            <!-- Scroll on Top Button -->
            <div id="up" class="up">
                <i class="fas fa-chevron-up"></i>
            </div>
        </div>
    </footer>

    <!-- Scripts for animations & Scroll on top to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>