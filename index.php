<?php include('connection.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <!-- For Mobile responsiveness -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Make Beautiful Apps - Hidev</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">

    <!-- Required for AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="_animation.css">

    <!-- Media Query Files -->
    <link rel="stylesheet" href="indexMQ/576px_XS.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="indexMQ/768px_992px_M.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="indexMQ/992px_1200px_L.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="indexMQ/1200px_XL.css?v=<?php echo time(); ?>">

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
</head>

<body>

    <!-- Nav Bar Code -->
    <nav id="navBar" class="navbar navbar-expand-sm navbar-light myNavBar">
        <!-- Brand Name -->
        <a href="index.php" class="navbar-brand">Hidev</a>
        <!-- Collapse Button for smaller screen size -->
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
                            <a id="logOutLink" class="dropdown-item" href="admin.php">Logout</a>
                        </div>
                    </li>
                <?php     } ?>

            </ul>
        </div>
    </nav>

    <!-- Header Mobile Images -->
    <header class="container-fluid" style="position: absolute;">
        <div class="row">
            <div class="animated animatedFadeInUp fadeInUp mobileImage col-10 col-sm-10 col-md-10 col-lg-10 " style="margin-top: 8%;">
                <img src="images/svg/fourMobile.svg" width="100%">
            </div>
            <div class="solutionImage col-2 col-sm-2 col-md-2 col-lg-2 ">
                <img src="images/svg/mobileSolutoin.svg" width="100%">
            </div>
        </div>
    </header>

    <!-- Blue Wave Image on Top -->
    <div class="blueWaveImage">
        <img src="images/svg/blueWave.svg" width="100%">
    </div>

    <!-- 'BLOG' Heading -->
    <div class="blogHeadingContainer">
        <h1 id="blogHeading">Blog</h1>
    </div>

    <!-- Notification for new Blog posts -->
    <?php
    if (isset($_SESSION['msg'])) : ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 col-sm-3 col-md-3 col-lg-4 col-xl-4"></div>
                <div class="col-10 col-sm-5 col-md-5 col-lg-4 col-xl-4 <?php if ($_SESSION['msg'] == "Blog Deleted..!") {
                                                                            echo "deletedmsg";
                                                                        } else {
                                                                            echo "msg";
                                                                        } ?>">
                    <p style="margin-top: 3%; font-weight: bold;"><?php
                                                                    echo $_SESSION['msg'];
                                                                    unset($_SESSION['msg']);
                                                                    ?></p>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- Blog Post -->
    <div class="blogs container-fluid">
        <?php
        while ($row =  mysqli_fetch_array($blogPosts)) { ?>
            <div class="row">
                <div class="col-1 col-lg-1 col-sm-1 col-md-1 col-xl-1"></div>
                <div class="post col-10 col-md-10 col-sm-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <!-- Blog Image -->
                        <div class="imgDiv col-12 col-sm-11 col-md-11 col-lg-12 col-xl-4">
                            <img id="postImg" src="<?php echo $row['header_img'];
                                                    ?>" width="100%" height="auto">
                        </div>
                        <!-- Blog Text -->
                        <div class="postDesc col-11 col-sm-11 col-md-11 col-lg-11 col-xl-7" style="margin-top: 50px; margin-left: 20px;">
                            <!-- Delete Button  -->
                            <?php if ($_SESSION['admin'] == 'admin') { ?>
                                <a data-aos="fade-in" href="connection.php?del=<?php echo $row['blog_id']; ?>" data-aos-delay="100" class="btn btn-danger" id="deleteBtn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <?php } ?>

                            <h3 id="postTopic" style="font-weight: 800;"><?php echo $row['blog_title']; ?></h3>
                            <p id="postedBy">by Muhammad Hamza | <span><?php echo $row['blog_date']; ?></span> | <span><?php echo $row['blog_category'] ?></span></p>
                            <p id="postText"><br> <?php echo substr($row['blog_text'], 0, 350) . '......'; ?> </p>
                            <!-- Read More Button -->
                            <a type="button" href="blogPost.php?readMore_blogid=<?php echo $row['blog_id']; ?>" class="btn btn-primary" id="readMoreBtn" data-aos="fade-in" data-aos-delay="100">
                                <span id="readMoreText" style="font-weight: 500;">Read More</span>
                            </a>
                            <br> <br>

                        </div>
                    </div>
                </div>
                <div class="col-1 col-lg-1"></div>
            </div>
            <br><br>
        <?php } ?>
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