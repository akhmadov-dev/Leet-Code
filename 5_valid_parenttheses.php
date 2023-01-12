<?php

/**
 * 20. Valid Parentheses
 * https://leetcode.com/problems/valid-parentheses/
 * 
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 * An input string is valid if:
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Every close bracket has a corresponding open bracket of the same type.
 * 
 * Example 1:
 * Input: s = "()"
 * Output: true
 * 
 * Example 2:
 * Input: s = "()[]{}"
 * Output: true
 * 
 * Example 3:
 * Input: s = "(]"
 * Output: false
 */

/**
 * @param string $s
 * @return boolean
 */
function isValid($s)
{
    $s = trim($s);
    $brackets = [
        '(' => ')',
        '[' => ']',
        '{' => '}'
    ];

    for ($stack = [], $length = strlen($s), $i = 0; $i < $length; $i++) {
        $symbol = $s[$i];

        if (array_key_exists($symbol, $brackets)) {
            $stack[] = $symbol;
        } else {
            $lastInStack = array_pop($stack);

            if (!isset($brackets[$lastInStack]) || $symbol !== $brackets[$lastInStack]) {
                return false;
            }
        }
    }

    return count($stack) === 0;
}

echo isValid("([])");
?>