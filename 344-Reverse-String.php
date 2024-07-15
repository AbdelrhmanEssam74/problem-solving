class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
          $new = [];
  for ($i = count($s) - 1; $i >= 0; $i--) {
    $new[] = $s[$i];
  }
  $s = $new;
  return $s;
    }
}