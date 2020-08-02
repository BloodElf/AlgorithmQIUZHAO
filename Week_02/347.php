<?php

// 使用 hash 表，对计数进行排列
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $arr = [];

        foreach ($nums as $v) {
            if (!array_key_exists($v, $arr)) {
                $arr[$v] = 1;
            } else {
                $arr[$v] += 1;
            }
        }

        arsort($arr);
        $result= [];
        foreach ($arr as $num => $count) {
            if (count($result) == $k) {
                break;
            }
            $result[] = $num;
        }
        return $result;
    }
}


// 将计数放入优先队列

class Solution2 {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $hash = array_count_values($nums);

        $pq = new SplPriorityQueue();
        foreach ($hash as $key => $counts) {
            $pq->insert($key, $counts);
        }

        $result = [];
        for ($i = 0; $i < $k; $i++) {
            $result[] = $pq->extract();
        }
        return $result;
    }
}