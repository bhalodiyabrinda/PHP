<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Right Triangle Checker</title>
</head>
<body>
    <h1>Right Triangle Checker</h1>

    <form action="" method="post">
        <label for="side1">Enter length of side 1:</label>
        <input type="number" id="side1" name="side1" required>
        <br>
        <label for="side2">Enter length of side 2:</label>
        <input type="number" id="side2" name="side2" required>
        <br>
        <label for="side3">Enter length of side 3:</label>
        <input type="number" id="side3" name="side3" required>
        <br>
        <input type="submit" value="Check">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3'])) {
        $side1 = $_POST['side1'];
        $side2 = $_POST['side2'];
        $side3 = $_POST['side3'];

        function isRightTriangle($a, $b, $c) {
            $sides = [$a, $b, $c];
            rsort($sides); 
            return ($sides[0] ** 2 == $sides[1] ** 2 + $sides[2] ** 2);
        }

        if (isRightTriangle($side1, $side2, $side3)) {
            echo "<p>The given lengths form a right triangle.</p>";
        } else {
            echo "<p>The given lengths do not form a right triangle.</p>";
        }
    }
?>
