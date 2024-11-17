<?php
// Define an array of elements
$array = [10, 25, 30, 45, 50, 75, 90, 100];

// Define the element to search for
$searchElement = 50;  // You can change this to search for any element

// Flag to track if the element is found
$found = false;

// Loop through the array to search for the element
foreach ($array as $element) {
    if ($element == $searchElement) {
        $found = true;
        break;  // Exit the loop as we found the element
    }
}

// Check if the element was found
if ($found) {
    echo "Element " . $searchElement . " was found in the array.";
} else {
    echo "Element " . $searchElement . " was not found in the array.";
}
?>
