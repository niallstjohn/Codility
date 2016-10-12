<?php
/*

Codility - MinAvgTwoSlice

A non-empty zero-indexed array A consisting of N integers is given. A pair of integers (P, Q), such that 0 ≤ P < Q < N, is called a slice of array A (notice that the slice contains at least two elements). The average of a slice (P, Q) is the sum of A[P] + A[P + 1] + ... + A[Q] divided by the length of the slice. To be precise, the average equals (A[P] + A[P + 1] + ... + A[Q]) / (Q − P + 1).

For example, array A such that:

    A[0] = 4
    A[1] = 2
    A[2] = 2
    A[3] = 5
    A[4] = 1
    A[5] = 5
    A[6] = 8
    
contains the following example slices:

slice (1, 2), whose average is (2 + 2) / 2 = 2;
slice (3, 4), whose average is (5 + 1) / 2 = 3;
slice (1, 4), whose average is (2 + 2 + 5 + 1) / 4 = 2.5.

The goal is to find the starting position of a slice whose average is minimal.

Write a function:

function solution($A);

that, given a non-empty zero-indexed array A consisting of N integers, returns the starting position of the slice with the minimal average. If there is more than one slice with a minimal average, you should return the smallest starting position of such a slice.

For example, given array A such that:

    A[0] = 4
    A[1] = 2
    A[2] = 2
    A[3] = 5
    A[4] = 1
    A[5] = 5
    A[6] = 8
    
the function should return 1, as explained above.

Assume that:

N is an integer within the range [2..100,000];
each element of array A is an integer within the range [−10,000..10,000].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.

*/

/*
Test Link: https://codility.com/programmers/lessons/5-prefix_sums/min_avg_two_slice/
Result Link: https://codility.com/demo/results/trainingRZ47K9-QHC/
Codility Level: Respectable
Detected time complexity: O(N)
Correctness: 100%
Performance: 100%
Task Score: 100%
*/

function solution($A) {
    
    $smallestAverage = ($A[0] + $A[1]) / 2;
    
    $smallestAverageP = 0;
    
    for ($P = 0; $P < (count($A) - 1); $P++) {
        
        $average = ($A[$P] + $A[$P+1]) / 2;
        
        if (!empty($A[$P+2])) {
            $average3 = ($A[$P] + $A[$P+1] + $A[$P+2]) / 3;
            if ($average3 < $average) {
                $average = $average3;
            }
        }
        
        if ($average < $smallestAverage) {
            $smallestAverage = $average;
            $smallestAverageP = $P;
        }
        
    }
    
    return $smallestAverageP;
}
