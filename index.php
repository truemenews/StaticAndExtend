<?php
include __DIR__.'/ParentClass.php';
include __DIR__.'/ChildClassOne.php';
include __DIR__.'/ChildClassTwo.php';

include __DIR__.'/ChildClassThree.php';
include __DIR__.'/ChildClassFour.php';
include __DIR__.'/ChildClassFive.php';

var_dump(
    ChildClassOne::ini(), 
    ChildClassTwo::ini()
);

echo '</br>------------</br>';

var_dump(
    ChildClassThree::ini('singleton'), 
    ChildClassFour::ini('singleton'), 
    ChildClassFive::ini('singleton')
);