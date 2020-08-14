<?php
/*
860. 柠檬水找零
在柠檬水摊上，每一杯柠檬水的售价为 5 美元。

顾客排队购买你的产品，（按账单 bills 支付的顺序）一次购买一杯。

每位顾客只买一杯柠檬水，然后向你付 5 美元、10 美元或 20 美元。你必须给每个顾客正确找零，也就是说净交易是每位顾客向你支付 5 美元。

注意，一开始你手头没有任何零钱。

如果你能给每位顾客正确找零，返回 true ，否则返回 false 。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/lemonade-change
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
*/

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