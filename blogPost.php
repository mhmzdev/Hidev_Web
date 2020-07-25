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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="blogPost.css">
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">

    <!-- Required for AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Media Query Files -->
    <link rel="stylesheet" href="blogPostMQ/992px_Onwards.css">

    <!-- For Footer Styling -->
    <link rel="stylesheet" href="indexMQ/576px_XS.css">
    <link rel="stylesheet" href="indexMQ/992px_1200px_L.css">
    <link rel="stylesheet" href="indexMQ/1200px_XL.css">

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
                            <a id="logOutLink" class="dropdown-item" href="admin.php">Logout</a>
                        </div>
                    </li>
                <?php     } ?>
            </ul>
        </div>
    </nav>

    <!-- Blog Post Body -->
    <?php if (!empty($_GET['readMore_blogid'])) { ?>
        <header class="container-fluid blogTitle">

            <h1 id="blogHeading"> <?php echo $blogDetails['blog_title']; ?>
            </h1>
            <p>by Muhammad Hamza | <?php echo $blogDetails['blog_date'] ?> | <?php echo $blogDetails['blog_category'] ?>

            </p>
            <a id="blogMedium" href="<?php echo $blogDetails['medium_link'] ?>">Medium <i class="fa fa-medium" aria-hidden="true"></i> </a>
        </header>
    <?php  } ?>



    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-2"></div>
            <?php if (!empty($_GET['readMore_blogid'])) { ?>
                <div class="blogText col-10 col-sm-10 col-md-10 col-lg-10 col-xl-8">
                    <div class="image col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <img id="postImg" src="<?php echo $blogDetails['header_img'] ?>">
                    </div>

                    <div class="text">
                        <p><?php echo $blogDetails['blog_text']; ?></p>
                    </div>
                </div>
            <?php  } ?>
        </div>

        <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-2"></div>
            <div class="authorInfo col-10 col-sm-10 col-md-10 col-lg-10 col-xl-8">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-5"></div>
                    <div class="authorImg col-4 col-sm-4 col-md-3 col-lg-2">
                        <img id="authorImg" src="images/about/myPic.png">
                    </div>

                </div>
                <div class="authorAbout col-12 col-sm-12 col-md-12">
                    <p>Founder to Hidev and Flutter
                        Islamabad,
                        Pakistan. Self-taught flutter developer. Writing
                        technical blogs on Medium and open source contributor on GitHub. Loves to help and share
                        knowledge regarding technology like Flutter, Dart, Firebase, HTML, CSS, Bootstrap etc.
                        Enjoy and Happy Fluttering :)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 'Happy Fluttering' Text -->
    <div class="cheers" data-aos="fade-in" data-aos-delay="100">
        <h1 id="blogHeading">
            Happy Fluttering :)
        </h1>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>