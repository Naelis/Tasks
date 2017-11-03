<?php
/**
 * Created by PhpStorm.
 * User: anukak
 * Date: 30.10.2017
 * Time: 13.52
 */
//SSLon();
session_start();
?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <?php include("lomakeGET.php");?>

    <?php

    //FIRST NAME
    if(!empty($_GET['fname']) && !empty($_Get['fname'])){

        $_SESSION['fnameGiven'] = $_GET['fname'];
    } else {

        echo "<p> Please provide a first name. </p>";
    }

    if(!empty($_GET['lname'])){

        $_SESSION['lnameGiven'] = $_GET['lname'];
    } else {
        echo "<p> Please provide a last name. </p>";
    }

    //EMAIL
    if(!empty($_GET['email'])){
        $_SESSION['emailGiven'] = $_GET['email'];
    } else {
        echo "<p>Please provide a valid email.</p>";
    }

    //PHONE VALIDATION
    if (!empty($_GET['phone']) && preg_match('/[\+]\d{12}/', $_GET['phone'])) {
        $_SESSION['phoneGiven'] = $_GET['phone'];

    } elseif(!empty $_GET['phone'] && !preg_match('/[\+]\d{12}/', $_GET['phone'])){
        echo "<p> Please provide the correct form of phone number.";
    }

    ?>

    <?php

    echo $_SESSION['fnameGiven'];
    echo $_SESSION['lnameGiven'];
    echo $_SESSION['emailGiven'];
    echo $_SESSION['phoneGiven';
    echo $_SESSION['addressGiven'];
    echo $_SESSION['postcodeGiven'];
    echo $_SESSION['passwordGiven'];
    ?>

    </body>
    <script src="js/main.js"></script>




</html>

