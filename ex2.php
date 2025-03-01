<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Quiz</title>
</head>
<body>
    <form method="post" action="ex2.php">
        <button type="submit" name="btn">Submit Quiz</button>
    </form>
</body>
</html>

<?php
    $questions = array(
        "2+3=" => "5",
        "11-10=" => "1",
        "15*2=" => "30",
        "16/2" => "8",
        "2^2" => "4",
        "9*9" => "81"
    );

    if (isset($_POST["btn"])) {
        $score = 0;

        foreach ($questions as $question => $answer) {
            $userAnswer = test_input($_POST[$question]);

            if ($userAnswer === $answer) {
                $score++;
            }
        }

        echo '<h2>Your Quiz Score:</h2>';
        echo '<p>You scored ' . $score . ' out of ' . count($questions) . '.</p>';
        echo '</div>';
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    foreach ($questions as $question => $answer) {
        echo '<label>' . $question . '</label>';
        echo '<input type="text" name="' . htmlspecialchars($question) . '" required>';
    }
?>