<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dynamic Textbox Generator and Sorter</title>
</head>
<body>
  <h1>Dynamic Textbox Generator and Sorter</h1>
  <form action="T3(1).PHP"  method="post">
    <label for="num_boxes">Enter the number of textboxes:</label>
    <input type="number" id="num_boxes" name="num_boxes" required>
    <input type="submit" value="Generate">
  </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_boxes = $_POST["num_boxes"];
        echo "<form action='' method='post'>";
        for ($i = 1; $i <= $num_boxes; $i++) {
            echo "<label for='textbox_$i'>Value $i:</label>";
            echo "<input type='text' id='textbox_$i' name='textbox_$i'><br>";
        }
        echo "<input type='submit' value='Sort'>";
        echo "</form>";

        if (isset($_POST['textbox_1'])) {
            $values = array();
            for ($i = 1; $i <= $num_boxes; $i++) {
                if (!empty($_POST['textbox_'.$i])) {
                    $values[] = $_POST['textbox_'.$i];
                }
            }
            sort($values);
            echo "<h2>Sorted Values:</h2>";
            foreach ($values as $value) {
                echo "$value<br>";
            }
        }
    }
?>
