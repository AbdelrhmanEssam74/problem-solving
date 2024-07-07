class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $nums1 = array_splice($nums1, 0, (int)$m);
        $nums2 = array_splice($nums2, 0, (int)$n);
        $nums1 = array_merge($nums1, $nums2);
        asort($nums1);
        return $nums1;
    }
}