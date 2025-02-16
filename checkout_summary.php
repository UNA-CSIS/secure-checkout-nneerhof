<?php
session_start();

$_SESSION['puppySum'] = $_POST['puppy'];
$_SESSION['kittySum'] = $_POST['kitty'];
$_SESSION['turtleSum'] = $_POST['turtle'];
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
        <h2>Checkout Summary<br><hr></h2>

        <?php
        $puppyCost = 450.56;
        $kittyCost = 381.94;
        $turtleCost = 178.19;
        $_SESSION["orderSubtotal"] = ($_SESSION['puppySum'] * $puppyCost) + ($_SESSION['kittySum'] * $kittyCost) + ($_SESSION['turtleSum'] * $turtleCost);

        echo "Your current balance is: $" . $_SESSION["orderSubtotal"];
        ?>
        <form method="post" action="tax_rate.php">
            <p>
                <input type="submit" name="continue" value="Confirm">
            </p>
    </body>
</html>