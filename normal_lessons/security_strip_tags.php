<?php
//strip_tags function is used to remove tags such as <script></script> from input data
$user_input = "<script>alert('Your site sucks!');</script>";
echo "<h4>My Commenting System</h4>";
echo strip_tags($user_input);

?>