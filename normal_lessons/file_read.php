<?php
$fh = fopen("my_settings.txt", 'r') or die("File does not exist or you lack permission to open it");

if ($fh)
{
    while ( ($buffer = fgets($fh)) !== false ) 
    {
        echo $buffer;
    }
    
    if (!feof($fh)) 
    {
        echo "Error: fallo inesperado de fgets()\n";
    }
    
    fclose($fh);
}

?>

