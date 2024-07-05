class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $x_reversed = strrev($x);
        if ($x == $x_reversed) :
                return 1;
        endif;
        return 0;
    }
}