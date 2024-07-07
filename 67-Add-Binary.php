class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
function addBinary($a, $b)
{
  if (!$a && !$b) {
    return "0";
  }
  $c = 0;
  $result = "";
  $len_a = strlen($a);
  $len_b = strlen($b);
  $max_len = max($len_a, $len_b); // get the max length 
  $a = str_pad($a, $max_len, "0", STR_PAD_LEFT); // padding by 0 
  $b = str_pad($b, $max_len, "0", STR_PAD_LEFT); // padding by 0 
  for ($i = $max_len - 1; $i >= 0; $i--) {
    $d = $a[$i] + $b[$i] + $c;
    $result = $d % 2 . $result;
    $c = intdiv($d, 2);
  }
  if ($c)
    $result = "1" . $result;
  return $result;
}
}