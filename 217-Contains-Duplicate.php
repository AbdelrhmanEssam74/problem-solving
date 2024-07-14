class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $hashList = array();
        foreach ($nums as $num) {
            if (isset($hashList[$num])) {
            return true;
            } else {
            $hashList[$num] = 1;
            }
        }
        return false;
    }
}