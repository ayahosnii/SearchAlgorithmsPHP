<?php
function binarySearch($arr, $target) {
    $left = 0;
    $right = count($arr) - 1;

    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);

        // Check if the target is at the middle of the array
        if ($arr[$mid] == $target) {
            return $mid;
        }

        // If the target is greater, search the right half of the array
        if ($arr[$mid] < $target) {
            $left = $mid + 1;
        }

        // If the target is smaller, search the left half of the array
        else {
            $right = $mid - 1;
        }
    }

    // If the target is not found in the array, return -1
    return -1;
}

// Example usage:
$sortedArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$target = 5;
$result = binarySearch($sortedArray, $target);

if ($result != -1) {
    echo "Element found at index $result";
} else {
    echo "Element not found in the array";
}
?>
