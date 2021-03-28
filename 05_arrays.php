<?php
$brtag = "<br>";

// Create array
$fruits = ["banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1] . $brtag;

// Set element by index
$fruits[0] = "Peach";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[2]);

// Append element
$fruits[] = "Banana";
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits) . $brtag;

// Add element at the end of the array
array_push($fruits, "foo");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, "bar");
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits) . $brtag;

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

// Combine array elements into string
echo implode("&", $fruits) . $brtag;

// Check if element exist in the array
echo '<pre>';
var_dump(in_array("Apple", $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Mango", $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
array_merge($fruits, $vegetables);
echo "<pre>";
echo var_dump(array_merge($fruits, $vegetables));
echo var_dump(...$fruits, ...$vegetables);
echo "</pre>";

// Sorting of array (Reverse order also)
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays