<!-- wrire a php program to calaulate the mod of tow given integers wiwhout using any inbuit modulus operator. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulus Calculator</title>
</head>
<body>

<?php

function customModulus($dividend, $divisor) {
    if ($divisor == 0) {
        return "Error: Division by zero.";
    }

    $sign = 1;
    if ($dividend < 0) {
        $sign = -1;
        $dividend = abs($dividend);
    }

    if ($divisor < 0) {
        $divisor = abs($divisor);
    }

    $quotient = 0;

    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }

    $result = $sign * $dividend;

    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = isset($_POST["number1"]) ? (int)$_POST["number1"] : 0;
    $number2 = isset($_POST["number2"]) ? (int)$_POST["number2"] : 0;

    $result = customModulus($number1, $number2);
    echo "<p>The modulus of $number1 and $number2 is: $result</p>";
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number1">Enter the first number:</label>
    <input type="number" name="number1" required>

    <label for="number2">Enter the second number:</label>
    <input type="number" name="number2" required>

    <button type="submit">Calculate Modulus</button>
</form>

</body>
</html>
