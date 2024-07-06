class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
              $stack = [];
  $map2 = [')', '}', ']'];
  $map3 = ['(', '{', '['];
  $len = strlen($s);
  for ($i = 0; $i < $len; $i++) {
    $c = $s[$i];
    if (in_array($c, $map3)) {
      array_push($stack, $c);
    } else if (in_array($c, $map2)) {
      if (empty($stack)) {
        return false;
      }
      $top = array_pop($stack);
      if ($top != $map3[array_search($c, $map2)]) {
        return false;
      }
    }
  }
  return empty($stack);
    }
}