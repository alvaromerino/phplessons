<?php
    function my_error_handler($error_no,$error_msg)
    {
        echo "Opps, something went wrong: <br/>";
        echo "Error number: [$error_no] <br/>";
        echo "Error Description: [$error_msg] <br/>";
    }
    
    set_error_handler("my_error_handler"); 
    echo(5/0);
?>

