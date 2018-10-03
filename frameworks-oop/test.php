<?php
include 'Person.php';

$joey = new Person( 'Joey', 'schmitz');
//$joey->firstname = 'Joey';
//$joey->lastname = 'Schmitz';
echo 'Hallo ' . strtoupper($joey->getFullName()). "\n\n";
//echo 'Hallo ' . $joey->firstname . ' ' . $joey->lastname . "\n\n";