<?php

	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[5]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="final-result">
		<?php 
			echo $username .", you've finished the quiz! Your final score is " . $current_score . " out of 5.";
		?>
	</div>


</body>
</html>
