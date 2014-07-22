<?php

class Animal {
    
    private $family, $food;
    
    public function __construct($family, $food) {
        $this->family = $family;
        $this->food = $food;
    }
    
    public function getFamily() {
        return $this->family;
    }

    public function getFood() {
        return $this->food;
    }

    public function setFamily($family) {
        $this->family = $family;
    }

    public function setFood($food) {
        $this->food = $food;
    }
    
}

?>