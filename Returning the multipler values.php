<?php
$A = array(2, 4, 10, 16);                 //Initializing the array with set of random integers and assigning the array to a variable called "A"

function multiply($A, $factor){           //Defining the function called "multiply" with string variables "A","factor"
    foreach ($A as $value) {              //Fetching "parameters from Array A" one by one using foreach loop and storing in "value" variable
        $final[]=$value*$factor;          //Multiplying each array parameter with multiplying factor and sending to a empty array called "final"
    }
    print_r($final);                      //Printing the array "final" which has desired output.
}

multiply($A, 6);                          //Calling the function "multiply" with "array A" and "multiplying factor 6" as inputs 
multiply($A, 4);                          //Calling the function "multiply" with "array A" and "multiplying factor 4" as inputs 
?>