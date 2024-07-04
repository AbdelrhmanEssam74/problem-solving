class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
    $counter = 0;
      // Start a loop from the end of the string going backwards.
    for ($i = strlen($s) - 1; $i >= 0; $i--) {
        // Check if the current character is not a space.
        if ($s[$i] != " ") {
         $counter++; // If it's not a space, increment the counter.
             // If the previous character is a space, break out of the loop.
        if ($s[$i - 1] == " ") {
         break;
        }
        } else {
         continue;// If it's a space, continue to the next iteration.
        }
  }
  return $counter;
    }
}