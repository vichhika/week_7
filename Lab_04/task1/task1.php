<?php

// The advantage of multiple inheritance is that a class can inherith the functionality of more than one base class.
// The disadvantage of multiple inheritance is that can lead to a lot of confusion or collision when two base classes implement a method with the same name.

// Example

trait Father{
    public function getMoney() : float{
        return 10.0;
    }
}

trait Mother{
    public function getMoney() : float{
        return 15.0;
    }
}

class Child{
    use Mother,Father;
    public function myBalance(){
        echo "I have ". "$";
    }
}

$child = new Child();
$child->myBalance();
echo $child->getMoney() . "\n";