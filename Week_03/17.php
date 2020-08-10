<?php
class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        // bfs
        $dict = [
            2 => ['a', 'b', 'c'],
            3 => ['d', 'e', 'f'],
            4 => ['g', 'h', 'i'],
            5 => ['j', 'k', 'l'],
            6 => ['m', 'n', 'o'],
            7 => ['p','q','r', 's'],
            8 => ['t','u','v'],
            9 => ['w','x','y', 'z'],
        ];

        for($i = 0 ; $i< strlen($digits); $i++){ // ($digits as $d) {
            $words = $dict[$digits[$i]];

            if (empty($result)) {
                foreach ($words as $word) {
                    $result[] = $word;
                }
                continue;
            }
            $tmpResult = [];
            foreach ($result as $r) {
                foreach ($words as $word) {
                    $tmpResult[] = $r . $word;
                }
            }
            $result = $tmpResult;
        }

        return $result;
    }
}

// 思路：DFS 每次添加一个数字，每一个数字代表不同的字母
// 每次添加的时候在上一轮计算结果基础上添加

// 思路: BFS
// 第一个数字, 初始化答案
// 后续数字是第一个数字的子问题。每个数字对应 3-4