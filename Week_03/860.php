<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $income = [
            5 => 0,
            10 => 0,
            20 => 0
        ];

        foreach ($bills as $b) {
            if ($b == 5) {
                $income[5] = $income[5] + 1;
                continue;
            }

            // 需要找零
            if ($b == 10) {
                if ($income[5] > 0) {
                    $income[5] = $income[5] - 1;
                    $income[10] = $income[10] + 1;
                    continue;
                }

                return false;
            }

            if ($b == 20) {
                if ($income[10] > 0 && $income[5] > 0) {
                    $income[10] = $income[10] - 1;
                    $income[5] = $income[5] - 1;
                    $income[20] = $income[20] + 1;
                    continue;
                }
                if ($income[5] >= 3) {
                    $income[5] = $income[5] - 3;
                    $income[20] = $income[20] + 1;
                    continue;
                }
                return false;
            }
        }

        return true;
    }
}

// 模拟人工找零，找零时优先找给大面额