<?php 
  $play_count = 0;
  $correct_guesses = 0;
  $guess_high = 0;
  $gues_low = 0;

  echo "I'm going to think of numbers between 1 and 10(inclusive). Do you think you can guess what this number is?\n";

  function guessNumber() {
    global $play_count;
    global $correct_guesses;
    global $guess_high;
    global $guess_low;

    $play_count++;

    $num = rand(1, 10);

    echo "\nNow make your guess...\n";
    
    $guess = readline(">> ");
    $guess = intval($guess);


    echo "You're on round $play_count\n";
    echo "The random number is $num.\n";
    echo "And you've guessed it... $guess\n";

    if ($guess === $num) {
      $correct_guesses++;
    }; 
    if ($guess > $num) {
      $guess_high++;
    };
    if ($guess < $num) {
      $guess_low++;
    };



  }; //function

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();


$percentage = (($correct_guesses / $play_count) * 100);
echo "\nYou have guess $percentage% correct.\n";

if ($guess_high > $guess_low) {
  echo "You guess score is $guess_high. When you guessed wrong, you tended to guess high.\n";
};
if ($guess_low > $guess_high) {
  echo "You guess score is $guess_low. When you guessed wrong, you tended to guess low.\n";
};


?>
