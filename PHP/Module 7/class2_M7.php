<?php

// declare(strict_types=1);

// loop : for loop

/*
for ($i = 5; $i <= 20; $i += 5) {
    echo $i . "\n";
}
*/

// for loop in array

/*
$fruits = ['apple', 'banana', 'orange', 'jackfruit', 'pineapple', 'litchi','mango'];
$totalFruits = count($fruits);

for ($i = 0; $i < $totalFruits; $i++) {
    echo $fruits[$i] . "\n";
}
*/

// foreach loop 

/*
$fruits = ['apple', 'banana', 'orange', 'jackfruit', 'pineapple', 'litchi', 'mango'];
$totalFruits = count($fruits);

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
*/

// do while loop
/*
$i = 0;
do {
    $i++;
    echo $i . "\n";
} while ($i < 10);
*/

// break in do while loop

/*
$i = 0;
do {
    $i++;
    echo $i . "\n";
    if ($i == 5) {
        break;
    }
} while ($i < 10);
*/

// Associative array

/*
$countries = [
    'Bangladesh' => "Dhaka",
    'India' => "New Delhi",
    'China' => "Beijing",
    'Japan' => "Tokyo",
    'Korea' => "Seoul",
    'Russia' => "Moscow"
];
foreach ($countries as $country => $capital) {
    echo "The capital of $country is $capital" . "\n";
}
*/

// function

/*
function add($n1, $n2)
{
    $sum = $n1 + $n2;
    return $sum;
}

//$total = add(150, 250);
//echo $total;

$total = add(100005, 300010);
echo $total;
*/

// Scope

/*
$name = "John Doe";
function greet($n)
{
    echo "Hi " . "$n";
}
greet($name);
*/

/*
function greet($name, $greetings = "Good Morning")
{
    echo "$greetings " . "$name";
}
greet("Warisha", "Good Night");
*/

/*
function getNumbers()
{
    $output = [5, 16];
    return $output;
}

//$result = getNumbers();
list($a, $b) = getNumbers();
echo $a . "-" . $b;
*/
/*
$mathMarks = [
    'john' => 85,
    'mary' => 90,
    'rahim' => 70,
    'arfan' => 60
];
// $johnsMark = $mathMarks['john'];
// calculate the grade
function calculateGrade($mark)
{
    if ($mark >= 90) {
        return "Golden A+";
    } elseif ($mark >= 80) {
        return "A+";
    } elseif ($mark >= 70) {
        return "A";
    } elseif ($mark >= 60) {
        return "A-";
    } elseif ($mark >= 50) {
        return "B";
    } elseif ($mark >= 40) {
        return "C";
    } elseif ($mark >= 33) {
        return "D";
    } else {
        return "F";
    }
}

/*
$johnsGrade = calculateGrade($johnsMark);
echo $johnsGrade;

$marysMark = $mathMarks['mary'];
$marysGrade = calculateGrade("marysMark");
echo $marysGrade;


foreach ($mathMarks as $student => $mark) {
    $grade = calculateGrade($mark);
    echo "$student got $mark and grade is $grade" . "<br>";
}
*/

// By Value By Reference

/*
$name = "John Doe";

function greet($name)
{
    echo "Hi " . $name;
    $name = "Jane Doe";
}
greet($name);
echo $name;
*/

/*
$name = "John Doe";

function greet(&$name)
{
    echo "Hi " . $name;
    $name = "Jane Doe";
}
greet($name);
echo $name;
*/