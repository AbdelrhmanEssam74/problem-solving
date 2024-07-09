class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function threeConsecutiveOdds($arr) {
          if (count($arr) == 2)
            return false;
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if (($arr[$i] % 2) and ($arr[$i + 1] % 2) and ($arr[$i + 2] % 2))
             return true;
            
        }
        return false;
    }
}