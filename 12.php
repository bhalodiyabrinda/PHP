<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12.php" method="post">
        Enter Frist Number: 
        <input type="text" name="num1" id="">
        <br>
        Enter Sencond Number:
        <input type="text" name="num2" id="">
        <br>
        <button type="submit" name="btn">submit</button>
    </form>
</body>
</html>

<?php
    
    if (isset($_POST["btn"])){
        $num1 = $_POST["num1"]? (int)$_POST["num1"] : 0;
        $num2 = $_POST["num2"]? (int)$_POST["num2"] : 0;
        if ($num2 == 0) {
        } else {
            $sign = 1;
            $btn = 0;

            if ($num1 < 0) {
                $sign = -1;
                $num1 = abs($num1);
            }

            if ($num2 < 0) {
                $num2 = abs($num2);
            }

            while ($num1 >= $num2) {
                $num1 -= $num2;
            }

            $btn = $sign * $num1;

            echo "The modulus of $num1 and $num2 is: $btn";
    }
}
?>