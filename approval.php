<?php
session_start();

include 'all_functions.php';

$usr = $_POST["username"];
$pwd = $_POST["pwd"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = testInput($usr);
    $password = testInput($pwd);
}
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($password === $username && ($password !== "" || $username !== "")) {
            $_SESSION['authenticated'] = true;
            echo "Hello " . $username . ". You can now complete your purchase by clicking the button below.";
            ?>
            <form method="post" action="checkout.php">
                <p>
                    <input type="submit" name="continue" value="Proceed to Checkout">
                </p>
            </form>
            <?php
        } else {
            echo "The credentials you entered appear to be incorrect. Please click the button below to return to the sign in page.";
            ?>
            <form method="post" action="authentication.php">
                <p>
                    <input type="submit" name="back" value="Back to Sign In">
                </p>
            </form>
            <?php
        }
        ?>
    </body>
</html>