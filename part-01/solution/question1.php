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
	<div class="top">5 Questions</div>
	<div class="container">	
		<h1><?php echo $quiz[1]; ?></h1>
		<form action="question2.php">
	<ul>
		<li>
    		<input type="radio" id="a-option" name="answer" value="A">
    		<label for="a-option">Rodin's "The Thinker"</label>
    		<div class="check"></div>
 		 </li>
		<li>
			<input type="radio" id="b-option" name="answer" value="B">
			<label for="b-option">Michalangelo's "David"</label>
			<div class="check"></div>
		</li>
		<li>
			<input type="radio" id="c-option" name="answer" value="C">
			<label for="c-option">"Venus de Milo"</label>
			<div class="check" value="C"></div>
		</li>
		<li>			
			<input type="radio" id="d-option" name="answer" value="D">
			<label for="d-option">The Lincoln statue in the Lincoln Memorial</label>
			<div class="check"></div>
		</li>
		</ul>
		<div class="nextBtn">
			<input type="submit" value="Next">
			<input type="hidden" name="user" value="<?php echo $user ; ?>">
		</div>
		</form>
		</div>

</body>
</html>