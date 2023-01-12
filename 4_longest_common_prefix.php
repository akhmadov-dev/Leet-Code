<?php

/**
 * 14. Longest Common Prefix
 * https://leetcode.com/problems/longest-common-prefix/
 * 
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 * 
 * Example 1:
 * Input: strs = ["flower","flow","flight"]
 * Output: "fl"
 * 
 * Example 2:
 * Input: strs = ["dog","racecar","car"]
 * Output: ""
 * Explanation: There is no common prefix among the input strings.
 */

/**
 * @param array $strs
 * @return string
 */
function longestCommonPrefix($strs)
{
    $strs_count = count($strs);
    $strs_len = array_map('strlen', $strs);
    $str_min_len = min($strs_len);
    $end = false;
    $str = '';

    for ($i = 0; $i < $str_min_len; $i++) {
        $str_arr = [];

        for ($j = 0; $j < $strs_count; $j++) {
            $str_arr[] = $strs[$j][$i];

            if ($j > 0 && ($str_arr[$j] !== $str_arr[$j - 1])) {
                $str_arr = [];
                $end = true;
            }
        }
        if ($end) break;
        if (!empty($str_arr)) {
            $str .= $str_arr[0];
        }
    }

    return $str;
}


echo longestCommonPrefix(["cir", "car"]);
