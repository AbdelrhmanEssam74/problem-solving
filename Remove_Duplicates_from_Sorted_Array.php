<?php
echo "<h2>Remove Duplicates from Sorted Array</h2>";
function Remove_Duplicates($arr)
{
  if (count($arr) == 0) {
    return 0; // If the array is empty, there are no duplicates
  }
  $l = 1;  // Pointer to the current position of the unique element
  $r = 1; // Pointer to iterate through the array
  $length = count($arr);
  while ($r < $length) :
    if ($arr[$r] != $arr[$r - 1]) :
      /**
       * Check if the current item in the array is different from the previous item.
       * If they are not equal, store the current item at the position of the pointer $l
       * to keep track of the unique elements. Then, increment both pointers $r and $l
       * to move to the next element in the array.
       * If they are equal, only increment the pointer $r to skip the duplicate element.
       * At the end, return the count of unique items in the array.
       */
      $arr[$l] = $arr[$r];
      $r++;
      $l++;
    else :
      $r++;
    endif;
  endwhile;
  return $l; // Return the count of unique items in the array
}
$nums = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4, 4];
echo Remove_Duplicates($nums);
