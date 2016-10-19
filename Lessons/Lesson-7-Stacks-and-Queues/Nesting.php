<?php

/*

Codility - Nesting

A string S consisting of N characters is called properly nested if:

S is empty;
S has the form "(U)" where U is a properly nested string;
S has the form "VW" where V and W are properly nested strings.

For example, string "(()(())())" is properly nested but string "())" isn't.

Write a function:

function solution($S);

that, given a string S consisting of N characters, returns 1 if string S is properly nested and 0 otherwise.

For example, given S = "(()(())())", the function should return 1 and given S = "())", the function should return 0, as explained above.

Assume that:

N is an integer within the range [0..1,000,000];

string S consists only of the characters "(" and/or ")".

Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(1) (not counting the storage required for input arguments).

*/

/*
Test Link: https://codility.com/programmers/lessons/7-stacks_and_queues/nesting/
Codility Level: Painless
Detected time complexity: O(N)
Correctness: 100%
Performance: 100%
Task Score: 100%
*/

function solution($S) {
    
    $arr = str_split($S);
    
    $numOpen = 0;
    $numClosed = 0;
    
    foreach ($arr as $key => $char) {
        if ($char == '(') {
            $numOpen++;
        }
        else if ($char == ')') {
            $numClosed++;
        }
        if ($numClosed > $numOpen) {
            return 0;
        }
        
    }
    
    return $numOpen == $numClosed ? 1 : 0;

}
