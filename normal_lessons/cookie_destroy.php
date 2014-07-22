<?php
/* If you want to destroy a cookie before its expiry time, 
 * then you set the expiry time to a time that has already passed.
 */
    setcookie("user_name", "Guru99", time() - 360, '/');
?>