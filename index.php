<?php 
    declare(strict_types =1);
    require 'class-autoload.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes\calc.inc.php" method="post">
    <h3>Phumlani Mhlungu</h3>
    <p>Simple Calculator using OOP classes</p>
    <input type="number" name="num1" placeholder="First Number">
    
    <select name="oper">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="mult">Multiplication</option>
        <option value="div">Division</option>
    </select>

    <input type="number" name="num2" placeholder="Second Number">
    <input type="submit" value="submit">
    </form>
    
</body>
</html>