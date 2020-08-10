<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums)
    {
        if (empty($nums) ) {
            return [[]];
        }

        // bfs
        $result = [[]];
        foreach ($nums as $n) {
            echo $n . PHP_EOL;
            foreach ($result as $tmp) {
                $tmp[] = $n;
                $result[] = $tmp;
                echo json_encode($tmp) . PHP_EOL;
            }
        }
        return $result;
    }
}

$s = new Solution();
$r = $s->subsets([1,2,3]);
echo json_encode($r);

/**
1
[1]
2
[2]
[1,2]
3
[3]
[1,3]
[2,3]
[1,2,3]
[[],[1],[2],[1,2],[3],[1,3],[2,3],[1,2,3]]
 */
