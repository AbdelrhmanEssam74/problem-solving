class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function getEncryptedString($s, $k) {
   $len = strlen($s);
  $position  = 0;
  $EncryptedString = "";
  for ($i = 0; $i < $len; $i++) {
    $position = ($i + $k) % $len;
    $EncryptedString .= $s[$position];
  }
  return $EncryptedString;
    }
}