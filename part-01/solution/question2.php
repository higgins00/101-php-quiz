<?php

	include 'quiz.php';

	$user = $_GET['user'];
	$current_score = 0;

	if ($_GET["answer"] == $answers[1]) {
		$current_score += 1;
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="classy.css">
</head>
<body>
<div class="top">Question 1 of 5</div>

	<div class="score">
		<?php 
			echo $user . ", your current score is " . $current_score;
		?>
	</div>

	<div class="question">
		<?php echo $quiz[2]; ?>
	</div>

	<div class="answer">
		<form action="question3.php">
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="submit" value="Next Question">

			<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
			<input type="hidden" name="user" value="<?php echo $user ; ?>">
		</form>
	</div>


</body>
</html>
