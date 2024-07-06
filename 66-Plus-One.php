class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
  $size = count($digits);
  $last_digit = $digits[$size - 1];
  $last_digit++; // increment by 1
  if ($last_digit > 9) { // check if the last digit greater than 9
    $carry = 1;
    $digits[$size - 1] = 0;
    for ($i = $size  - 2; $i >= 0; $i--) {
      $digits[$i] += $carry;
      if ($digits[$i] > 9) {
        $digits[$i] = 0;
      } else {
        $carry = 0;
        break;
      }
    }
    if ($carry === 1)
      array_unshift($digits, 1);
  } else {
    $digits[$size - 1] = $last_digit;
  }
  return $digits;
    }
}