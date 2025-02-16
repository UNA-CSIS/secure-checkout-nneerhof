<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
    header("Location: index.php");
    exit();
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
        <h2>Checkout<br><hr></h2>

        <?php
        echo "Total Cost: $" . round($_SESSION['finalTotal'], 2);
        ?>

        <form method="post" action="valid_info.php">
            <p>
                <label for="name">Cardholder Name: </label>
                <input type="text" name="name" id="name"><br>
            </p>
            <p>
                <label for="cardNumber">Payment Card Number: </label>
                <input type="text" name="cardNumber" id="cardNumber"><br>
            </p>
            <p>
                <label for="expDate">Expiration Date (mm/yy): </label>
                <input type="text" name="expDate" id="expDate"><br>
            </p>
            <p>
                <label for="secCode">Security Code: </label>
                <input type="text" name="secCode" id="secCode"><br>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit">
            </p>
    </body>
</html>