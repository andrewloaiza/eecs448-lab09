<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "<link href='styles.css' rel='stylesheet' type='text/css'/>";

$yourScore = 0;
$total = 5;

$questionPrompts = array("Question 1: What is the most spoken language in the world?",
                         "Question 2: What is the largest country in the world?",
                         "Question 3: Which of the following countries is NOT in Asia?",
                         "Question 4: Which of the following is the oldest?",
                         "Question 5: What is the largest continent by land area?");
$questions = array("language", "country", "notAsia", "structure", "continent");
$answers = array("English","Russia","Maldova","Michigan's First Lighthouse","Asia");




echo "<h1>Quiz results</h1>";

for ($i = 0; $i < $total; $i++)
{
  $yourAnswer = isset($_POST[$questions[$i]]) ? $_POST[$questions[$i]] : "";

  // display question, user's answers, and correct answer
  echo "<b>" . $questionPrompts[$i] . "</b>";
  echo "<div class='results'> Your answer: " . $yourAnswer . "</div>";
  echo "<div class='results'> Correct answer: " . $answers[$i] . "</div> <br>";

  // if correct, add to total score
  if ($yourAnswer == $answers[$i]) {$yourScore++;}
}

echo "Your score: " . ($yourScore / $total * 100) . "%";

?>
