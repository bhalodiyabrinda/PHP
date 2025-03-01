<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exam</title>
</head>
<body>
<?php
$correctAnswers = array(
'mcq1' => 'option2',
'mcq2' => 'option3',
'mcq3' => 'option4',
'mcq4' => 'option1',
'mcq5' => 'option2',
'mcq6' => 'option4',
'mcq7' => 'option4',
'mcq8' => 'option4',
'mcq9' => 'option3',
'mcq10' => 'option2'
);
$score = 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
foreach ($correctAnswers as $question => $correctAnswer) {
if (isset($_POST[$question])) {
$userAnswer = $_POST[$question];
if ($userAnswer === $correctAnswer) {
$score++;
}
}
}
echo "<h2>Your Score: $score / 10</h2>";
}
?>
<form action="" method="post">
<h1 align="center">Exam</h1>
<hr>
<p>1. The largest sugar mill in Asia is located</p>
<label>
<input type="radio" name="mcq1" value="option1"> Option 1 - Karnataka
</label><br>
<label>
<input type="radio" name="mcq1" value="option2"> Option 2 - U.P.
</label><br>
<label>
<input type="radio" name="mcq1" value="option3"> Option 3 - West Bengal
</label><br>
<label>
<input type="radio" name="mcq1" value="option4"> Option 4 - Maharashtra
</label><br>
<hr>
<p>2. International Commonwealth Day is celebrated every year on ____</p>
<label>
<input type="radio" name="mcq2" value="option1"> Option 1 - 22 May
</label><br>
<label>
<input type="radio" name="mcq2" value="option2"> Option 2 - 23 May
</label><br>
<label>
<input type="radio" name="mcq2" value="option3"> Option 3 - 24 May
</label><br>
<label>
<input type="radio" name="mcq2" value="option4"> Option 4 - 25 May
</label><br>
<hr>
<p>3. The Maitree Express and Bandhan Express trains connect India with which of
the following countries?</p>
<label>
<input type="radio" name="mcq3" value="option1"> Option 1 - Mynamar
</label><br>
<label>
<input type="radio" name="mcq3" value="option2"> Option 2 - Pakistan
</label><br>
<label>
<input type="radio" name="mcq3" value="option3"> Option 3 - Nepal
</label><br>
<label>
<input type="radio" name="mcq3" value="option4"> Option 4 - Bangladesh
</label><br>
<hr>
<p>4. SEBI was set up in</p>
<label>
<input type="radio" name="mcq4" value="option1"> Option 1 - 1992
</label><br>
<label>
<input type="radio" name="mcq4" value="option2"> Option 2 - 1980
</label><br>
<label>
<input type="radio" name="mcq4" value="option3"> Option 3 - 1984
</label><br>
<label>
<input type="radio" name="mcq4" value="option4"> Option 4 - 1988
</label><br>
<hr>
<p>5. Which Railway Minister presented the railway budget 6 times in a row?</p>
<label>
<input type="radio" name="mcq5" value="option1"> Option 1 - John Mathai
</label><br>
<label>
<input type="radio" name="mcq5" value="option2"> Option 2 - Lalu Prasad
Yadav
</label><br>
<label>
<input type="radio" name="mcq5" value="option3"> Option 3 - Nitish Kumar
</label><br>
<label>
<input type="radio" name="mcq5" value="option4"> Option 4 - Mamata Banerjee
</label><br>
<hr>
<p>6. The largest producer of Bauxite in the world is</p>
<label>
<input type="radio" name="mcq6" value="option1"> Option 1 - U.S.A
</label><br>
<label>
<input type="radio" name="mcq6" value="option2"> Option 2 - Jamaica
</label><br>
<label>
<input type="radio" name="mcq6" value="option3"> Option 3 - Chile
</label><br>
<label>
<input type="radio" name="mcq6" value="option4"> Option 4 - Australia
</label><br>
<hr>
<p>7. Where is located Indian Railway Institute of Civil Engineering?</p>
<label>
<input type="radio" name="mcq7" value="option1"> Option 1 - Vadodara
</label><br>
<label>
<input type="radio" name="mcq7" value="option2"> Option 2 - Jamalpur
</label><br>
<label>
<input type="radio" name="mcq7" value="option3"> Option 3 - Nasik
</label><br>
<label>
<input type="radio" name="mcq7" value="option4"> Option 4 - Pune
</label><br>
<hr>
<p>8. Which day is celebrated as World Suicide Prevention Day?</p>
<label>
<input type="radio" name="mcq8" value="option1"> Option 1 - 17 July
</label><br>
<label>
<input type="radio" name="mcq8" value="option2"> Option 2 - 23 August
</label><br>
<label>
<input type="radio" name="mcq8" value="option3"> Option 3 - 9 September
</label><br>
<label>
<input type="radio" name="mcq8" value="option4"> Option 4 - 10 September
</label><br>
<hr>
<p>9. National Science day in India is celebrated on</p>
<label>
<input type="radio" name="mcq9" value="option1"> Option 1 - 30th April
</label><br>
<label>
<input type="radio" name="mcq9" value="option2"> Option 2 - 14 February
</label><br>
<label>
<input type="radio" name="mcq9" value="option3"> Option 3 - 28th February
</label><br>
<label>
<input type="radio" name="mcq9" value="option4"> Option 4 - 23th March
</label><br>
<br>
<p>10. Red Data Book contains</p>
<label>
<input type="radio" name="mcq10" value="option1"> Option 1 - Red pandas
</label><br>
<label>
<input type="radio" name="mcq10" value="option2"> Option 2 - Rare plants and
animals under threat
</label><br>
<label>
<input type="radio" name="mcq10" value="option3"> Option 3 - Rare minerals
</label><br>
<label>
<input type="radio" name="mcq10" value="option4"> Option 4 - Vanishing
rivers
</label><br>
<hr>
<br><br><br>
<center><button type="submit">Submit</button></center>
</form>
</body>
</html>