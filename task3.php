<?php
// task 1
echo '<br> task 1';
$names = ['b'=>'mohammed', 'a'=>'ali' , 'c'=>'naser'];
// Sorting array in ascending order by keys

echo '<pre>';
print_r($names);
echo '</pre>';

ksort($names);

echo '<pre>';
print_r($names);
echo '</pre>';
echo '---------------------------------------------------------------------------------------------------';
//task 2
echo '<br>task 2';


$fruits =['apple', 'banana','beans', 'orange', 'beans','banana'];

echo '<pre>';
print_r($fruits);
echo '</pre>';
// Remove duplicates and sort array in descending order

$fruits = array_unique($fruits);

echo '<pre>';
print_r($fruits);
echo '</pre>';
echo '---------------------------------------------------------------------------------------------------';

// task 3
echo ' <br>task 3';
$animals = ['cat', 'dog', 'lion', 'tiger'];
echo '<pre>';
print_r($animals);
echo '</pre>';

$animals[0] = strtoupper($animals[0]);

echo '<pre>';
print_r($animals);
echo '</pre>';


echo '---------------------------------------------------------------------------------------------------';


// task 4
echo '<br>task 4';

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$the_checker = 1;
echo '<br>';
if (in_array($the_checker, $numbers)) {
  echo $the_checker.'is in the array';
}else
 {
  echo $the_checker.'is not in the array';

}