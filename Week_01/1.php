<?php
class Solution {

    // 思路1： 2重循环查找答案

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $length = count($nums);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
    // 时间复杂度 O(n^2)
    // 空间复杂度 0(1)

    // 思路2：查找 target - $nums[$i] 是否在
    function twoSum2($nums, $target) {
        foreach ($nums as $key => $v) {
            $p = $target - $v;
            $kList = array_keys($nums, $p);
            if ($kList) {
                foreach ($kList as $pKey) {
                    if ($pKey == $key) {
                        continue;
                    }
                    return [$key, $pKey];
                }
            }
        }
        return [];
    }
    // 时间复杂度 O(n)
    // 空间复杂度 O(n)
}