<?php

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
