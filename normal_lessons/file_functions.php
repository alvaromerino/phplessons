<?php

    /**
     * FILE FUNCTIONS
     * file_exists --> This function is used to determine whether a file exists or not.
     * fopen --> is used to open files.
     * fwrite --> is used to write files.
     * fclose --> is used to close a file which is already open.
     * fgets --> is used to read a file line by line.
     * copy --> is used to copy an existing file.
     * unlik --> is used to delete an existing file.
     * file_get_contents --> is used to return the contents of a file as a string.
     */

    /** file exists **/
    if (file_exists('my_settings.txt'))
    {    
        echo 'file found!';
    } 
    else
    {     
        echo 'my_settings.txt does not exist';
    } 
    
    /* the other functions will be tested on different
     * files named file_'action'.php */
?>