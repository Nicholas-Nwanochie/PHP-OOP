<?php
include "./includes/Code_for_OOP3.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
///constructors//

$person = new Person("nick","brown",26);
 echo   $person-> age;
$person->setName("nicky");
    echo   $person->name;
    ?>
</body>
</html>