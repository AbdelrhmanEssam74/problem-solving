class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
  $i = 0;
  $j = 0;
  while ($i < (strlen($haystack) + 1 - strlen($needle))) {
    while ($j < strlen($needle)) {
      if ($haystack[$i + $j] != $needle[$j]) {
        break;
      }
      if ($j == strlen($needle) - 1) {
        return $i;
      }
      $j++; // Increment $j to move to the next character in $needle
    }
    $i++; // Increment $i to move to the next character in $haystack
    $j = 0; // Reset $j for the next iteration of the inner loop
  }
  return -1;
    }
}