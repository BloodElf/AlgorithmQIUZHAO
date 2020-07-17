<?php

class Solution {

    // 思路1： 转数字，再变数组，超过数字长度，不能处理。。。
    // 思路2： 从最后一位开始加 1，处理进位
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $length = count($digits);
        for ($i = $length -1; $i >= 0; $i--)  {
            if ($digits[$i] < 9) {
                $digits[$i] = $digits[$i] + 1;
                break;
            } else {
                $digits[$i] = 0;
                if ($i == 0) {
                    array_unshift($digits, 1);
                }
            }
        }
        return $digits;
    }
}

$s = new Solution();
$nums = [9];
$r = $s->plusOne($nums);
var_export($r);