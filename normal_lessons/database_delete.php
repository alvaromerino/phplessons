<?php 
//connect to MySQL server 
$dbh = mysql_connect('localhost', 'root', 'root'); 

//if connection failed output error message 
if (!$dbh)     
{
    die("Unable to connect to MySQL: " . mysql_error()); 
}

//if selection failes output error message 
if (!mysql_select_db('my_personal_contacts'))
{
    die("Unable to select database: " . mysql_error()); 
}

//Venus's ID in the database 
$id = 4; 
//SQL select query 
$sql_stmt = "DELETE FROM my_contacts WHERE id = $id"; 
//execute SQL statement 
$result = mysql_query($sql_stmt); 

//output error message if query execution failed 
if (!$result)     
{    
    die("Deleting record failed: " . mysql_error());
}
else
{
    echo "ID number $id has been successfully deleted"; 
}

mysql_close($dbh); //close the database connection 

?>
