<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 * 
 * Example 1:
 * Input: nums = [2,7,11,15], target = 9
 * Output: [0,1]
 * Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
 * 
 * Example 2:
 * Input: nums = [3,2,4], target = 6
 * Output: [1,2]
 * 
 * Example 3:
 * Input: nums = [3,3], target = 6
 * Output: [0,1]
 * 
 */

 // Version - 1
function twoSum($nums, $target)
{
    $k = 1;
    $nums_count = count($nums);
    $two_nums_count = $nums_count;

    for ($i = 0; $i < $nums_count; $i++) {
        $two_nums_count--;

        for ($t = $k; $t <= $nums_count; $t++) {
            $y = $t;
            $two_summ = $nums[$i] + $nums[$y++];

            if ($two_summ === $target) {
                return [$i, $t];
            }
        }

        $k++;
    }
}

$nums = [3, 2, 4];
$target = 6;

$result = twoSum($nums, $target);

print_r($result);
