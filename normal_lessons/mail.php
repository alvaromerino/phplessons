<?php
    function sanitize_my_email($field)
    {     
        $field = filter_var($field, FILTER_SANITIZE_EMAIL);
        if (filter_var($field, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    $to_email = 'name@company.com';
    $subject = '<a title="testing" href="/software-testing.html">Testing</a> PHP Mail'; 
    $message = 'This mail is sent using the PHP mail function'; 
    $headers = 'From: noreply@company.com'; 
    
    //check if the email address is invalid $secure_check
    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false) 
    {     
        echo "Invalid input"; 
    } 
    else 
    {
        //send email     
        mail($to_email, $subject, $message, $headers);    
        echo "Thank you for using our mail form"; 
    }
?>
