学习笔记

* 使用二分查找，寻找一个半有序数组 [4, 5, 6, 7, 0, 1, 2] 中间无序的地方。同学们可以将自己的思路、代码写在学习总结中。

思路：
    二分查找时,中间点将数组分为2部分
    * 如果全部都是顺序排列则最输出最左端id
    * 当有乱序时，可以比较左右两边那边是有序的，在无序的一边继续使用二分查找
    
```
class Solution()
{
    public function get($nums)
    {
        $len = count($nums);
        if ($len <= 1) {
            return 0;
        }
        
        $left = 0;
        $right = $len - 1;
        while ($left <= $right) {
            $mid = ($left + $right) >> 1;
            if ($mid == $left) {
                return $mid;
            }
            // 全是顺序排列
            if ($nums[$left] < $nums[$mid] && $nums[$mid] < $nums[$right]) {
                return $left;
            }
            // 左边顺序，右边乱序
            if ($nums[$left] < $nums[$mid] && $nums[$mid] > $nums[$right]) {
                $left = $mid + 1;
            }else {
                $right = $mid - 1;
            }
        }
    }
}

```

## 二分查找
### 二分查找前提：
1. 目标函数单调性
2. 存在上下界
3. 能够通过索引访问

### 二分查找代码模板
```
   $left = 0;
   $right = $len - 1;
   
   while ($left <= $right) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] == target) {
            // find target!
            break or return result
        } else if ($arr[$mid] < target) {
           $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
   }
```
### 牛顿迭代法
```
    $r = $x;
    while ($r*$r > $x) {
        $r = ($r + $x/$r)/2    
    }
    return $r;
```

