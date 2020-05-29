<?php
include "./includes/Code_for_OOP4.php"
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    ///static instance//
echo Person:: $drinkingAge;
    Person::SetDrinkingAge(15);
    echo Person:: $drinkingAge;

    $person1 = new Person("nick","green",26);
    echo $person1->getDa();
    ?>
</body>

</html>