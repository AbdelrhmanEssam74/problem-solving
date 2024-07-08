class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minimumOperations($nums) {
        $num_operations  = 0; // number of the operations
        foreach ($nums as $num) :
            if ($num % 3 != 0) :
            // the number need to be incremented or decremented
            // so increament the number of operation by 1
                $num_operations += 1;
            endif;
        endforeach;
        return $num_operations;
    }
}