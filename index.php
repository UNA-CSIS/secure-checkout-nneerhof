<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>The Best Pet Store<br><hr></h2>

        <form method="post" action="checkout_summary.php">
            <p>
                <label for="puppy">Adorable Golden Retriever: $450.56 <br>Sum: </label>
                <input type="number" name="puppy" id="puppy" value="0">
            <br><br> <hr>
            </p>
            <p>
                <label for="kitty">Sleepy Orange Cat: $381.94 <br>Sum: </label>
                <input type="number" name="kitty" id="kitty" value="0">
            <br><br> <hr>
            </p>
            <p>
                <label for="turtle">Little Wild Turtle: $178.19 <br>Sum: </label>
                <input type="number" name="turtle" id="turtle" value="0">
            <br><br> <hr>
            </p>
            <p>
                <input type="submit" name="continue" value="Add to Checkout">
            </p>
    </body>
</html>