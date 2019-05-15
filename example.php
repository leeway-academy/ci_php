<?php

require_once 'vendor/autoload.php';

use Leeway\CiValidator\CiValidator;

$validator = new CiValidator();

$ci = "1.111.111";

echo "Validation digit for '$ci': ".$validator->validation_digit( $ci ).PHP_EOL;
echo "Validation for '$ci': ".($validator->validate_ci( $ci ) ? 'true' : 'false').PHP_EOL;
echo "Random ci: ".$validator->random_ci().PHP_EOL;