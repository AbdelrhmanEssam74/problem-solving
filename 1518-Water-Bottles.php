class Solution {

    /**
     * @param Integer $numBottles
     * @param Integer $numExchange
     * @return Integer
     */
    function numWaterBottles($numBottles, $numExchange) {
  $counter = 0;
  $total_drink = 0;
  $result = $numBottles;
  while ($result >= $numExchange) {
    $result = $result - $numExchange;
    $counter += 1;
    $total_drink += $numExchange;
    if ($result <= $numExchange && $counter) {
      $result += $counter;
      $counter = 0;
    }
  }
  $total_drink += $counter;
  if ($result) {
    $total_drink += $result;
  }
  return $total_drink;
    }
}