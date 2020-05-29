<?php
include "./includes/Code_For_OOP2.php"

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$person1 = new Person();
$person1->setName("Nick ");
echo $person1->name;

echo"<br>";

$person2 = new Person();
$person2->setName(" nicky");
echo $person2->name;
?>



</body>
</html>