<?php
 
require 'flight/Flight.php';
require 'api.php';
 
Flight::route('POST /login', 'login');
 
Flight::start();
 
?>