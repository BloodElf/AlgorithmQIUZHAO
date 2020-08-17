<?php
/*
 51. N皇后
 n 皇后问题研究的是如何将 n 个皇后放置在 n×n 的棋盘上，并且使皇后彼此之间不能相互攻击。

 给定一个整数 n，返回所有不同的 n 皇后问题的解决方案。
 每一种解法包含一个明确的 n 皇后问题的棋子放置方案，该方案中 'Q' 和 '.' 分别代表了皇后和空位。

 来源：力扣（LeetCode）
 链接：https://leetcode-cn.com/problems/n-queens
 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */


class Solution {

    public $result = [];
    public $cols = [];
    public $pie = [];
    public $na = [];
    /**
     * @param Integer $n
     * @return String[][]
     */
    function solveNQueens($n) {
        if ($n == 1) return ['Q'];
        if ($n < 4) return [];

        $this->dfs($n, 0);
        return $this->generate($this->result, $n);
    }


    function dfs($n, $level, $column = [])
    {
        if ($level == $n) {
            $this->result[] = $column;
            return;
        }

        // 每一行循环多少列
        for ($col = 0; $col < $n; $col++) {
            // 减枝
            if (in_array($col, $this->cols)
                || in_array(($col + $level), $this->pie)
                || in_array(($col - $level), $this->na)
            ) {
                continue;
            }

            $this->cols[] = $col;
            $this->pie[] = $col + $level;
            $this->na[] = $col - $level;

            // 找到当前层合适的列
            $this->dfs($n, $level + 1, array_merge($column, [$col]));

            // 回退当前层记录
            array_pop($this->cols);
            array_pop($this->pie);
            array_pop($this->na);
        }
    }

    // 最终输出结果
    function generate($arrs, $n) {
        $res = [];
        foreach ($arrs as $arr) {
            $tmp = [];
            foreach ($arr as $k => $v) {
                $tmp[] = str_repeat(".", $v) . "Q" . str_repeat(".", $n - $v - 1);
            }
            $res[] = $tmp;
        }
        return $res;
    }
}

$s = new Solution();
$re = $s->solveNQueens(4);
var_export($re);