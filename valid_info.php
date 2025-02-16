<?php
session_start();

include ('all_functions.php');

if (!isset($_SESSION['authenticated'])) {
    header("Location: index.php");
    exit();
}

$num = $_POST['cardNumber'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = testInput($num);
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
        echo validateCard($number, round($_SESSION['finalTotal'], 2));
        ?>
    </body>
</html>