<?php
/**
 * Unset only frees the individual session variables. Other data remains intact.
 */
    session_start();
    unset($_SESSION['product']); //destroy product session item 
 
?>