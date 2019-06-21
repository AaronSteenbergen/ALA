<?php
require 'php/helpers/h_routes.php';
require 'php/ini.php';

$routes = new h_routes();
new ini();

$routes->add('/', ini::main());
$routes->add('/bookings', ini::bookings());
$routes->add('/contact', ini::contact());
$routes->add('/register', ini::register());
$routes->add('/login', ini::login());

$routes->submit();

?>
