<?php

//loads the business logic class
require 'opinion_poll_model.php';

//creates an instance of the business logic class
$model = new Opinion_poll_model();

//performs the data validation and uses JavaScript to display a 
//message box if not candidate has been voted for.
if (count($_POST) == 1) {
    echo "<script>alert('You did not vote!');</script>";
}

//checks if a vote has been selected by counting the number of items 
//in the $_POST array. 
//If no item has been select, the $_POST will only contain the submit item. 
//If a candidate has been chosen, the $_POST array will two elements, 
//the submit and vote item. This code is also used to insert a new vote record
// and then display the results page
if (count($_POST) > 1) {
    
    $ts = date("Y-m-d H:i:s");
    $option = $_POST['vote'][0];
    $sql_stmt = "INSERT INTO js_libraries (choice,ts) VALUES ($option, '$ts')";
    $model->insert($sql_stmt);
    
    $sql_stmt = "SELECT COUNT(choice) choices_count FROM js_libraries;";
    $choices_count = $model->select($sql_stmt);
    $libraries = array("", "JQuery", "MooTools", "YUI Library", "Glow");
    $table_rows = '';
    
    for ($i = 1; $i < 5; $i++) {
        $sql_stmt = "SELECT COUNT(choice) choices_count FROM js_libraries WHERE choice = $i;";
        $result = $model->select($sql_stmt);
        $table_rows .= "<tr><td>" . $libraries[$i] . " Got:</td><td><b>" . $result[0] . "</b> votes</td></tr>";
    }
    
    require 'results.html.php';
    //is used to terminate the script execution after the results have been displayed so that the opinion poll form is not displayed.
    exit;
}

//displays the opinion poll form if nothing has been selected.
require 'opinion.html.php';

?>