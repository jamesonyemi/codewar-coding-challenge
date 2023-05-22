<?php

/*
CODEWAR-KATA

1. Write a function that takes in a string of one or more words, and returns the same string, but with all five or more letter words reversed (Just like the name of this Kata). Strings passed in will consist of only letters and spaces. Spaces will be included only when more than one word is present.

Examples:
spinWords( "Hey fellow warriors" ) => returns "Hey wollef sroirraw"
spinWords( "This is a test") => returns "This is a test"
spinWords( "This is another test" )=> returns "This is rehtona test"

*/

// Code Solution:

function spinWords(string $str): string {
  // TODO Have fun :)

/**
 *  $test_case = "Hey fellow warriors";
 *  print_r(explode(" ", $test));

**/

  $words = explode(" ", $str);
  $newStr = [];


  foreach( $words as $key => $val) {

    /*

       shorthand ternary operator:
       =================================
         strlen($words[$key]) >= 5,
           if one or more words has length is greater or equals to 5,
              then reverse it,
           else,
              do not reverse it.
       ==================================
    **/

    $newStr[] .= ( strlen($words[$key]) >= 5 ) ? strrev($words[$key]) : ($words[$key]);

/**
  * I have commented out the traditional if conditional

  **/

//      if( strlen($words[$key]) >= 5 ) {
//        $newStr[] .= strrev($words[$key]);
//      }

//     else{

//        $newStr[] .= ($words[$key]);

//      }


  }

   return implode(" ", $newStr);

}