class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        /*
        * Solution 1
        * 
        */
        //         if (strlen($s) != strlen($t)) {
        //     return false;
        // }
        // $arr1 = [];
        // $arr2 = [];
        // for ($i = 0; $i < strlen($s); $i++) {
        //     $arr1[$i] = $s[$i];
        //     $arr2[$i] = $t[$i];

        // }
        // asort($arr1);
        // asort($arr2);
        // $New_start_index = 0;
        // $arr1 = array_combine(range($New_start_index,
        //     count($arr1) + ($New_start_index - 1)),
        //     array_values($arr1));
        // $arr2 = array_combine(range($New_start_index,
        //     count($arr2) + ($New_start_index - 1)),
        //     array_values($arr2));
        // for ($i = 0; $i < count($arr1); $i++) {
        //     if ($arr1[$i] != $arr2[$i])
        //         return false;
        // }
        // return true;
        /*
        * Solution 2
        * 
        */
    return (count_chars($s , 1)  == count_chars($t,1));
    }
}