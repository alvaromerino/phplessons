<?php

/* Arrays in PHP
 * Numeric
 * Associative
 * Multi- dimensional
 * Functions are available to manipulate arrays
 */

/* Numeric Array */
// Option 1
$movie[0] = 'Shaolin Monk';
$movie[1] = 'Drunken Master';
$movie[2] = 'American Ninja';
$movie[3] = 'Once upon a time in China';
$movie[4] = 'Replacement Killers';

// Option 2
$movie = array(0 => "Shaolin Monk",
    1 => "Drunken Master",
    2 => "American Ninja",
    3 => "Once upon a time in China",
    4 =>"Replacement Killers" );

/* Associative:
 * Associative arrays are also very useful when retrieving data from the
 * database. The field names are used as id keys.
 */

// Simple associative array
$persons = array("Mary" => "Female", 
    "John" => "Male", 
    "Mirriam" => "Female");

// Arrays that contains other nested arrays.
// The advantage of multidimensional arrays is that they allow us to
// group related data together. 
$movies = array(
    "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
    "action" => array("Die Hard", "Expendables"),
    "epic" => array("The Lord of the rings"),
    "Romance" => array("Romeo and Juliet")
    );


$film = array(
    'comedy' => array(
                0 => "Pink Panther",
                1 => "john English",
                2 => "See no evil hear no evil"
                ),
    'action' => array (
                0 => "Die Hard",
                1 => "Expendables",
                ),
    'epic'   => array (
                0 => "The Lord of the rings"
                ),
    'romance'=> array (
                0 => "Romeo and Juliet"
                )
);     

/* Array Functions */
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
//count
count($lecturers);
//is array
is_array($lecturers);

//sort
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
sort($persons);

//key sort
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
ksort($persons);

//value sort
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
asort($persons);

?>