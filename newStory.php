<?php
include('connection.php');
?>

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
    <link rel="stylesheet" href="newStory.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">

    <!-- Media Query Files -->
    <link rel="stylesheet" href="indexMQ/576px_XS.css">
    <link rel="stylesheet" href="indexMQ/768px_992px_M.css">
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
            </ul>
        </div>
    </nav>

    <!-- Blog Text Field -->
    <form class="container-fluid" method="POST">
        <div class="row">
            <div class="col-sm-1 col-md-2 col-lg-3 col-xl-3"></div>
            <div class="titleField col-12 col-sm-11 col-md-10 col-lg-9 col-xl-9">
                <!-- Blog Header Image -->
                <input type="file" name="blog_img" id="blog_img">
                <!-- Title -->
                <input class="form-control title" type="text" id="blog_title" name="blog_title" placeholder="Title" required>
                <!-- Category -->
                <input class="form-control category" type="text" id="blog_category" name="blog_category" placeholder="Category: Flutter" required>
                <!-- Date -->
                <input class="form-control date" type="text" id="blog_date" name="blog_date" placeholder="Date: 1st July, 2010" required>
                <!-- Medim Link -->
                <input class="form-control mediumLink" type="url" id="medium_link" name="medium_link" placeholder="Link to Medium (if any)">
                <!-- Story -->
                <textarea class="form-control story" id="blog_text" name="blog_text" cols="10" rows="1" placeholder="Tell your story..." required></textarea>
                <div class="publishBtn">
                    <button type="submit" id="publishBtn" name="publish" class="btn btn-success">Publish</button>
                    <br><br>
                    <p style="color: grey;">*Publish Your Story :)</p>
                </div>
            </div>
        </div>
    </form>

    <!-- Other Script for Text Fields working -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>