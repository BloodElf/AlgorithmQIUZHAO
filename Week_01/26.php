<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        $counts = count($nums);
        if ($counts <= 1) {
            return $counts;
        }

        for ($i = 0; $i < $counts - 1; ++$i) {
            $j = $i + 1;
            if ($nums[$i] == $nums[$j]) {
                unset($nums[$i]);
            }
        }
        // var_dump($nums);
        return count($nums);
    }
}

// 思路： 使用双指针进行判断，
//        每个数和下一个数进行比较，
//        如果相同，删除当前数。
