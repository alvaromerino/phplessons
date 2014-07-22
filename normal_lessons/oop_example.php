<?php

    require 'Animal.php';
    require 'Cow.php';
    require 'Lion.php';
    
    $cow = new Cow('Herbivore', 'Grass');
    $lion = new Lion('Canirval', 'Meat');
    
    echo '<b>Cow Object</b> <br>';
    echo 'The Cow belongs to the ' . $cow->getFamily() . ' family and eats ' . $cow->getFood() . '<br><br>'; 
    echo '<b>Lion Object</b> <br>';
    echo 'The Lion belongs to the ' . $lion->getFamily() . ' family and eats ' . $lion->getFood();

?>