<?php
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        // 双指针
        // 低买高卖
        $profit = 0;
        $len = count($prices);
        for ($i = 0; $i < $len-1; $i++) {
            $checkProfit = $prices[$i + 1] - $prices[$i];
            if ($checkProfit > 0) {
                $profit += $checkProfit;
            }
        }
        return $profit;
    }
}

// 最终获利为最低点购买 、最高点卖出 = 从最低点开始每天的获利