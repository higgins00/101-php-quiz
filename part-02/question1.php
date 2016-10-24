<?php

	include 'quiz.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="classy.css">
</head>
<body>

	<div class="question">
		<?php echo $quiz[0]; ?>
	</div>

	<div class="answer">
		<form action="question2.php">
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="submit" value="Next Question">
		</form>
	</div>

</body>
</html>