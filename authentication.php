<?php
session_start();
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
        <h2>Sign in<br><hr></h2>
        <form method="post" action="approval.php">
            <p>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username"><br>
            </p>
            <p>
                <label for="pwd">Password: </label>
                <input type="password" name="pwd" id="pwd"><br>
            </p>
            <input type="submit" name="signin" value="Sign in">
        </form>
    </body>
</html>