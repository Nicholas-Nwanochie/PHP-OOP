<?php
include "./Autoloader.php";
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    

    $person1 = new Person("nick", "green", 26);
    echo $person1->getPerson();
    ?>
</body>

</html>