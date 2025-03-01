<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCQ Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            margin-bottom: 16px;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
    $questions = array(
        "2+3=" => "5",
        "11-10=" => "1",
        "15*2=" => "30",
        "16/2" => "8",
        "2^2" => "4",
        "9*9" => "81"
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;

        foreach ($questions as $question => $answer) {
            $userAnswer = test_input($_POST[$question]);

            if ($userAnswer === $answer) {
                $score++;
            }
        }

        // Display the quiz score
        echo '<div style="text-align: center; margin-top: 20px;">';
        echo '<h2>Your Quiz Score:</h2>';
        echo '<p>You scored ' . $score . ' out of ' . count($questions) . '.</p>';
        echo '</div>';
    }

    // Function to sanitize and validate input data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <?php
        // Generate the quiz questions and options
        foreach ($questions as $question => $answer) {
            echo '<label>' . $question . '</label>';
            echo '<input type="text" name="' . htmlspecialchars($question) . '" required>';
        }
    ?>

    <button type="submit">Submit Quiz</button>
</form>

</body>
</html>
