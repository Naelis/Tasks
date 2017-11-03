<?php
// define variables and set to empty values
$data = "";
$fnameErr = $lnameErr = $emailErr = $postcodeErr = $phoneErr = $passwordErr = "";
$fname = $lname = $email = $phone = $address = $postcode = $password = "";

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
    <form novalidate>
        First name: <input type="text" name="fname" placeholder="Required" required><br><br>
        Last name: <input type="text" name="lname" placeholder="Required" required><br><br>
        Email: <input type="email" name="email" placeholder="Required" required><br><br>
        Phone number: <input type="tel" name="phone"><br><br>
        Address: <input type="text" name="address"><br><br>
        Postcode: <input type="number" name="postcode"><br><br>
        Password <input type="password" name="password" placeholder="Required" required><br><br>

        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
    </form>
    </body>

<?php
/*function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}*/

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    /*    $fname = test_input($_GET["fname"]);
        $lname = test_input($_GET["lname"]);
        $email = test_input($_GET["email"]);
        $phone = test_input($_GET["phone"]);
        $address = test_input($_GET["address"]);
        $postcode = test_input($_GET["postcode"]);
        $password = test_input($_GET["password"]);*/

    $postcodePattern = "/[0-9]{5}/";
    $phonePattern = "/[\+]\d{12}/";
    $emailPattern = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/";


    if (!empty($_GET['fname'])) {
        echo "<p>You gave first name: " . $_GET['fname'] . ".</p>";
        $_SESSION['fnameGiven'] = $_GET['fname'];

    }

    if (!empty($_GET['lname'])) {
        echo "<p>You gave last name: " . $_GET['lname'];
        $_SESSION['lnameGiven'] = $_GET['lname'];
    }

    if (!empty($_GET['email'])) {

        if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<p>You gave email: " . $_GET['email'];
            $_SESSION['emailGiven'] = $_GET['email'];
        } else {
            echo "<p>Please provide a valid email address. (For example youremail@domain.com)</p>";
        }
    }

    if (!empty($_GET['phone'])) {

        if(preg_match($phonePattern, $_GET['phone'])){
        echo "<p>You gave phone number: " . $_GET['phone'] . ".</p>";
        $_SESSION['phoneGiven'] = $_GET['phone'];

        } else {
            echo "<p>Please provide a valid format phone number. (For example +356501234567)</p>";
        }
    }

    if (!empty($_GET['address'])) {
        echo "<p>You gave address: " . $_GET['address'] . ".</p>";
        $_SESSION['addressGiven'] = $_GET['address'];
    }

    if (!empty($_GET['postcode'])) {

        if (preg_match($postcodePattern, $postcode)) {
            echo "<p>You gave postcode: " . $_GET['postcode'] . ".</p>";
            $_SESSION['postcodeGiven'] = $_GET['postcode'];
        } else {
            echo "<p>Your postcode is invalid.</p>";
        }
    }

    if (!empty($_GET['password'])) {
        $_SESSION['passwordGiven'] = $_GET['password'];
    } else {
        echo "<p>Please fill in all required fields.</p>";
    }

    if (!empty($_GET['submit'])) {
        if (isset($_SESSION['fnameGiven']) && isset($_SESSION['lnameGiven']) && isset($_SESSION['emailGiven']) && isset($_SESSION['passwordGiven'])) {

            echo "<p> Kiitos! </p>";

            session_unset();
            session_destroy();

        } else {

            if(!isset($_SESSION['fnameGiven'])){
                echo "<p>First name is required.</p>";
            }

            if(!isset($_SESSION['lnameGiven'])){
                echo "<p>Last name is required.</p>";
            }

            if(!isset($_SESSION['emailGiven'])){
                echo "<p>Email is required.</p>";
            }

            if(!isset($_SESSION['passwordGiven'])){
                echo "<p>Password is required.</p>";
            }

            session_unset();
        }
    }

}
?>