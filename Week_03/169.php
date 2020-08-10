<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $hash = array_count_values($nums);
        $len = count($nums);

        foreach ($hash as $k => $v) {
            if ($v > $len/2) {
                return $k;
            }
        }

        return false;
    }
}

// 思路1： 使用 hash table 记录每个元素有多少个
// 可以遍历整个数组，生成 hash table 时判断是否超过半数

// 思路2：分治
