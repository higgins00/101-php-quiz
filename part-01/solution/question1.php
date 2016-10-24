<?php

	include 'quiz.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="question">
		<?php echo $quiz[1]; ?>
	</div>

	<div class="answer">
		<form action="question2.php">
			<input type="radio" name="answer" value="A">A. I am<br>
			<input type="radio" name="answer" value="B">B. You are.<br>
			<input type="radio" name="answer" value="C">C. Cats<br>
			<input type="radio" name="answer" value="D">D. Nobody<br>
			<input type="submit" value="Next Question">
		</form>
	</div>

</body>
</html>