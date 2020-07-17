<?php


// 思路1： 循环遍历
    // * 第 i 位为 0， 则和后面第一个不为 0 的数字交换


class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++) {
            if ($nums[$i] == 0) {
                for ($j = $i + 1; $j < $length; $j++) {
                    if ($nums[$j] != 0) {
                        $tmp = $nums[$j];
                        $nums[$j] = $nums[$i];
                        $nums[$i] = $tmp;
                        break;
                    }
                }
            }
        }
        return $nums;
    }
    // 时间复杂度 O(n^2)
    // 空间复杂度 O(n)

    // 思路2： 0 的 key 移动到最后
    function moveZeroes2(&$nums) {
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] == 0) {
                $nums[] = 0;
                unset($nums[$i]);
            }
        }

        return $nums;
    }
    // 时间复杂度 O(n)
    // 空间复杂度 O(n)
}

$s = new Solution();
$nums = [0,1,0,3,12];
$s->moveZeroes($nums);

