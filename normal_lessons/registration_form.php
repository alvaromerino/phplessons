<!DOCTYPE html>

<html>
    <head>
        <title>Registration Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>        
        <!-- if -->
        <?php if (isset($_POST['form_submitted'])): ?> 
            
            <?php if (!isset($_POST['agree'])): ?>
            <p>You have not accepted our terms of service</p>
            <p>Go <a href="./registration_form.php"> back </a> to the form </p>
            
            <?php else: ?>
            <h2>Thank you <?php echo $_POST['firstname']; ?> </h2>
            <p>You have been registered as <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?></p>
            <p>Go <a href="./registration_form.php"> back </a> to the form </p>
            
            <?php endif; ?>

        <!-- else -->
        <?php else: ?>
        <h2>Registration Form</h2>
        <form action="registration_form.php" method="POST"> 
            First name:<input type="text" name="firstname"> <br /> 
            Last name: <input type="text" name="lastname"> <br /> 
            Agree to Terms of Service <input type="checkbox" name="agree"> <br />
            <input type="hidden" name="form_submitted" value="1"/>
            <input type="submit" value="Submit"> 
        </form> 

        <!-- endif -->
        <?php endif; ?>
        
    </body>
</html>
