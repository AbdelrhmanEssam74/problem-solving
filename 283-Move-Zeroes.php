class Solution {

    /** 
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
  if (count($nums) == 1) {
    return $nums;
  }
  $size = count($nums);
  $left = 0; // left pointer

  // Move all non-zero elements to the left side of the array
  for ($right = 0; $right < $size; $right++) {
    if ($nums[$right] != 0) {
      $nums[$left] = $nums[$right];
      $left++;
    }
  }

  // Fill the remaining positions with zeroes
  for ($i = $left; $i < $size; $i++) {
    $nums[$i] = 0;
  }

  return $nums;
    }
}