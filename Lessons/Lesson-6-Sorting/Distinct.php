<?php
/*

Codility - Distinct.php

A non-empty zero-indexed array A consisting of N integers is given. The product of triplet (P, Q, R) equates to A[P] * A[Q] * A[R] (0 ≤ P < Q < R < N).

For example, array A such that:

  A[0] = -3
  A[1] = 1
  A[2] = 2
  A[3] = -2
  A[4] = 5
  A[5] = 6
  
contains the following example triplets:

(0, 1, 2), product is −3 * 1 * 2 = −6
(1, 2, 4), product is 1 * 2 * 5 = 10
(2, 4, 5), product is 2 * 5 * 6 = 60

Your goal is to find the maximal product of any triplet.

Write a function:

function solution($A);

that, given a non-empty zero-indexed array A, returns the value of the maximal product of any triplet.

For example, given array A such that:

Write a function

function solution($A);

that, given a zero-indexed array A consisting of N integers, returns the number of distinct values in array A.

Assume that:

N is an integer within the range [0..100,000];

each element of array A is an integer within the range [−1,000,000..1,000,000].
For example, given array A consisting of six elements such that:

 A[0] = 2    A[1] = 1    A[2] = 1
 A[3] = 2    A[4] = 3    A[5] = 1
 
the function should return 3, because there are 3 distinct values appearing in array A, namely 1, 2 and 3.

Complexity:

expected worst-case time complexity is O(N*log(N));
expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.

*/

/*
Test Link: https://codility.com/programmers/lessons/6-sorting/distinct/
Result Link: https://codility.com/demo/results/training5YKVPC-E7G/
Codility Level: Painless
Detected time complexity: O(N * log(N))
Correctness: 100%
Performance: 100%
Task Score: 100%
*/

function solution($A) {
    
    sort($A);
    
    if (count($A) == 0) {
        return 0;
    }
    
    $distinct = 1;
    
    for  ($i = 1; $i < count($A); $i++) {
        if ($A[$i] != $A[$i-1]) {
            $distinct++;
        }
    }
    
    return $distinct;
}
