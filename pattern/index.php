<?php

/**
This pattern get the common logic and wrap it into an abstract class,
so subclasses will handle with particular logic, like making a vegetal or bacon sandwich.
The common methods are all in the abstract method Sandwich
*/

require 'vendor/autoload.php';

(new App\Vegetal)->make();
(new App\Bacon)->make();