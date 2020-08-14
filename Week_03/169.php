<?php
/*
169. 多数元素
给定一个大小为 n 的数组，找到其中的多数元素。多数元素是指在数组中出现次数大于 ⌊ n/2 ⌋ 的元素。

你可以假设数组是非空的，并且给定的数组总是存在多数元素。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/majority-element
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/

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
