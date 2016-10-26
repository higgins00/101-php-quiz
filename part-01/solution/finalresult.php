<?php

	include 'quiz.php';

	$user = $_GET['user'];

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[5]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="classy.css">
</head>

<div class="top">5 Questions</div>

	<div class="container">
		<?php 
			echo $user .", you've finished the quiz! Your final score is " . $current_score . " out of 5.";
		?>
	</div>


</body>
</html>
