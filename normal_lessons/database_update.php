<?php 
//connect to MySQL server 
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

//SQL select query
$sql_stmt = "UPDATE my_contacts SET contact_no = '785', email = 'poseidon@ocean.oc'";
$sql_stmt .= " WHERE id = 5"; 
//execute SQL statement
$result = mysql_query($sql_stmt); 
    
//output error message if query execution failed 
if (!$result)     
{
    die("Deleting record failed: " . mysql_error()); 
}
else
{
    echo "ID number 5 has been successfully updated"; 
}

mysql_close($dbh); //close the database connection 

?>

