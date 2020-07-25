<?php
include('connection.php');
if (isset($_GET['loggedOut'])) {
    session_destroy();
}
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
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">

    <!-- Required for AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="_animation.css">

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

    <header class="container-fluid" style="position: absolute;">
        <div class="row">
            <div class="mobileImage col-md-9 col-lg-9 col-xl-9">
            </div>
            <div data-aos="fade-in" data-aos-delay="300" class="name col-12 col-sm-12 col-md-3 col-lg-3 ">
                <h1 id="hidevHeading">Hidev</h1>
                <p id="mobSolution">Mobile Solution</p>
            </div>
        </div>
    </header>

    <section class="container-fluid adminLogin">
        <h1 data-aos="fade-in" data-aos-delay="500" id="blogHeading">Admin Login</h1>
        <div class="row">
            <div data-aos="fade-in" data-aos-delay="700" class="col-2 col-md-3 col-sm-3 col-lg-4 col-xl-4">
                <img id="mob2" src="images/svg/smartphone.svg" alt="">
            </div>
            <form method="POST" class="animated animatedFadeInUp fadeInUp loginForm col-8 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <img id="appImg" src="images/svg/appdev.svg" alt="">
                <p id="info">Let's Make Beautiful Apps together!</p>
                <div>
                    <input class="form-control" type="email" name="admin_email" id="admin_Email" placeholder="Email Address" required>
                </div>
                <input class="form-control" type="password" name="admin_pass" id="admin_Pass" placeholder="Password" required>

                <?php
                if (isset($_SESSION["admin"])) : ?>
                    <p style="color: red;"> <?php
                                            if ($_SESSION["admin"] == "Invalid email or password") {
                                                echo $_SESSION["admin"];
                                                unset($_SESSION["admin"]);
                                            }
                                            ?> </p>
                <?php endif ?>

                <button name="login" type="submit" id="loginBtn" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>

    <div class="blueWaveImage">
        <img src="images/svg/blueWave.svg" width="100%">
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>