<?php

/* Functions */
echo "<h2>Functions</h2>";

// String functions (go to strings.php)
echo "<h4>String Functions</h4>";
echo "Go to strings.php";

// Numeric Functions
echo "<h4>Numeric Functions</h4>";

$var = "Hello";
if (is_numeric($var)) 
{
    echo "\$var is numeric.<br/>";
}
else {
    echo "\$var is not numeric.<br/>";
}

$number = 249494;
echo "number_format($number) = " . number_format($number) . "<br/>";

echo "rand() = " . rand() . "<br/>";
echo "round(3.49) = " . round(3.49) . "<br/>";
echo "sqrt(9) = " . sqrt(9) . "<br/>";
echo "cos(45) = " . cos(45) . "<br/>";
echo "sin(45) = " . sin(45) . "<br/>";
echo "tan(45) = " . tan(45) . "<br/>";
echo "pi() = " . pi();

// Date Functions
echo "<h4>Date Functions</h4>";
echo "Go to date_functions.php";

// Other Functions
echo "<h4>Other Functions</h4>";
echo "Arrays - Go to arrays.php<br/>";
echo "Files - Go to files.php<br/>";
echo "Database Functions - Go to database_functions.php";

// User defined functions
echo "<h4>User defined functions</h4>";

// my functions
function display_name($name)
{
    echo "Hello " . $name;
}

function kilometers_to_miles($kilometers = 0)
{
    $miles_scale = 0.62;
    return $kilometers * $miles_scale;
}

$my_name = "Alvaro";
echo "display_name($my_name) = ";
display_name($my_name);
echo "<br/>";


echo "kilometers_to_miles(100) = " . kilometers_to_miles(100) . "<br/>";

?>