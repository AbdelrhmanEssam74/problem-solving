class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        sort($nums1);
        sort($nums2);
        $result = array();
        $i = 0;
        $j = 0;
        while($i < count($nums1) && $j < count($nums2)):
            if($nums1[$i] < $nums2[$j]):
                $i++;
            elseif($nums1[$i] > $nums2[$j]):
                $j++;
            else:
                array_push($result , $nums1[$i]);
                $i++;
                $j++;
            endif;
        endwhile;
    return $result;
    }
}