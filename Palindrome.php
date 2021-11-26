<?php
function Palindrome($MyString) {                       //Defining a function named "Palindrome" with Mystring as variable
  $revString = strrev($MyString);                      //Reversing the given string using "strrev()" function and storing into varibale called "revString"     
  if ($revString == $MyString){                        // checking the condition if String with reverse string are same
    echo $MyString." is a Palindrome string.\n";       // If both strings are same then print given string is a palindrome 
  } else {
    echo $MyString." is not a Palindrome string.\n";   //If not, print string is not a palindrome
  }
}

Palindrome("liril");                      		// Calling the function defined above using the input string "liril"
Palindrome("Sverige");                    		// Calling the function defined above using the input string "Sverige"
Palindrome("racecar");                    		// Calling the function defined above using the input string "racecar"
?>