class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
          // add 0 to the begging and the last of the array
            array_unshift($flowerbed, 0);
            array_push($flowerbed, 0);
            for ($i = 1; $i < sizeof($flowerbed) - 1; $i++) { // skip first and last spot
                if ($flowerbed[$i - 1] == 0 and $flowerbed[$i] == 0 and $flowerbed[$i + 1] == 0) :
                $flowerbed[$i] = 1;
                $n--;
                endif;
            }
            return $n <= 0;
    }
}