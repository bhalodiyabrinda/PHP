<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modulus Calculator</title>
</head>
<body>
    <h1>Modulus Calculator</h1>
    <form action="" method="post">
        <label for="dividend">Enter the Dividend:</label>
        <input type="number" id="dividend" name="dividend" required><br><br>
        <label for="divisor">Enter the Divisor:</label>
        <input type="number" id="divisor" name="divisor" required><br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dividend = $_POST['dividend'];
        $divisor = $_POST['divisor'];

        function customMod($dividend, $divisor) {
            if ($divisor == 0) {
                return "Division by zero error!";
            }

            $quotient = intval($dividend / $divisor);
            $product = $divisor * $quotient;
            $modulus = $dividend - $product;

            return $modulus;
        }

      $result = customMod($dividend, $divisor);
      echo "<p>The modulus of $dividend divided by $divisor is: $result</p>";
    }
?>