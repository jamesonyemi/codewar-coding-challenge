<?php

/**
 * Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

* Example: The binary representation of 1234 is     10011010010, so the function should return 5 in this case

* Tag: Bit, Algorithm
* url: https://www.codewars.com/kata/526571aae218b8ee490006f4/train
 */


/** SOLUTION */


function countBits($n)
{

  // Program Me

  $r = '';
  $q = [];
  $count = '';

// we perform $n / 2
// then return the result of the floor($n / 2)
// also if the result of [ ($n % 2) < 2 ], break and return the value
// then break the loop the return the sum of the binary of $n



  if( $n >= 1) {

      $r = str_split(decbin($n));

        for($i = 0; $i < count($r); $i++) {

          if($r[$i] == 1) {
              $q[] = $r[$i];

          }
    }

  }

  else {
    $r = str_split($n);
    $q = $r;
    return (int)($q[0]);
  }

  $count =  array_count_values($q);

  if( empty($n) || is_null($n) ) {
    // print_r("zero region");
    return $count;
  }
  else {
    if( array_key_exists( 1, $count) ) {
       return  array_sum($count);
    }

}

}


// Solution 2
function countBitsTwo($n)
{
  return substr_count(decbin($n), 1);
}