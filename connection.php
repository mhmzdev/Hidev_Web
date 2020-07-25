<?php

// CRUD Operations for BLOG Posts below

session_start();

// initializing variables
$blog_id = 0;
$blogTitle = "";
$blogCategory = "";
$mediumLink = "#";
$blogDate = "";
$blogText = "";

// connecting to database
$db = mysqli_connect('localhost', 'root', '', 'hidevdb');

// If publish button in New Story is clicked
if (isset($_POST['publish'])) {
    $blogTitle = $_POST['blog_title'];
    $blogCategory = $_POST['blog_category'];
    $mediumLink = $_POST['medium_link'];
    $blogDate = $_POST['blog_date'];
    $blogText = $_POST['blog_text'];

    // For Uploading Image
    $image = "_blogImages/" . $_POST['blog_img'];

    // Query for inserting the data into DB
    $query = "INSERT INTO blog (blog_title, blog_date, blog_category, blog_text, medium_link, header_img) VALUES ('$blogTitle', '$blogDate', '$blogCategory', '$blogText', '$mediumLink', '$image')";
    mysqli_query($db, $query);

    $_SESSION['msg'] = "New Blog Posted!";

    header('location: index.php'); // redirecting to home page after posting a blog
}

// For blog details
if (isset($_GET['readMore_blogid'])) {
    $id = $_GET['readMore_blogid'];
    $result = mysqli_query($db, "SELECT * FROM blog WHERE blog_id=$id LIMIT 1");

    $blogDetails = mysqli_fetch_array($result);
}

// For deleting
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM blog WHERE blog_id=$id");

    $_SESSION['msg'] = "Blog Deleted..!";
    header('location: index.php');
}

// getting data from database
$blogPosts = mysqli_query($db, "SELECT * FROM blog");









// Code for uploading messages and deleting them below
$msgId = 0;
$senderName = "";
$senderEmail = "";
$msgText = "";

if (isset($_POST['sendMsgBtn'])) {
    $senderName = $_POST['fname'];
    $senderEmail = $_POST['femail'];
    $msgText = $_POST['fmessage'];

    // Query for inserting msg into DB
    $queryMsg = "INSERT INTO messages (sender_name, sender_email, msg) VALUES ('$senderName', '$senderEmail', '$msgText')";
    mysqli_query($db, $queryMsg);

    $_SESSION['msgSentSession'] = "Message Sent Successfully...!";

    header('location: contact.php');
}

// Getting all messages from DB
$newMsgs = mysqli_query($db, "SELECT * FROM messages");

// For deleting
if (isset($_GET['delMsg'])) {
    $id = $_GET['delMsg'];
    mysqli_query($db, "DELETE FROM messages WHERE msg_id=$id");

    $_SESSION['msgDeleted'] = "Message has been Deleted..!";

    header('location: message.php');
}








// For Admin Login
if (isset($_POST['login'])) {
    $adminEmail = $_POST['admin_email'];
    $adminPass = $_POST['admin_pass'];

    $adminResult = mysqli_query($db, "SELECT * FROM adminlogin WHERE admin_email = '$adminEmail' and admin_pass = '$adminPass' LIMIT 1");

    $rowAdmin = mysqli_fetch_array($adminResult);
    if ($rowAdmin['admin_email'] == $adminEmail && $rowAdmin['admin_pass'] == $adminPass) {
        $_SESSION['admin'] = 'admin';
        header("location: index.php");
    } else {
        $_SESSION['admin'] = 'Invalid email or password';
    }
}

if (isset($_GET['loggedOut'])) {
    $logMsg = $_GET['loggedOut'];
    $_SESSION['admin'] = $logMsg;
}
