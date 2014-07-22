<?php

/* Time parameters */
echo "<h2> Time parameters </h2>";
echo "r : returns the full date and time. ---> " . date("r");
echo "<br/>";
echo "a : returns the current time am or pm. ---> " . date("a");
echo "<br/>";
echo "A : returns the current time AM or PM. ---> " . date("A");
echo "<br/>";
echo "g : returns the hour without leading zeroes [1 to 12], [0 to 23] respectively. ---> " . date("g"); //
echo "<br/>";
echo "G : returns the hour without leading zeroes [1 to 12], [0 to 23] respectively. ---> " . date("G"); //
echo "<br/>";
echo "h : returns the hour with leading zeros [01 to 12],[00 to 23] respectively. ---> " .  date("h");
echo "<br/>";
echo "H : returns the hour with leading zeros [01 to 12],[00 to 23] respectively. ---> " .  date("H");
echo "<br/>";
echo "i : returns the minutes with leading zeroes [00 to 59]. ---> " . date("i");
echo "<br/>";
echo "s : returns the seconds with leading zeroes [00 to 59]. ---> " . date("s");
echo "<br/>";

/* Day parameters */
echo "<h2>Day parameters</h2>";
echo "d : returns the day of the month with leading zeroes [01 to 31]. ---> " . date("d");
echo "<br/>";
echo "j : returns the day of the month without leading zeroes [1 to 31]. --->" . date("j");
echo "<br/>";
echo "D : returns the first 3 letters of the day name [Sub to Sat]. ---> " . date("D");
echo "<br/>";
echo "l : returns day name of the week [Sunday to Saturday]. ---> " . date("l");	
echo "<br/>";
echo "w : returns day of the week without leading zeroes [0 to 6] Sunday is represent by zero (0) through to Saturday represented by six (6). ---> " . date("w");
echo "<br/>";
echo "z : returns the day of the year without leading spaces [0 through to 365]. ---> " . date("z");
echo "<br/>";

/* Month parameters */
echo "<h2>Month Parameters</h2>";
echo "m : returns the month number with leading zeroes [01 to 12]. ---> " . date("m");
echo "<br/>";
echo "n : returns the month number without leading zeroes [01 to 12]. ---> " . date("n");
echo "<br/>";
echo "M : returns the first 3 letters of the month name [Jan to Dec]. ---> " . date("M");
echo "<br/>";
echo "F : returns the month name [January to December]. ---> " . date("F");
echo "<br/>";
echo "t : returns the number of days in a month [28 to 31]. ---> " . date("t");
echo "<br/>";

/* Year parameters */
echo "<h2>Year parameters</h2>";

echo "L : Returns 1 if it’s a leap year and 0 if it is not a leap year. ---> " . date("L");
echo "<br/>";
echo "Y : returns four digit year format. ---> " . date("Y");
echo "<br/>";
echo "y : returns two (2) digits year format (00 to 99). ---> " . date("y");
echo "<br/>";

?>
