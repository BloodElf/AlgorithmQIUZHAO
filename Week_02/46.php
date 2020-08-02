<?php
class Solution {

    public $res = [];
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $this->backtracking($nums, []);
        return $this->res;
    }
    function backtracking($nums, $arr) {
        // 获得一种组合完毕
        if (count($arr) == count($nums)) {
            $this->res[] = $arr;
            return;
        }

        foreach ($nums as $value) {
            if (!in_array($value, $arr)) {
                $arr[] = $value;
                //  使用剩下的元素生成组合
                $this->backtracking($nums, $arr);
                // 当前路径完成，使用后续元素组成路径
                array_pop($arr);
            }
        }
    }
}