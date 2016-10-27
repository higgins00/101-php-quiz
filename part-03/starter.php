<?php
    $quiz = array(
        0 => "Question 1",
        1 => "Question 2",
        2 => "Question 3",
        3 => "Question 4",
        4 => "Question 5",
        );
    $answers = array(
        0 => "A",
        1 => "B",
        2 => "C",
        3 => "D",
        4 => "A",
        );
    if (count($_GET) == 0) {
        $current_score = 0;
        $current_question = 0;
    } else {
        $current_question = (int)$_GET["current_question"];
        $current_score = (int)$_GET["current_score"];
        if ($_GET["answer"] == $answers[$current_question]) {
            // increment the current score by 1.
        }
        // incremement the current question by 1.
    }
    if ($current_question == (count($quiz))) {
        $last_question = true;
    } else {
        $last_question = false;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="feedback">
        Your current score is __________________________ 
        <!-- Dynamically populate the score -->
    </div>
    
    <?php if ($last_question) { ?>
        <div class="final-result">
            You've finished the quiz! Your final score is _____________ out of 5.
            <!-- Dynamically populate the score -->
        </div>
    <?php } else { ?>
        <div class="answer">
            <div class="question">
                __________________
                <!-- Dynamically populate the question -->
            </div>
            <form>
                <input type="radio" name="answer" value="A">A<br>
                <input type="radio" name="answer" value="B">B<br>
                <input type="radio" name="answer" value="C">C<br>
                <input type="radio" name="answer" value="D">D<br>
                <input type="submit" value="Next Question">
                <input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
                <input type="hidden" name="current_question" value="<?php echo $current_question ; ?>">
            </form>
        </div>
        
    <?php } ?>
    
</body>
</html>