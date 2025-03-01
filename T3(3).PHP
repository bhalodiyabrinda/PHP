<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sum of Digits</title>
</head>
<body>
    <h1>Sum of Digits</h1>
    <form action="T3(3).PHP" method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
        $number = $_POST['number'];
        $sum = 0;
        while ($number != 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = intval($number / 10);
        }
        echo "<p>The sum of the digits of $number is: $sum</p>";
    }
?>