<?php

	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[3]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="score">
		<?php 
			echo "Your current score is " . $current_score;
		?>
	</div>

	<div class="question">
		<?php echo $quiz[4]; ?>
	</div>

	<div class="answer">
		<form action="question5.php">
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="submit" value="Next Question">

			<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
		</form>
	</div>


</body>
</html>
