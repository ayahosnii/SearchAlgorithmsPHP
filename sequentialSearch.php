<?php
function sequentialSearch($arr, $target) {
    $n = count($arr);

    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $target) {
            return $i;
        }
    }

    return -1;
}

// Example usage:
$array = [3, 6, 8, 2, 7, 1, 4, 9];
$target = 7;
$result = sequentialSearch($array, $target);

if ($result != -1) {
    echo "Element found at index $result";
} else {
    echo "Element not found in the array";
}
?>
