class Solution {

    /**
     * @param String $s
     * @param String $c
     * @return Integer[]
     */
    function shortestToChar($s, $c) {
        $output_arr = array();
        $len = strlen($s);
        $c_position =  -$len;
        for ($i = 0; $i < $len; $i++) {
            if ($s[$i] == $c) {
            $c_position = $i;
            }
            $output_arr[$i] = $i - $c_position;
        }
        for ($i = $len - 1; $i >= 0; $i--) {
            if ($s[$i] == $c) {
            $c_position = $i;
            }
            $output_arr[$i] = min($output_arr[$i], abs($i - $c_position));
        }
        return $output_arr;
    }
}