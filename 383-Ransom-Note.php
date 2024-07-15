class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $hash_list = array();
        for ($i = 0; $i < strlen($magazine); $i++) {
            if (array_key_exists($magazine[$i], $hash_list)) {
            $hash_list[$magazine[$i]]++;
            } else {
            $hash_list[$magazine[$i]] = 1;
            }
        }
        for ($i = 0; $i < strlen($ransomNote); $i++) {
            if (array_key_exists($ransomNote[$i], $hash_list)) {
            if ($hash_list[$ransomNote[$i]] > 0) {
                $hash_list[$ransomNote[$i]]--;
            } else {
                return false;
            }
            } else {
            return false;
            }
        }
  return true;
    }
}