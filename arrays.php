<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
$fruits2 = array("Apple", "Orange", "Orange");

// Print the whole array
//echo '<pre>';
//var_dump($fruits); // print_r
//echo '</pre>';

// Get element by index
//echo $fruits[0].'<br>';

// Set element by index
//$fruits[0] = "Peach";
//echo '<pre>';
//var_dump($fruits); // print_r
//echo '</pre>';

// Check if array has element at index 2
//echo '<pre>';
//var_dump(isset($fruits[2]));  // Change age into 5
//echo '</pre>';

// Append element
//$fruits[] = 'Peach';
//echo $fruits[3].'<br>';
//$fruits[] = 'Peach';
//$fruits[] = 'Peach';
//$fruits[] = 'Peach';
//
//echo '<pre>';
//var_dump($fruits); // print_r
//echo '</pre>';
//
//$fruits2 = array("Apple", "Orange", "Orange");
//$fruits2[] = 'xxx';
//$fruits2[] = 'xxx';
//$fruits2[] = 'xxx';
//$fruits2[] = 'xxx';
//
//echo '<pre>';
//var_dump($fruits2);
//echo '</pre>';

// Print the length of the array
//echo count($fruits).'<br>';
//echo count($fruits2).'<br>';

// Add element at the end of the array
array_push($fruits, 'Foo');
array_push($fruits2, 'YYY');

//echo '$fruits';
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//echo '$fruits2';
//echo '<pre>';
//var_dump($fruits2);
//echo '</pre>';

// Remove element from the end of the array
//array_pop($fruits);
//array_pop($fruits2);


//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';
//
//echo '<pre>';
//var_dump($fruits2);
//echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'Apple');

echo '$fruits';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
//array_shift($fruits);
//
//echo '$fruits';
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';

// Split the string into an array
//$string = "Banana,Apple,Peach";
//echo '<pre>';
//var_dump(explode(",", $string));
//echo '</pre>';
//
//
//print_r($fruits);

// Combine array elements into string
//echo '<br>';
//echo implode("&", $fruits).'<br>';

// Check if element exist in the array
//echo '<pre>';
//var_dump(in_array('Apple', $fruits));
//echo '</pre>';

// Search element index in the array
//echo '<pre>';
//var_dump(array_search("Apple", $fruits));
//echo '</pre>';

// Merge two arrays
//$vegetables = ['Potato', 'Cucumber'];
//echo '<pre>';
//var_dump(array_merge($fruits, $vegetables));
//var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
//echo '</pre>';

//$vegetables2 = ['SSS', "FFF"];
//echo '<pre>';
//var_dump(array_merge($fruits2, $vegetables2));
//var_dump([...$fruits2, ...$vegetables2]);
//echo '</pre>';


// Sorting of array (Reverse order also)
//sort($fruits); //sort, rsort, usort
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';

//rsort($fruits2);
//echo '<pre>';
//var_dump($fruits2);
//echo '</pre>';

// Filter, map, reduce of array
//$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
//$evens = array_filter($numbers, function($n){ // fn($n) => $n % 2 === 0
//    return $n % 2 === 0;
//});
//echo '<pre>';
//var_dump($evens);
//echo '</pre>';
//
//$squares = array_map(fn($n) => $n + 1, $numbers);
//echo '<pre>';
//var_dump($squares);
//echo '</pre>';
//
//$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
//echo $sum.'<br>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

$person2 = [
    'name' => 'Alex',
    'surname' => 'AAA',
    'age' => 36,
    'hobbies' => ['FF', 'CC', 'AB'],
];

echo $person2['name'].'<br>';
$person2['surname'] = 'Anghel';
echo $person2['surname'].'<br>';
// Get element by key
//echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';

echo '<pre>';
var_dump($person2);
echo '</pre>';

// Check if array has specific key
//echo '<pre>';
//var_dump(isset($person['age']));  // Change age into "location"
//echo '</pre>';

//echo '<pre>';
//var_dump(isset($person2['age']));
//var_dump(isset($person2['address']));
//echo '</pre>';
//$person2['channel22'] = 'TraversyMedia22';
//// Print the keys of the array
//echo '<pre>';
//var_dump(array_keys($person));
//var_dump(array_keys($person2));
//echo '</pre>';

// Print the values of the array
echo '<pre>';
echo 'array keys:';
var_dump(array_keys($person2));
echo 'array values:';
var_dump(array_values($person2));
echo '</pre>';

// Sorting associative arrays by values, by keys
//ksort($person); // ksort, krsort, asort, arsort
//echo '<pre>';
//var_dump($person);
//echo '</pre>';

ksort($person2);
echo 'Sort by keys';
echo '<pre>';
var_dump($person2);
echo '</pre>';


asort($person2);
echo 'Sort by values';
echo '<pre>';
var_dump($person2);
echo '</pre>';


// Two dimensional arrays
//$todoItems = [
//    ['title' => 'Todo1', 'completed' => true],
//    ['title' => 'Todo 2', 'completed' => false],
//];
//
//echo '<pre>';
//var_dump($todoItems);
//echo '</pre>';

$todoItems = [
    ["title" => "item 1", "completed" => true],
    ["title" => "item 2", "completed" => false],
    ["title" => "item 3", "completed" => true],
];

echo 'Print two dimensional arrays';
echo '<pre>';
var_dump($todoItems);
echo '</pre>';


