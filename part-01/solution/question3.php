<?php
	include 'quiz.php';

	$user = $_GET['user'];

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[2]) {
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
<div class="top">3 Questions</div>
	<div class="score">
		<?php 
			echo $user . ", your current score is " . $current_score;
		?>
	</div>

	<div class="container">
		<h1><?php echo $quiz[3]; ?></h1>
		<form action="question4.php">
	<ul>
		<li>
    		<input type="radio" id="a-option" name="answer" value="A">
    		<label for="a-option">3.12159 moles</label>
    		<div class="check"></div>
 		 </li>
		<li>
			<input type="radio" id="b-option" name="answer" value="B">
			<label for="b-option">8,000 moles</label>
			<div class="check"></div>
		</li>
		<li>
			<input type="radio" id="c-option" name="answer" value="C">
			<label for="c-option">about 6.02 X 10<sup>23</sup> moles</label>
			<div class="check" value="C"></div>
		</li>
		<li>			
			<input type="radio" id="d-option" name="answer" value="D">
			<label for="d-option">somewhere between 1 million and 1 million x-squared moles</label>
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
