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
		<?php echo $quiz[1]; ?>
		<form action="question2.php">
	<ul>
		<li>
    		<input type="radio" id="a-option" name="selector" value="A">
    		<label for="a-option">Rodin's "The Thinker"</label>
    		<div class="check"></div>
 		 </li>
		<li>
			<input type="radio" id="b-option" name="selector" value="B">
			<label for="b-option">Michalangelo's "David"</label>
			<div class="check"></div>
		</li>
		<li>
			<input type="radio" id="c-option" name="selector" value="C">
			<label for="c-option">"Venus de Milo"</label>
			<div class="check"></div>
		</li>
		<li>			
			<input type="radio" id="d-option" name="selector" value="D">
			<label for="d-option">The Lincoln statue in the Lincoln Memorial</label>
			<div class="check"></div>
		</li>
		</ul>
		
			<input type="submit" value="Next Question">
			<input type="hidden" name="user" value="<?php echo $user ; ?>">
		</form>
	</div>

</body>
</html>