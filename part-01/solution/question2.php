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
<div class="top">4 Questions</div>
	<div class="score">
		<?php 
			echo $user . ", your current score is " . $current_score;
		?>
	</div>

	<div class="container">	
		<h1><?php echo $quiz[2]; ?></h1>
		<form action="question3.php">
	<ul>
		<li>
    		<input type="radio" id="a-option" name="answer" value="A">
    		<label for="a-option">Venezula</label>
    		<div class="check"></div>
 		 </li>
		<li>
			<input type="radio" id="b-option" name="answer" value="B">
			<label for="b-option">Bolivia</label>
			<div class="check"></div>
		</li>
		<li>
			<input type="radio" id="c-option" name="answer" value="C">
			<label for="c-option">Argentina</label>
			<div class="check" value="C"></div>
		</li>
		<li>			
			<input type="radio" id="d-option" name="answer" value="D">
			<label for="d-option">Chile</label>
			<div class="check"></div>
		</li>
		</ul>
		
			<input type="submit" value="Next">

			<input type="hidden" name="user" value="<?php echo $user ; ?>">
			<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
		</form>
	</div>


</body>
</html>