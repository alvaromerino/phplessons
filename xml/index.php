<?php

//uses the simplexml_load_file function to load the file name employees.xml and 
//assign the contents to the array variable $xml.
$xml = simplexml_load_file('employees.xml');

echo '<h2>Employees Listing</h2>';

//gets the contents of the record node.
$list = $xml->record;

for ($i = 0; $i < count($list); $i++)
{
    echo '<b>Man no: </b>' . $list[$i]->attributes()->man_no . '<br/>';
    echo 'Name: ' . $list[$i]->name . '<br/>';
    echo 'Position: ' . $list[$i]->position . '<br/><br/>';
}

//"$list[$i]->attributes()->man_no;" reads the man_no attribute of the element
//"$list[$i]->name;" reads the value of the name child element
//"$list[$i]->position;" reads the value of the position child element

?>