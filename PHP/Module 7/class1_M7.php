<?php

declare(strict_types=1);
// function is 2 types: 1. Built in function  2. User Defined function
/*
There are built-in function in string, array, date time, CURL, Session, file
*/
// Built-in function 

/*
$name = "OSTAD Limited";
$length = strlen($name);
echo $length;
*/

// User Defined function

/*
function sum()
{
    $x = 100;
    $y = 200;
    $z = $x + $y;
    echo $z;
}
sum();
*/

// function parameter

/*
function sum($a, $b, $c)
{
    $num1 = $a;
    $num2 = $b;
    $num3 = $c;
    echo ($num1 + $num2) - $num3;
}
sum(300, 600, 1000);
*/

// function parameter with default value

/*
function sum($a, $b, $c = 250)
{
    $num1 = $a;
    $num2 = $b;
    $num3 = $c;
    echo ($num1 + $num2) - $num3;
}
sum(300, 600, 1000);
sum(300, 600);
*/

// Argument/parameter with type hinting

/*
function sum(int $a, int $b, int $c = 250)
{
    $num1 = $a;
    $num2 = $b;
    $num3 = $c;
    echo ($num1 + $num2) - $num3;
}
sum(300, 600, 1000);
sum(100, 200, 0);
*/

// Multiple Type Hinting

/*
function MySelf(string $name, int|string $age, string $city)
{
    echo "My name is $name, my age is $age and the city I live is $city";
}
MySelf("Mukibul Minhaz", 33, "Cox's Bazar");
*/

// function with Null Type Hinting

/*
function MyName(?string $name)
{
    echo $name;
}
MyName("Mukibul");
MyName(123);
MyName(null);
*/

// Variadic function 
/*
function sum(...$number)
{
    echo "$number[0]<br>";
    echo "$number[1]<br>";
    echo $number[2];
}

sum(10, 30, 40, 50, 90, 110);
*/

// Anonymous function..> Hit&Run 

/*
(function () {
    echo "I am anonymous function";
})();
*/

// Anonymous function assigned to variable

/*
$HitRun = function ($name) {
    echo "I am anonymous function $name";
};
$HitRun("xyz");
*/

//Basic return types: int, float, string, bool, void

/*
function addTwo():int
{
    $a = 10;
    $b = 20;
    return $a + $b;
}
addTwo();
$sum = addTwo() + 30;
echo $sum;
*/

// Union /Multiple Return type

/*
function addTwo(): int|float|string|bool
{
    $a = 10;
    $b = 20;
    return $a + $b;
}
addTwo();
$sum = addTwo() + 30;
echo $sum;
*/
