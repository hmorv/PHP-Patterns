<?php

require 'vendor/autoload.php';

use App\App;
use App\LogToFile;
use App\LogToDatabase;
use App\LogToWebservice;
/**
The strategy pattern defines a family of algorithms, encapsullates each one and then
make them interchangeable.
With this pattern we'll able to build loosely coupled applications
*/

$app = new App();
$app->log('some information', new LogToFile);
$app->log('some extra information');
$app->log('some information to the database', new LogToDatabase);
$app->log('some information to the webservice', new LogToWebservice);