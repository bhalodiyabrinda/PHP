<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Top Three Maximum Values</title>
</head>
<body>
    <h1>Top Three Maximum Values</h1>
    <form action="" method="post">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Find Top Three">
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numbers'])) {
        $numbers = explode(',', $_POST['numbers']);
        $numbers = array_map('trim', $numbers); 
        $numbers = array_map('intval', $numbers);

        rsort($numbers);

        echo "<h2>Top Three Maximum Values:</h2>";
        for ($i = 0; $i < min(3, count($numbers)); $i++) {
            echo "<p>" . ($i + 1) . "st Maximum: {$numbers[$i]}</p>";
        }
    }
?>