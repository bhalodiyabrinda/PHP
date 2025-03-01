<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Check answers
    $answers = ["b", "a", "d", "b", "b"];

    for ($i = 1; $i <= 5; $i++) {
        $question = "q$i";
        if (isset($_POST[$question]) && $_POST[$question] == $answers[$i - 1]) {
            $score++;
        }
    }

    echo "<h2>Your Quiz Results</h2>";
    echo "<p>Total Questions: 5</p>";
    echo "<p>Correct Answers: $score</p>";
}
?>