<?php

/**
 * Prints each number from 1..n on a separate line except in the following
 * cases:
 *
 * 1. If the number is divisible by 3, print "Fizz"
 * 2. If the number is divisible by 5, print "Buzz"
 * 3. If the number is divisible by 3 and 5, print "FizzBuzz"
 *
 * @param   int   $n    Upper limit of range of numbers to print.
 * @return  void
 */
function fizzbuzz($n) {  
  for ($x = 1; $x <= $n; $x++) {
    if ((x % 3 == 0) && (x % 5 == 0))
      echo "FizzBuzz";
    elseif (x % 3 == 0)
      echo "Fizz";
    elseif (x % 5 == 0)
      echo "Buzz";
    else
      echo $n;
    
    echo "<br/>";
  }
}

?>
