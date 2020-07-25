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
    <link rel="stylesheet" href="message.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/siteIcon/hidevIcon.png" type="image/icon type">

    <!-- Media Query Files -->
    <link rel="stylesheet" href="indexMQ/576px_XS.css">
    <link rel="stylesheet" href="indexMQ/768px_992px_M.css">
    <link rel="stylesheet" href="indexMQ/992px_1200px_L.css">
    <link rel="stylesheet" href="indexMQ/1200px_XL.css">

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
            </ul>
        </div>
    </nav>

    <!-- Messages List -->
    <div class="container-fluid">
        <div class="messageHeading">
            <!-- Heading 'New Messages' -->
            <h1 id="blogHeading">New Messages</h1>
        </div>

        <?php
        if (isset($_SESSION['msgDeleted'])) : ?>
            <div class="container-fluid delNot">
                <div class="row">
                    <div class="col-1 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
                    <div class="col-10 col-sm-6 col-md-6 col-lg-4 col-xl-4 msgDeleted">
                        <p style="margin-top: 3%; font-weight: bold;"> <?php
                                                                        echo $_SESSION['msgDeleted'];
                                                                        unset($_SESSION['msgDeleted']);
                                                                        ?></p>
                    </div>
                </div>
            </div>
        <?php endif ?>

        <div class="row">
            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="messagesList col-12 col-sm-11 col-md-11 col-lg-10 col-xl-10">
                <!-- Message -->
                <?php
                while ($row = mysqli_fetch_array($newMsgs)) { ?>
                    <div class="message col-11 col-sm-11 col-md-11 col-lg-10 col-xl-10">
                        <div class="delBtn">
                            <a type="button" href="connection.php?delMsg=<?php echo $row['msg_id']; ?>" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- User name -->
                        <div class="row nameRow">
                            <div class="name">
                                <p id="att">Name: </p>
                            </div>
                            <div class="userName userAtt">
                                <p id="userName"> <?php echo $row['sender_name']; ?></p>
                            </div>

                        </div>
                        <!-- User Email -->
                        <div class="row">
                            <div class="emailAddress">
                                <p id="att">Email Address:</p>
                            </div>
                            <div class="useremailAddress userAtt">
                                <p id="useremailAddress"><?php echo $row['sender_email']; ?></p>
                            </div>
                        </div>
                        <!-- Message Text -->
                        <div class="row">
                            <div class="messageText">
                                <p id="att">Message: </p>
                            </div>
                            <div class="userMessage userAtt">
                                <p id="userMessage"><?php echo $row['msg']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>
    </div>
    </div>

    <!-- Other Scripts for scroll to top -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>