<?php

echo "<h2>Logical Statements and Operators</h2>";

$year = 2013;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "This year is a leap year";
} else {
    echo "This year is not a leap year";
}

echo "<br><br>";

$firstInteger = 2;
$secondInteger = 2;

if ($firstInteger == $secondInteger) {
    $result = ($firstInteger + $secondInteger) * 3;
} else {
    $result = $firstInteger + $secondInteger;
}

echo "(" . $firstInteger . " + " . $secondInteger . ") = " . $result;

echo "<br><br>";

$units = 300;
$bill = 0;

if ($units <= 50) {
    $bill = $units * 2.50;
} elseif ($units <= 150) {
    $bill = (50 * 2.50) + (($units - 50) * 5.00);
} elseif ($units <= 250) {
    $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
} else {
    $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
}

echo "Electricity Bill: " . $bill . " JOD";


echo "<h2>Arrays</h2>";

$colors = array("white", "green", "red");

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: ";
echo "the " . $colors[2] . " carpet, the " . $colors[1] . " lawn, the " . $colors[0] . " house.";

echo "<br><br>";

$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Greece" => "Athens"
);

asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . "<br>";
}

echo "<br>";

$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo "<br>";

$colors = array("red", "blue", "white", "yellow");

foreach ($colors as $color) {
    echo strtoupper($color) . "<br>";
}


echo "<h2>Loops</h2>";

for ($i = 1; $i <= 10; $i++) {
    if ($i > 1) {
        echo "-";
    }

    echo $i;
}

echo "<br><br>";

$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}

echo "Total: " . $total;

echo "<br><br>";

for ($row = 1; $row <= 5; $row++) {

    for ($column = 1; $column <= 5; $column++) {

        if ($column == $row) {
            echo $row;
        } else {
            echo "0";
        }

        echo " ";
    }

    echo "<br>";
}

echo "<br>";

$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Factorial: " . $factorial;

echo "<br><br>";

for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    } elseif ($i % 3 == 0) {
        echo "Fizz ";
    } elseif ($i % 5 == 0) {
        echo "Buzz ";
    } else {
        echo $i . " ";
    }
}


echo "<h2>Functions</h2>";

function isPrime($number) {

    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 3;

if (isPrime($number)) {
    echo $number . " is a prime number";
} else {
    echo $number . " is not a prime number";
}

echo "<br><br>";

function reverseText($text) {
    return strrev($text);
}

echo reverseText("remove");

echo "<br><br>";

function isPalindrome($text) {

    $text = strtolower($text);
    $text = preg_replace("/[^a-z]/", "", $text);

    return $text == strrev($text);
}

$text = "Eva, can I see bees in a cave?";

if (isPalindrome($text)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}

?>