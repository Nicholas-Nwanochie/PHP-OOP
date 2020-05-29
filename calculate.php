<?php
declare(strict_types=1);
include "./Autoloader.php";





$op = $_POST['op'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$calc = new Calc($op, (int)$num1, (int)$num2);

try{
echo $calc->calculator();

}
catch(TypeError $e){
echo "error:". $e->getMessage();

}
?>