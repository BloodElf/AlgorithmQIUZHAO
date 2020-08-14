<?php
/*
122. 买卖股票的最佳时机 II

给定一个数组，它的第 i 个元素是一支给定股票第 i 天的价格。

设计一个算法来计算你所能获取的最大利润。你可以尽可能地完成更多的交易（多次买卖一支股票）。

注意：你不能同时参与多笔交易（你必须在再次购买前出售掉之前的股票）。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/best-time-to-buy-and-sell-stock-ii
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/
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