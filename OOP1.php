<?php
include "./includes/inheritance.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$pet1 = new Pet();
echo $pet1 -> owner();

?>
</body>
</html>



<!-- scope resolution operator :: -->