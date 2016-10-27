<?php
    
    // Questions array
    $quiz = array( 
    "If you could bring statues to life for the purpose of helping you carry groceries, which statue would be an anatomically poor choice as a helper?",
    "The Wicked Witch is allergic to water, so she wanted to go to a &ldquo;land-locked&rdquo; country. To which country could the Wicked Witch flee?",
    "If I wanted to whack one &ldquo;mole&rdquo; worth of moles during a game of Whac-A-Mole, how many would that be?",
    "Which musician could NOT use his or her name as a Windows file name?",
    "Mental break time. You deserve an easy question. What is 1 + 1",
    );


    // Answer choices array
    $choice = array(
        0 => array(
            "Venus de Milo", 
            "Rodin's The Thinker", 
            "Michalangelo's David", 
            "The Lincoln statue in the Lincoln Memorial"),
        1 => array(
            "Venezula",
            "Bolivia",
            "Argentina",
            "Chile"),
        2 => array(
            "about 6.02 X 10<sup>23</sup> moles",
            "3.12159 moles",
            "8,000 moles",
            "somewhere between 1 million and 1 million x-squared moles"),
        3 => array(
            "Ke&#36;ha",
            "will.i.am",
            "Guns N' Roses",
            "?uestlove"),
        4 => array(
            "Not this one",
            "2",
            "Nope",
            "Try again"),
    );  

    // Correct answer array
    $answers = array(
        0 => "Venus de Milo",
        1 => "Bolivia",
        2 => "about 6.02 X 10<sup>23</sup> moles",
        3 => "?uestlove",
        4 => "2",
    );


    if (count($_GET) == 0) {
        $current_score = 0;
        $current_question = 0;
        
    } else {
        $current_question = (int)$_GET["current_question"];
        $current_score = (int)$_GET["current_score"];

        if ($_GET["answer"] == $answers[$current_question]) {
            $current_score += 1;
        }
        $current_question += 1;
    } if ($current_question == (count($quiz))) {
        $last_question = true;
    } else {
        $last_question = false;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>5 Questions</title>
   <link rel="stylesheet" type="text/css" href="classy.css">
</head>
<body>

<div class="top">5 Questions</div>
    <div class="container"> 

    <?php if ($last_question) { ?>
        <h1>You've finished the quiz!</h1>
        <h2>Your final score is <?php echo $current_score; ?> out of 5.</h2>

    <?php } else { ?>
        <h2>Your current score is <?php echo $current_score; ?></h2>
        <h1><?php echo $quiz[$current_question]; ?></h1>

        <form>
            <?php
            shuffle($choice[$current_question]);
            foreach($choice[$current_question] as $value) { ?>
                <ul>
                    <li>
                        <input type="radio" id="<?php echo $value; ?>" name="answer" value="<?php echo $value; ?>">
                        <label for="<?php echo $value; ?>"><?php echo $value; ?></label>
                        <div class="check"></div>
                    </li>
                 </ul>
            <?php } ?>
            
            <input type="submit" value="Next">
            <input type="hidden" name="current_score" value="<?php echo $current_score; ?>">
            <input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
        </form>
    </div>
        
    <?php } ?>
    
</body>
</html>