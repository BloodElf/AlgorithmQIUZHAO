<?php
class Solution {

    // 思路： 找左右柱子

    // 循环：
        // 如果右边第一个比当前大，则不能盛水
        // 找到右边 大于等于当前的柱子
        // 计算包围范围内的容量

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $length = count($height);

        $result = 0;
        for ($i = 0; $i < $length - 2; ) {
            // echo "i:" . $i .PHP_EOL;
            // 左柱
            if ($height[$i + 1] >= $height[$i]) {
                $i++;
                continue;
            }

            // 找到右边比当前小, 可以盛水
            // 找右柱
            for ($j = $i + 2; $j < $length; $j++) {
//                echo  '**************' .PHP_EOL;
//                echo 'i' . $i .PHP_EOL;
//                echo 'height i:' . $height[$i] .PHP_EOL;
//                echo 'j' . $j .PHP_EOL;
//                echo 'height j:' . $height[$j] .PHP_EOL;
                if ($height[$j] >= $height[$i]) {
                    // echo "j:" . $j .PHP_EOL;
                    // 找到右柱
                    // 容量（去掉柱子的）
                    $v = min($height[$j], $height[$i]) * ($j - $i - 1);
                    for ($k = $i + 1; $k < $j; $k++) {
                      $v -= $height[$k];
                    }
                    // echo 'v:' . $v .PHP_EOL;
                    $result += $v;
                    $i = $j;
                    break;
                }else {
                    if ($j == ($length - 1)) {
                        // 没找到
                        // return $result;
                        $i++;
                        break;
                    }
                }
            }
        }
        return $result;
    }

}

$s = new Solution();
$r = $s->trap([0,1,0,2,1,0,1,3,2,1,2,1]);
echo 'result:' . $r .PHP_EOL;
