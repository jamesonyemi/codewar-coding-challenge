<?php

/**
 * Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

*Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']

 */


/** SOLUTION */


/*
solution one
*/

function solution($str) {

  $new_strArray = [];
  $offset = strlen($str) - 1;

  for( $i = 0; $i < strlen($str); $i++) {

    if($i == 0 && $i == 1 ) {
       $new_strArray[] .= $str[$i].$str[$offset - 1];
    }
    else{

      if(strlen($str) % 2 != 0 && strlen($str) - 1 == $offset) {

         $new_strArray[] .= $offset == $i ? $str[$i]. '_' : $str[$i].$str[$i + 1];

      } else {

        if(strlen($str) % 2 == 0  ) {

          $new_strArray[] .= $str[$i].$str[$i + 1];

        }
      }
    }

  }

}

/**
 * ==================
 * solution two
 * ===========

*/

function strSplit($str) {
  if (empty($str))
    return [];
  if (strlen($str) % 2 != 0)
    $str .= "_";
   return str_split($str, 2);
}