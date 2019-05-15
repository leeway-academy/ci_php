<?php

require_once 'vendor/autoload.php';

use Leewayweb\CiValidator\CiValidator;

$validator = new CiValidator();

$ci = $argv[1];

echo "Validation digit for '$ci': ".$validator->validation_digit( $ci ).PHP_EOL;
echo "Validation for '$ci': ".($validator->validate_ci( $ci ) ? 'true' : 'false').PHP_EOL;
echo "Random ci: ".$validator->random_ci().PHP_EOL;