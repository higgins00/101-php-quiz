<?php

	include 'quiz.php';
	$user = $_GET['user'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="classy.css">
</head>
<body>
<div class="top">Question 1 of 5</div>

	<div class="question">
		<?php echo $quiz[1]; ?>
	</div>

	<div class="answer">
		<form action="question2.php">
			<input type="radio" name="answer" value="A">Rodin's "The Thinker"<br>
			<input type="radio" name="answer" value="B">Michalangelo's "David"<br>
			<input type="radio" name="answer" value="C">"Venus de Milo"<br>
			<input type="radio" name="answer" value="D">The Lincoln statue in the Lincoln Memorial<br>
		
			<input type="submit" value="Next Question">
			<input type="hidden" name="user" value="<?php echo $user ; ?>">
		</form>
	</div>

</body>
</html>