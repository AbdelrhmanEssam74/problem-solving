class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sum = array_sum($nums);
        $leftSum = 0;
        for ($i = 0; $i < sizeof($nums); $i++) {
            $rightSum = $sum - $nums[$i] - $leftSum;
            if ($leftSum == $rightSum) {
            return $i;
            }
            $leftSum += $nums[$i];
        }
        return -1;
    }
}