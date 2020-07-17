<?php
class Solution {

    // 1. array 进出
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {

        $counts = count($nums);
        // 实际需要旋转的步数
        $step = $k % $counts;

        for ($i = 0; $i < $step; $i++) {
            array_unshift($nums, array_pop($nums));
        }

        return $nums;
    }
    // 空间复杂度 O(1)
    // 时间复杂度 O(n * K)


    // 2. 反转
    // 旋转 K 次 -> k % N 个元素移动到头部，  N - K % N 个数字移动到尾部
    // step1: 全部反转
    // step2: 反转 k % N 个数字
    // step3: 反转剩下的数字

    function rotate2(&$nums, $k) {
        $length = count($nums);
        $step = $k % $length;

        $this->reverse($nums, 0, $length -1);
        $this->reverse($nums, 0, $step - 1);
        $this->reverse($nums, $step, $length - 1);
        return $nums;
    }

    function reverse(&$nums, $start, $end) {
        while ($start < $end) {
            $tmp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $tmp;
            $start ++;
            $end --;
        }
    }

    // 空间复杂度: O(1)
    // 时间复杂度 O(n)
}