<?php

// CONTROL STRUCTURES AND LOOPS
echo "<h1>Control Structures and Loops</h1>";
echo "<h2>Control Structures</h2>";

/* Control Structures */

// If - else if - else
echo "<h4>If - else if - else</h4>";
$first_number = 22;
$second_number = 25;

if ($first_number > $second_number) 
{
    echo "$first_number is greater than $second_number<br/>";
}
else if ($first_number == $second_number)
{
    echo "First number ($first_number) is equal to Second number ($second_number)<br/>";
}
else
{
    echo "$second_number is greater than $first_number<br/>";
}

// Switch - Case
echo "<h4>Switch - Case</h4>";
$today = "wednesday";
switch($today)
{
    case "sunday": echo "today is sunday."; break;
    case "wednesday": echo "today is wednesday."; break;
    case "saturday": echo "today is saturday."; break;
    default: echo "have a nice day at work"; break;
}


/* LOOPS */
echo "<h2>Loops</h2>";

// For - Loop
echo "<h4>For (loop)</h4>";
for ($i = 0; $i < 10; $i++)
{ 
    $product = 10 * $i;
    echo "The product of 10 * $i is $product <br/>";
}

// Foreach - Loop
echo "<h4>Foreach (loop)</h4>";
$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");
foreach($animals_list as $animal)
{
    echo $animal. "<br>";
}

// Foreach - Loop (Associative array)
echo "<h4>Foreach - Associative Array (loop)</h4>";
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
foreach($persons as $key => $value)
{
    echo "$key is $value"."<br>";
}

// While (loop)
echo "<h4>While (loop)</h4>"; 
$i = 0;
while ($i < 5)
{
    echo $i . "<br>";
    $i++;
}
 
// Do while (loop)
echo "<h4>Do While (loop)</h4>";
$i = 9; 
do { 
    echo "\$i is $i <br>"; 
} while($i < 9);


?>

