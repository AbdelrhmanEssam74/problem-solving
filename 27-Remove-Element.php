class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
          $count = count($nums);
  $l = 0;
  $r = $count - 1;
  while ($l <= $r) {
    if ($nums[$l] == $val) {
      unset($nums[$l]);
    }
    if ($nums[$r] == $val) {
      unset($nums[$r]);
    }
    $l++;
    $r--;
  }
  return count($nums);
    }
}