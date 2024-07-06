class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
          if (count($nums) == 1)
            return $nums[0];
        return (array_search(1, array_count_values($nums)));
    }
}