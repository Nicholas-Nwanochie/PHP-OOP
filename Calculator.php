<?php
declare(strict_types=1);
include "./Autoloader.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./calculate.php" method="POST">
        <p>My calc</p>

        <input type="number" name="num1" placeholder="first number">
        <select name="op">
            <option value="add">add</option>
            <option value="subtract">subtract</option>
            <option value="multiply">multiply</option>
            <option value="divide">divide</option>
        </select>
        <input type="number" name="num2" placeholder="second number">
        <button type="submit" name="submit">Calculate</button>

    </form>


    <?php




?>
</body>

</html>