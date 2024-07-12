class Solution {

    /**
     * @param String $s
     * @return String
     */
    function clearDigits($s) {
          $result = [];
  $len = strlen($s);
  for ($i = 0; $i < $len; $i++) {
    if (is_numeric($s[$i])) {
      if (sizeof($result) > 0 && !is_numeric($result[sizeof($result) - 1])) {
        array_pop($result);
      }
    } else {
      array_push($result, $s[$i]);
    }
  }
  $result = implode($result);
  return  $result;
    }
}