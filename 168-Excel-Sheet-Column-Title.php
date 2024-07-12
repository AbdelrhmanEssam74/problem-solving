class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $result = '';
        while ($columnNumber > 0) {
            $columnNumber--;
            $result = chr(65 + $columnNumber % 26) . $result;
            $columnNumber = floor($columnNumber / 26);
        }
        return $result;
    }
}