class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
    asort($nums);
    $New_start_index = 0;
    // reindex the array
    $nums = array_combine(range($New_start_index,
        count($nums) + ($New_start_index - 1)),
        array_values($nums));
        // check if the n == last item in the array
    if (count($nums) != $nums[count($nums) - 1]):
        $nums[] = count($nums);
    return $nums[count($nums) - 1];
    endif;
    if ($nums[0] != 0):
        return 0;
    endif;
    for ($i = 0, $j = 1; $j < count($nums); $i++, $j++) :
        if (($nums[$j] - $nums[$i]) == 1) :
            continue;
        else:
            return $nums[$i] + 1;
        endif;
    endfor;
    }
}