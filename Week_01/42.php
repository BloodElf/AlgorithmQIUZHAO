<?php
class Solution {

    // 思路：
        // i 位置的存水量 =  左右两边最高的柱中最小的一个柱子高度 - 当前位置高度

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $length = count($height);

        $result = 0;
        $maxLeft = 0;
        $maxRight = 0;

        $left = 1;
        $right = $length - 2;

         for ($i = 1; $i < $length - 1; $i++) {
            // 左边柱子小于右边柱子
            if ($height[$left - 1] < $height[$right + 1]) {
                $maxLeft = max($maxLeft, $height[$left - 1]);
                // 两边最小的柱子
                $min = $maxLeft;
                if ($min > $height[$left]) {
                    $result += $min - $height[$left];
                }
                $left++;
            } else {
                $maxRight = max($maxRight, $height[$right + 1]);
                $min = $maxRight;
                if ($min > $height[$right]) {
                    $result += $min - $height[$right];
                }
                $right--;
            }
        }
        return $result;
    }

}

$s = new Solution();
$r = $s->trap([0,1,0,2,1,0,1,3,2,1,2,1]);
echo 'result:' . $r .PHP_EOL;
