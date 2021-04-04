<?php 
 
declare(strict_types = 1);
require_once 'class-autoload.php';

$oper = $_POST['operater'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$cal = new Calculator($oper,(int)$num1,(int)$num2);

try {
    echo $cal->calculate();
} catch (TypeError $e) {
    echo "Error!: ".$e->getMessage();
}

?>