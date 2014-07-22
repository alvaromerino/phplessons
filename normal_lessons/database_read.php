<?php

//connect to MySQL server if (!dbh)
$dbh = mysql_connect('localhost', 'root', 'root');
//if connection failed output error message
if (!$dbh)
{
    die("Unable to connect to MySQL: " . mysql_error());
}

//if selection fails output error message
if (!mysql_select_db('my_personal_contacts')) 
{
    die("Unable to select database: " . mysql_error());
}

//SQL select & execute SQL Statement
$sql_stmt = "SELECT * FROM my_contacts";
$result = mysql_query($sql_stmt);

//output error message if query execution failed
if (!$result)
{
    die("Database access failed: " . mysql_error());
}

//get number of rows returned
$rows = mysql_num_rows($result);

if ($rows)
{
    while ($row = mysql_fetch_array($result))
    {
        echo 'ID: ' . $row['id'] . '<br/>';
        echo 'Full Names: ' . $row['full_names'] . '<br/>';
        echo 'Gender: ' . $row['gender'] . '<br/>';
        echo 'Contact No: ' . $row['contact_no'] . '<br/>';
        echo 'Email: ' . $row['email'] . '<br/>';
        echo 'City: ' . $row['city'] . '<br/>';
        echo 'Country: ' . $row['country'] . '<br/><br/>';
    }
}

//close the database connection
mysql_close($dbh);

?>