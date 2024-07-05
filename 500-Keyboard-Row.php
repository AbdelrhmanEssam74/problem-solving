class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
          $row1 = str_split("qwertyuiop");
  $row2 = str_split("asdfghjkl");
  $row3 = str_split("zxcvbnm");
  $newArr = [];
  foreach ($words as $word) :
    $word_lower = strtolower($word);
    $inRow1 = true;
    $inRow2 = true;
    $inRow3 = true;
    for ($i = 0; $i < strlen($word_lower); $i++) {
      $chr = $word_lower[$i];
      if (!in_array($chr, $row1)) {
        $inRow1 = false;
      }
      if (!in_array($chr, $row2)) {
        $inRow2 = false;
      }
      if (!in_array($chr, $row3)) {
        $inRow3 = false;
      }
      // If the word cannot be in any row, break the loop
      if (!$inRow1 && !$inRow2 && !$inRow3)
        break;
    }
    if ($inRow1 || $inRow2 || $inRow3) {
      $newArr[] = $word;
    }
  endforeach;
  return $newArr;
    }
}