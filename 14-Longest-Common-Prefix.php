class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if (empty($strs)) return ""; // return "" if the array is empty
        $prefix = $strs[0]; // Initialize prefix with the first string
        for ($i = 1; $i < count($strs); $i++) {
            while (strpos($strs[$i], $prefix) !== 0) { // checks if the prefix is not a substring at the beginning of the current string
            $prefix = substr($prefix, 0, strlen($prefix) - 1); // Remove last character from prefix
            if (empty($prefix)) return ""; // If the prefix becomes empty, return ""
            }
        }
        return $prefix;
    }
}