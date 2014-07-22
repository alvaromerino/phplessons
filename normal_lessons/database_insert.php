<?php

//connect to MySQL server if (!$dbh) 
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

//Sql statement
$sql_stmt = "INSERT INTO my_contacts (full_names,gender,contact_no,email,city,country)"; 
$sql_stmt .= " VALUES('Poseidon','Mail','541','poseidon@sea.oc','Troy','Ithaca')"; 
//execute SQL statement 
$result = mysql_query($sql_stmt); 

//output error message if query execution failed 
if (!$result)     
{
    die("Adding record failed: " . mysql_error()); 
}
else
{
    echo "Poseidon has been successfully added to your contacts list.";
}

mysql_close($dbh); //close the database connection 

?>

