<?php

echo "<h2>Strings</h2>";
echo "<h4>Ways to create Strings</h4>";

// 4 ways to create Strings
var_dump("You need to be logged in to view this page");

echo "I \'ll be back after 20 minutes<br/>";

$var="Hello";
echo $var.", How are u?<br/>";

$pwd = "pas\$word<br/>";
echo $pwd;

$baby_name = "Shalon"; 
echo <<<EOT
    When $baby_name was a baby,
    She used to look like a "boy".
EOT;

$baby_name = "Shalon"; 
$my_variable = <<<"EOT"
    When $baby_name was a baby,
    She used to look like a "boy".
EOT;
echo $my_variable;

/* PHP String Functions */
echo "<h4>String Functions</h4>";

$name = 'AlVaRo';
echo "\$name = $name<br/>";
echo "strtolower ($name): ".  strtolower($name)."<br/>";
echo "strtoupper ($name): ".  strtoupper($name)."<br/>";
echo "strlen ($name): ".  strlen($name)."<br/>";

$settings_string = "host=localhost;db=sales;uid=root;pwd=demo";
echo "settings string = " . $settings_string . "<br/>";
$settings = explode(';', $settings_string);
echo "explode (';', \$settings_string) = ";
print_r($settings);
echo "<br/>";

$my_var = 'This is a really long sentence that I wish to cut short';
echo "\$my_var = $my_var <br/>";
echo "substr(\$my_var,0,12) = " .substr($my_var,0,12).'...<br/>';

$phrase = "the laptop is very expensive";
echo "\$phrase = $phrase<br/>";
echo "str_replace('the', 'that', \$phrase) = " .  str_replace('the', 'that', $phrase) . "<br/>";

echo "strpos('PHP Programing','Pro') = " .  strpos("PHP Programing", "Pro") . "<br/>";

$password = "password";
echo "sha1(\$password) = " . sha1($password) . "<br/>";
echo "md5(\$password) = " . md5($password) . "<br/>";
echo "str_word_count('This is a really long sentence that I wish to cut short') = " 
        .str_word_count('This is a really long sentence that I wish to cut short')
        . " words<br/>";
echo "ucfirst('respect') = " . ucfirst('respect') . "<br/>";
echo "lcfirst('RESPECT') = " . lcfirst('RESPECT') . "<br/>";

?>

