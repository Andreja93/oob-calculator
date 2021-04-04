<?php 
declare(strict_types = 1);
require_once 'back/class-autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOB Calculator</title>
</head>
<body>
    <form action="back/calc.php" method="POST">
    <h4>My Oob calculator</h4>
    <input type="number" name="num1" placeholder="First number">
    <select name="operater">
        <option value="add">Addiction</option>
        <option value="sub">Subtract</option>
        <option value="div">Divader</option>
        <option value="mul">Multiplication</option>
    </select>
    <input type="number" name="num2" placeholder="Second number">
    <button type="submit" name="submit">Done</button>
    </form>
</body>
</html>