class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumOperations($nums) {
        $num_operations  = 0;
        foreach ($nums as $num) :
            if ($num % 3 != 0) :
                $num_operations += 1;
            endif;
        endforeach;
        return $num_operations;
    }
}