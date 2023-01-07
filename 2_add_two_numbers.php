<?php

/**
 * 9. Palindrome Number
 * https://leetcode.com/problems/palindrome-number/
 * 
 * Given an integer x, return true if x is a 
 * palindrome, and false otherwise.
 * 
 * Example 1:
 * Input: x = 121
 * Output: true
 * Explanation: 121 reads as 121 from left to right and from right to left.
 * 
 * Example 2:
 * Input: x = -121
 * Output: false
 * Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
 * 
 * Example 3:
 * Input: x = 10
 * Output: false
 * Explanation: Reads 01 from right to left. Therefore it is not a palindrome.
 */

/**
 * @param Intger $x
 * @return Boolean
 */
function isPalindrome($x)
{
    $array = str_split((string)$x);
    $array2 = array_reverse($array);
    $array_count = count($array);

    for ($i = 0; $i < $array_count; $i++)
    {
        if ($array[$i] !== $array2[$i]) {
            return false;
        }
    }

    return true;
}

echo isPalindrome(121);